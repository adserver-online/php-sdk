<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdvAdsApi;
use Adserver\Model\AdRequest;

$api = new AdvAdsApi(null, $conf);

$request = new AdRequest();
$request->setIsActive(1);
$request->setName('adv test ad');
$request->setUrl('http://example.com');

$obj = new stdClass();

$obj->content_html = 'test adv';
$obj->iddimension = 1;

$request->setDetails($obj);

$res = $api->advCreateAd(51990, 3, $request);

var_dump($res);

$request = new AdRequest();
$request->setName('test-renamed');

var_dump((string)$request);

$res = $api->advUpdateAd($res->getId(), $request);

var_dump($res);
