<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@floream.com>
 * @copyright 2015 Floream Limited
 */

namespace Floream\BusinessLogicServices\RequestPreprocessor;

use DOMDocument;
use DOMXPath;
use Floream\BusinessLogicServices\Exception\RequestPreprocessorException;
use Floream\BusinessLogicServices\RequestPreprocessor;

/**
 * Extends PHP's SOAP library with support for WS-Addressing.
 */
class WsaRequestPreprocessor implements RequestPreprocessor {
    /**
     * XPath query to locate the SOAP envelope header.
     *
     * @var string
     */
    const HEADER_XPATH = '//env:Envelope/env:Header';

    /**
     * WS-Addressing namespace.
     *
     * @var string
     */
    const WSA_NS = 'http://www.w3.org/2005/08/addressing';

    /**
     * WSA element prefix.
     *
     * @var string
     */
    const WSA_PREFIX = 'wsa';

    /**
     * Anonymous reply URL.
     *
     * @var string
     */
    const WSA_REPLY_ANON = 'http://www.w3.org/2005/08/addressing/anonymous';

    /**
     * Document XML namespace.
     *
     * @var string
     */
    const XMLNS = 'http://www.w3.org/2000/xmlns/';

    /**
     * Add the SOAP action to the XML document.
     *
     * @param string $action
     *
     * @return void
     */
    public function addAction(DOMDocument $document, $header, $action,
                               $mustunderstand=false) {
        $node = $document->createElementNS(static::WSA_NS,
            static::WSA_PREFIX . ':Action', $action);

        if ($mustunderstand) {
            $envelope = $document->documentElement;
            $node->setAttributeNS($envelope->namespaceURI, 'env:mustUnderstand',
                                  1);
        }

        $header->appendChild($node);
    }

    /**
     * Add MessageID header.
     *
     * @param \DOMDocument $document
     * @param \DOMNode     $header
     * @param string       $messageid
     *
     * @return void
     */
    public function addMessageId(DOMDocument $document, $header, $messageid) {
        $node = $document->createElementNS(static::WSA_NS,
            static::WSA_PREFIX . ':MessageID', $messageid);

        $header->appendChild($node);
    }

    /**
     * Add ReplyTo header.
     *
     * @param \DOMDocument $document
     * @param \DOMNode     $header
     * @param \DOMNode     $endpoint
     *
     * @return void
     */
    public function addReplyTo(DOMDocument $document, $header, $endpoint) {
        $node = $document->createElementNS(static::WSA_NS,
            static::WSA_PREFIX . ':ReplyTo');
        $node->appendChild($endpoint);

        $header->appendChild($node);
    }

    /**
     * Add necessary namespacing attributes to the document's root element.
     *
     * @return void
     */
    public function setDocumentationAttributes($document) {
        $document->documentElement->setAttributeNS(static::XMLNS,
            'xmlns:' . static::WSA_PREFIX, static::WSA_NS);
    }

    /**
     * Get the SOAP envelope header, inserting it if not already present.
     *
     * @return \DOMElement
     */
    protected function getHeader(DOMDocument $document, DOMXPath $xpath) {
        $headers = $xpath->query(static::HEADER_XPATH);

        if ($headers->length === 0) {
            $envelope = $document->documentElement;
            $header = $document->createElementNS($envelope->namespaceURI,
                                                 "{$envelope->prefix}:Header");
            $envelope->insertBefore($header, $envelope->firstChild);
        } elseif ($headers->length !== 1) {
            throw new RequestPreprocessorException('found more than one SOAP header');
        }

        return $header;
    }

    /**
     * Get an XPath query object for the document.
     *
     * @param \DOMDocument
     *
     * @return \DOMXPath
     */
    public function getXpath(DOMDocument $document) {
        $xpath = new DOMXPath($document);
        $xpath->registerNamespace('env',
                                  $document->documentElement->namespaceURI);
        $xpath->registerNamespace('wsa', static::WSA_NS);

        return $xpath;
    }

    /**
     * @override \local_floreambls\request_preprocessor
     */
    public function preprocess(DOMDocument $document, $location, $action,
                               $version, $oneway) {
        $xpath  = $this->getXpath($document);
        $header = $this->getHeader($document, $xpath);

        $this->setDocumentationAttributes($document);

        $this->addAction($document, $header, $action, true);

        $this->addMessageId($document, $header, uniqid());

        $replytoaddr = $document->createElementNS(static::WSA_NS,
                static::WSA_PREFIX . ':Address', static::WSA_REPLY_ANON);
        $this->addReplyTo($document, $header, $replytoaddr);
    }
}
