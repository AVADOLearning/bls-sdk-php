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
 * Inserts the BLS authentication token into the request header.
 */
class BlsAuthTokenRequestPreprocessor implements RequestPreprocessor {
    /**
     * AuthToken element's XMLNS attribute value.
     *
     * @var string
     */
    const AUTHTOKEN_NS = 'http://schemas.datacontract.org/2004/07/BusinessLogicService.Security.Entities';

    /**
     * XPath query to locate the SOAP envelope header.
     *
     * @var string
     */
    const HEADER_XPATH = '//env:Envelope/env:Header';

    /**
     * Authentication token.
     *
     * @var string
     */
    protected $token;

    /**
     * Initialiser.
     *
     * @param string $token
     */
    public function __construct($token) {
        $this->token = $token;
    }

    /**
     * @override \Floream\BusinessLogicServices\RequestPreprocessor
     */
    public function preprocess(DOMDocument $document, $location, $action,
                               $version, $oneway) {
        $xpath   = new DOMXPath($document);
        $headers = $xpath->query(static::HEADER_XPATH);

        if ($headers->length === 1) {
            $header = $headers->item(0);
        } else {
            throw new RequestPreprocessorException('found more than one SOAP header');
        }

        $authtokennode = $document->createElement('AuthToken', $this->token);
        $authtokennode->setAttribute('xmlns', static::AUTHTOKEN_NS);

        $authenticatenode = $document->createElement('Authenticate');
        $authenticatenode->appendChild($authtokennode);

        $header->appendChild($authenticatenode);
    }
}
