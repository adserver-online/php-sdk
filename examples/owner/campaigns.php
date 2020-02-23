<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\CampaignsApi;
use Adserver\Model\CampaignRequest;

$api = new CampaignsApi(null, $conf);

$campaign = $api->getCampaign(59592);

var_dump($campaign);

echo 'Campaigns list', PHP_EOL;

$campaigns = $api->getCampaignsList(1, 5);

foreach ($campaigns as $row) {
    echo $row->getId(), ': ', $row->getName(), ' ', $row->getStatus()['name'], ' ', $row->getRunstatus()['name'], PHP_EOL;
}

$request = new CampaignRequest();
$request->setIdrunstatus(4010); //run

$res = $api->updateCampaign(58990, $request);

echo 'Current status: ', $res->getRunstatus()['name'], PHP_EOL;


$request = new CampaignRequest();
$request->setName('test');
$request->setIdadvertiser(1);
$request->setIdrunstatus(4020); //pause

$res = $api->createCampaign($request);

var_dump($res->getId());

$res = $api->deleteCampaign(59591);

var_dump($res);

