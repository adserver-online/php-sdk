<?php

require_once __DIR__ . '/../vendor/autoload.php';

//rename config.dist.php to config.php and configure your own values
include_once __DIR__ . '/config.php';

use Adserver\Api\UsersApi;
use Adserver\Configuration;
use Adserver\Model\LoginRequest;

use Psr\Cache\CacheItemInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

$conf = new Configuration();

if (DEV_MODE === true) {
    //$conf->setDebug(true);
    $conf->setHost(ENDPOINT);
}

//You have to cache the token instead of obtaining it before each API request.
//Otherwise access will be rate limited

$cache = new FilesystemAdapter();
$cacheKey = 'login_response';

$response = $cache->get($cacheKey, function (CacheItemInterface $item) use ($conf) {
    $item->expiresAfter(3600);

    echo 'Caching...', PHP_EOL;

    $api = new UsersApi(null, $conf);
    $request = new LoginRequest();
    $request->setServer(SERVER);
    $request->setEmail(EMAIL);
    $request->setPassword(PASSWORD);

    return $api->login($request);
});

$secretToken = $response->getToken();

echo 'Access token: ', $secretToken, ' (expires at ' . $response->getExpirationAt() . ')', PHP_EOL;

$conf->setAccessToken($secretToken);