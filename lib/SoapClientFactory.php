<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@floream.com>
 * @copyright 2015 Floream Limited
 */

namespace Floream\BusinessLogicServices;

use Floream\BusinessLogicServices\RequestPreprocessor;

/**
 * SOAP client factory.
 *
 * The client factory allows you to register all of the dependencies of the BLS
 * services once and obtain client instances without passing them. If your
 * application is already using an IoC container, you may wish to use that
 * instead.
 */
class SoapClientFactory {
    /**
     * Class name format.
     *
     * @var string
     */
    const CLIENT_CLASS_FORMAT = '\Floream\BusinessLogicServices\%sService\%s';

    /**
     * WSDL file format.
     *
     * @var string
     */
    const WSDL_FORMAT = '%s/%s.svc';

    /**
     * Services.
     *
     * @var string[]
     */
    protected $services;

    /**
     * Options.
     *
     * @var mixed[]
     */
    protected $options;

    /**
     * Services.
     *
     * @var \Floream\BusinessLogicServices\RequestPreprocessor[]
     */
    protected $requestPreprocessors;

    /**
     * Initialiser.
     *
     * @param string                                               $baseUrl
     * @param mixed[]                                              $options
     * @param string[]                                             $services
     * @param \Floream\BusinessLogicServices\RequestPreprocessor[] $requestPreprocessors
     */
    public function __construct($baseUrl, $options, $services, $requestPreprocessors) {
        $this->baseUrl  = $baseUrl;
        $this->options  = $options;
        $this->services = $services;

        foreach ($requestPreprocessors as $requestPreprocessor) {
            $this->addRequestPreprocessor($requestPreprocessor);
        }
    }

    /**
     * Add a request preprocessor.
     *
     * @param \Floream\BusinessLogicServices\RequestPreprocessor $requestPreprocessor
     *
     * @return void
     */
    public function addRequestPreprocessor(RequestPreprocessor $requestPreprocessor) {
        $this->requestPreprocessors[] = $requestPreprocessor;
    }

    /**
     * Get the name of the class for the given service.
     *
     * @param string $serviceName
     *
     * @return string
     */
    public function getClassName($serviceName) {
        return sprintf(static::CLIENT_CLASS_FORMAT, $serviceName, $serviceName);
    }

    /**
     * Get an instance of a service.
     *
     * @param string $serviceName
     *
     * @return \Floream\BusinessLogicServices\SoapClient
     */
    public function getInstance($serviceName, $optionOverrides=array()) {
        $className = $this->getClassName($serviceName);
        $wsdl      = sprintf(static::WSDL_FORMAT, $this->baseUrl, $serviceName);

        $options = array_merge($this->options, array(
            'location' => $wsdl,
        ), $optionOverrides);

        $instance = new $className($options, $wsdl);
        foreach ($this->requestPreprocessors as $preprocessor) {
            $instance->addRequestPreprocessor($preprocessor);
        }

        return $instance;
    }
}
