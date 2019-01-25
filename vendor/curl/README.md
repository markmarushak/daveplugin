# curl API SDK For PHP
[![Build Status](https://travis-ci.org/MadnessCODE/Voluum.svg?branch=master)](https://travis-ci.org/MadnessCODE/Voluum)
[![Latest Stable Version](https://poser.pugx.org/madnesscode/voluum/v/stable)](https://packagist.org/packages/madnesscode/voluum)
[![Total Downloads](https://poser.pugx.org/madnesscode/voluum/downloads)](https://packagist.org/packages/madnesscode/voluum)
[![License](https://poser.pugx.org/madnesscode/voluum/license)](https://packagist.org/packages/madnesscode/voluum)

This repository contains the open source PHP that allows you to access the REST API

## Installation

The Curl API can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require markmarushak/curlapi
```

## Usage

> **Note:** This version of the curl API SDK for PHP requires PHP 5.6 or greater.

Example



```php
$argument_1 = 'test@example.com';
$argument_2 = 'test';

$client = new Voluum\Client\API(new Voluum\Auth\PasswordCredentials($argument_1, $argument_2));

$report_api = new Voluum\API($client);
```

Or use access id and key:
```php
$access_key_id = "access_key_id";
$access_key = "access_key";

$client = new Voluum\Client\API(new Voluum\Auth\AccessKeyCredentials($access_key_id, $access_key));

$report_api = new Voluum\API($client);
```

How to get report:
```php
$result = $report_api->get("report", [
   "from" => date("Y-m-d"),
   "to" => date("Y-m-d"),
   "groupBy" => "campaign"
]);

//Get result as json
echo $result->getJson();

//Get result as object
var_dump($result->getData());
```

Create new lander:
```php
$result = $report_api->post("lander", [
   "namePostfix" => "Test",
   "url" => "http://example.com"
]);
```

Edit lander:
```php
$result = $report_api->put("lander/xxxxx-xxxxxx-xxxxxx-xxxxx", [
   "namePostfix" => "Test 1",
   "url" => "http://example.com"
]);
```

Delete lander:
```php
$result = $report_api->delete("lander", [
   "ids" => "xxxxx-xxxxxx-xxxxxx-xxxxxx"
]);
```

documentation voluum! [here](https://developers.voluum.com/).
documentation adsBridge [here](https://api.adsbridge.com/api/).

## License
Please see the [license file](https://github.com/markmarushak/CurlApi/blob/master/LICENSE) for more information.