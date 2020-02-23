<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdvCampaignsApi;
use Adserver\Model\CampaignRequest;

$api = new AdvCampaignsApi(null, $conf);

$campaign = $api->advGetCampaign(51990);

var_dump($campaign);

$request = new CampaignRequest();
$request->setIdrunstatus(4010); //run

$res = $api->advUpdateCampaign(51990, $request);

echo 'Current status: ', $res->getRunstatus()['name'], PHP_EOL;


$request = new CampaignRequest();
$request->setName('test advert');
$request->setIdadvertiser(1);
$request->setIdrunstatus(4020); //pause

$res = $api->advCreateCampaign($request);

var_dump($res->getId());

$res = $api->advDeleteCampaign($res->getId());

var_dump($res);

