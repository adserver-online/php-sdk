<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdsApi;
use Adserver\Model\AdBannerHtml;
use Adserver\Model\AdRequest;

$api = new AdsApi(null, $conf);

$ad = $api->getAd(116514);

var_dump($ad);

$request = new AdRequest();
$request->setIsActive(0);

$res = $api->updateAd(1165123, $request);

var_dump($res->getIsActive());

$request = new AdRequest();
$request->setIdcampaign(51990);
$request->setIsActive(1);
$request->setName('test html/js banner');
$request->setUrl('http://example.com');

$details = new AdBannerHtml();

$details->setContentHtml('<h1>Hello</h1>');
$details->setIddimension(1);

$request->setDetails($details);

$res = $api->createAd(3, $request);

var_dump($res);

$request = new AdRequest();
$request->setName('test-renamed');

var_dump((string)$request);

$res = $api->updateAd($res->getId(), $request);

var_dump($res);

/*
$request = new AdRequest();
$request->setIdcampaign(51990);
$request->setIsActive(1);
$request->setName('test image banner');
$request->setUrl('http://example.com');

$details = new stdClass();

$details->iddimension = 1;

$request->setDetails($details);

$res = $api->createAd(2, $request);
*/