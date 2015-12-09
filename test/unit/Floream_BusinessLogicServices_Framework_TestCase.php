<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@floream.com>
 * @copyright 2015 Floream Limited
 */

use Floream\BusinessLogicServices\SoapClientFactory;
use Floream\BusinessLogicServices\RequestPreprocessor\BlsAuthTokenRequestPreprocessor;
use Floream\BusinessLogicServices\RequestPreprocessor\WsaRequestPreprocessor;

class Floream_BusinessLogicServices_Framework_TestCase
        extends PHPUnit_Framework_TestCase {
    /**
     * Get a SOAP client.
     *
     * @param string $serviceName
     *
     * @return Floream\BusinessLogicServices\SoapClient
     */
    protected function getSoapClient($serviceName) {
        $factory = $this->getSoapClientFactory();

        return $factory->getInstance($serviceName);
    }

    /**
     * Get a SOAP client factory.
     *
     * The client factory accepts all of our arguments once and handles passing
     * dependencies to the clients on instantiation.
     *
     * @return \Floream\BusinessLogicServices\SoapClientFactory
     */
    protected function getSoapClientFactory() {
        $factory = new SoapClientFactory(BLS_URL, array(
            'cache_wsdl'         => WSDL_CACHE_NONE,
            'connection_timeout' => 30,
            'exceptions'         => true,
            'keep_alive'         => false,
            'uri'                => 'http://tempuri.org/',
            'soap_version'       => SOAP_1_2,
            'trace'              => true,
        ), array(
            'SalesLogix',
        ), array(
            new WsaRequestPreprocessor(),
            new BlsAuthTokenRequestPreprocessor(BLS_AUTH_TOKEN),
        ));

        return $factory;
    }
}
