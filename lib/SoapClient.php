<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@avadolearning.com>
 * @copyright 2017 AVADO Learning
 */

namespace AvadoLearning\BusinessLogicServices;

use DOMDocument;
use ReflectionClass;
use SoapClient as PhpSoapClient;

/**
 * SOAP client (with support for request preprocessors).
 *
 * This SOAP client implementation extends PHP's native SOAP client with support
 * for request preprocessors. Request preprocessors are used to "transform"
 * requests before transmitting them to BLS.
 */
class SoapClient extends PhpSoapClient {
    /**
     * The body of the previous request.
     *
     * @var string
     */
    protected $lastRequest;

    /**
     * Request preprocessors.
     *
     * @var \AvadoLearning\BusinessLogicServices\RequestPreprocessor[]
     */
    protected $requestPreprocessors = array();

    /**
     * Add a preprocessor to the stack.
     *
     * @param \AvadoLearning\BusinessLogicServices\RequestPreprocessor $preprocessor
     *
     * @return void
     */
    public function addRequestPreprocessor(RequestPreprocessor $preprocessor) {
        $this->requestPreprocessors[] = $preprocessor;
    }

    /**
     * Preprocess a request document.
     *
     * @param \DOMDocument $document
     * @param string       $location
     * @param string       $action
     * @param integer      $version
     * @param integer      $oneway
     *
     * @return void
     */
    public function preprocess(DOMDocument $document, $location, $action,
                               $version, $oneway) {
        foreach ($this->requestPreprocessors as $preprocessor) {
            $preprocessor->preprocess($document, $location, $action, $version,
                                      $oneway);
        }
    }

    /**
     * Sanitise invalid property names.
     *
     * The author of the SoapClient implementation was apparently not a fan of
     * input sanitisation, so we'll deal with this interesting edge case here.
     *
     * @param \stdClass $object
     *
     * @return void
     */
    protected function sanitisePropertyNames($object) {
        /* Get all of the declared properties and, if they're objects,
         * recursively sanitise their property values. */
        $reflector   = new ReflectionClass($object);
        $properties  = $reflector->getProperties();
        $propertymap = array();

        foreach ($properties as $property) {
            $propertymap[$property->name] = $property;

            $property->setAccessible(true);
            $value = $property->getValue($object);

            if (is_object($value)) {
                $this->sanitisePropertyNames($value);
            }
        }

        /* Then reassign the declared properties who have unsanitised
         * variants. */
        $undeclaredproperties = get_object_vars($object);
        foreach ($undeclaredproperties as $property => &$value) {
            $sanitisedproperty = str_replace('.', '', $property);

            if ($property !== $sanitisedproperty) {
                $propertymap[$sanitisedproperty]->setValue($object, $value);
                unset($object->{$property});
            }
        }
    }

    /**
     * Make a request.
     *
     * @param string  $request
     * @param string  $location
     * @param string  $action
     * @param integer $version
     * @param integer $oneway
     *
     * @return string
     */
    public function __doRequest($request, $location, $action, $version,
                                $oneway=null) {
        $document = new DOMDocument();
        $document->loadXML($request);
        $this->preprocess($document, $location, $action, $version, $oneway);

        $this->lastRequest = $document->saveXML();

        return parent::__doRequest($this->lastRequest, $location, $action,
                                   $version, $oneway);
    }

    /**
     * Get the contents of the last request.
     *
     * @return string
     */
    public function __getlastRequest() {
        return $this->lastRequest;
    }

    /**
     * @override \SoapClient::__soapCall
     */
    public function __soapCall($functionname, $arguments, $options=null,
                               $inputheaders=null, &$outputheaders=null) {
        $result = parent::__soapCall($functionname, $arguments, $options,
                                     $inputheaders, $outputheaders);

        $this->sanitisePropertyNames($result);

        return $result;
    }
}
