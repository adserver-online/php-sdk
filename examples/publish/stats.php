<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\PubReportsApi;

$api = new PubReportsApi(null, $conf);

echo 'Stats report', PHP_EOL;

$stats = $api->pubGetStats('2020-01-02', '2020-02-02', 'day', 'UTC');


foreach ($stats as $row) {
    echo $row->getDimension(), ' ', $row->getImpressions(), ' ', $row->getClicks(), PHP_EOL;
}

echo PHP_EOL, 'RTB report', PHP_EOL;

$stats = $api->pubGetCustomRtbReport('2020-01-02', '2020-02-02', 'UTC');

foreach ($stats as $row) {
    echo $row->getDate(), ' ', $row->getTagId(), $row->getImpressions(), ' ', $row->getClicks(), ' ', $row->getRevenue(), PHP_EOL;
}