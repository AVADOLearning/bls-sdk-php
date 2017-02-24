# BLS SDK for PHP

A library for integrating your PHP application with AVADO's Business Logic
Services API.

## Installation

Support for different installation methods is still in the works. Reach out to
us for installation help if your use case doesn't allow you to follow the below
guidance.

### With Composer and Packagist (recommended)

We have [an example](https://github.com/AVADOLearning/bls-sdk-php-example) of
how to use the SDK in this configuration, but it's fairly straightforward --
just add the following line to the `require` section of your `composer.json`:

```json
"avadolearning/bls-sdk-php": "1.0.*"
```

Then ensure the dependency is installed into your `vendor` directory:

```
$ composer install
$ composer update
```

### Using your own autoloader

We don't (yet?) support this configuration.

## Usage

First obtain an instance of the `SoapClientFactory`. The factory handles
passing parameters to each of the client classes:

```php
use AvadoLearning\BusinessLogicServices\SoapClientFactory;

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
```

Then use the factory to obtain a client for a given service:

```php
$client = $factory->getInstance('SalesLogix');
```

You can optionally pass additional `SoapClient` options to `getInstance()` to
override those specified in the factory. To allow PHP to cache the WSDL file on
the disk, you might instantiate the SalesLogix client as follows:

```php
$client = $factory->getInstance('SalesLogix', array(
    'cache_wsdl' => WSDL_CACHE_DISK,
));
```

Either way, `$client` will now be an instance of
`AvadoLearning\BusinessLogicServices\SalesLogixService\SalesLogix`, and it will
be possible to call methods like ```CreateLead```. Examples can be found in the
`/test/unit` directory of this repository.

## Development

The following documentation is for maintainers of the plugin.

### Installing development dependencies

Dependencies are managed with Composer:

```
$ composer install
$ composer update
```

### Updating the entities

Assuming `Wsdl2PhpGenerator` has been installed as a Composer development
dependency:

```
$ bin/generate_entities
```

### Testing

First, configure the project's `/etc/config.php` file with your credentials:

```php
<?php

define('BLS_URL',        'https://test.example.com');
define('BLS_AUTH_TOKEN', 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
```

Then, assuming PHPUnit has been installed as a Composer development dependency:

```
$ vendor/bin/phpunit
```

If you receive no output, it's likely that there's something wrong with your
environment. Try running PHPUnit with PHP's error output enabled:

```
$ php -d display_errors=On -d display_startup_errors=On \
        vendor/phpunit/phpunit/phpunit
```
