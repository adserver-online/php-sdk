<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\ReportsApi;

echo 'Stats report', PHP_EOL;

$api = new ReportsApi(null, $conf);

$stats = $api->getStats('2020-01-02', '2020-02-02', 'day', 'UTC');

foreach ($stats as $row) {
    echo $row->getDimension(), ' ', $row->getImpressions(), ' ', $row->getClicks(), PHP_EOL;
}
