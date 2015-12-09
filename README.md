# BLS SDK for PHP

This library contains an library for integrating your PHP application with
Floream's Business Logic Services API.

## Installation

Two modes of installation are supported. For most users, installation via
Composer is recommended.

### With Composer (recommended)

Add the following line to the ```require``` section of your ```composer.json```:

    "floream/bls-sdk-php": "1.0.*"

Then ensure the dependency is installed into your ```vendor``` directory:

    $ composer install
    $ composer update

### With own class loader

This isn't yet implemented.

## Usage

First obtain an instance of the ```SoapClientFactory```. The factory handles
passing parameters to each of the client classes:

    use Floream\BusinessLogicServices\SoapClientFactory;

    // These values should come from your configuration
    define('BLS_URL',        'https://test.example.com');
    define('BLS_AUTH_TOKEN', 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');

    $factory = new SoapClientFactory(BLS_URL, array( // SoapClient options
        'cache_wsdl'         => WSDL_CACHE_NONE,
        'connection_timeout' => 30,
        'exceptions'         => true,
        'keep_alive'         => false,
        'uri'                => 'http://tempuri.org/',
        'soap_version'       => SOAP_1_2,
        'trace'              => true,
    ), array(                                        // Services
        'SalesLogix',
    ), array(                                        // Request preprocessors
        new WsaRequestPreprocessor(),
        new BlsAuthTokenRequestPreprocessor(BLS_AUTH_TOKEN),
    ));

Then use the factory to obtain a client for a given service:

    $client = $factory->getInstance('SalesLogix');

You can optionally pass additional ```SoapClient``` options to ```getInstance```
to override those specified in the factory. To allow PHP to cache the WSDL file
on the disk, you might instantiate the SalesLogix client as follows:

    $client = $factory->getInstance('SalesLogix', array(
        'cache_wsdl' => WSDL_CACHE_DISK,
    ));

Either way, ```$client``` will now be an instance of
```Floream\BusinessLogicServices\SalesLogixService\SalesLogix```, and it will be
possible to call methods like ```CreateLead```. Examples can be found in the
```/test/unit``` directory of this repository.

## Development

The following documentation is for maintainers of the plugin.

### Installing development dependencies

Dependencies are managed with Composer:

    $ composer install
    $ composer update

### Updating the entities

Assuming ```Wsdl2PhpGenerator``` has been installed as a Composer development
dependency:

    $ bin/generate_entities

### Testing

Assuming PHPUnit has been installed as a Composer development dependency:

    $ vendor/bin/phpunit

If you receive no output, it's likely that there's something wrong with your
environment. Try running PHPUnit with PHP's error output enabled:

    $ php -Ddisplay_errors=On -Ddisplay_startup_errors=On \
            vendor/phpunit/phpunit/phpunit
