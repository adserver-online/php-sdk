<?php
/**
 * PubReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright (c) 2020 Adserver.Online
 * Contact: support@adsrv.org
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adserver\Api;

use Adserver\ApiException;
use Adserver\Configuration;
use Adserver\HeaderSelector;
use Adserver\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

/**
 * PubReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PubReportsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation pubGetCustomRtbReport
     *
     * Publisher's RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     *
     * @throws \Adserver\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Adserver\Model\StatsCustomRtbItem[]|\Adserver\Model\FormErrorResponse
     */
    public function pubGetCustomRtbReport($date_begin, $date_end, $timezone = null)
    {
        list($response) = $this->pubGetCustomRtbReportWithHttpInfo($date_begin, $date_end, $timezone);
        return $response;
    }

    /**
     * Operation pubGetCustomRtbReportWithHttpInfo
     *
     * Publisher's RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     *
     * @throws \Adserver\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Adserver\Model\StatsCustomRtbItem[]|\Adserver\Model\FormErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pubGetCustomRtbReportWithHttpInfo($date_begin, $date_end, $timezone = null)
    {
        $request = $this->pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Adserver\Model\StatsCustomRtbItem[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\StatsCustomRtbItem[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Adserver\Model\FormErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\FormErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Adserver\Model\StatsCustomRtbItem[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Adserver\Model\StatsCustomRtbItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Adserver\Model\FormErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation pubGetCustomRtbReportAsync
     *
     * Publisher's RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetCustomRtbReportAsync($date_begin, $date_end, $timezone = null)
    {
        return $this->pubGetCustomRtbReportAsyncWithHttpInfo($date_begin, $date_end, $timezone)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pubGetCustomRtbReportAsyncWithHttpInfo
     *
     * Publisher's RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetCustomRtbReportAsyncWithHttpInfo($date_begin, $date_end, $timezone = null)
    {
        $returnType = '\Adserver\Model\StatsCustomRtbItem[]';
        $request = $this->pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'pubGetCustomRtbReport'
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone = null)
    {
        // verify the required parameter 'date_begin' is set
        if ($date_begin === null || (is_array($date_begin) && count($date_begin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_begin when calling pubGetCustomRtbReport'
            );
        }
        // verify the required parameter 'date_end' is set
        if ($date_end === null || (is_array($date_end) && count($date_end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_end when calling pubGetCustomRtbReport'
            );
        }

        $resourcePath = '/publish/stats/custom-rtb';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($date_begin !== null) {
            $queryParams['dateBegin'] = ObjectSerializer::toQueryValue($date_begin);
        }
        // query params
        if ($date_end !== null) {
            $queryParams['dateEnd'] = ObjectSerializer::toQueryValue($date_end);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = ObjectSerializer::toQueryValue($timezone);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation pubGetStats
     *
     * Publisher's stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group report by this dimension (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site&#39;s ID (optional)
     * @param  int $idzone Filter by zone&#39;s ID (optional)
     *
     * @throws \Adserver\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Adserver\Model\StatsItem[]|\Adserver\Model\FormErrorResponse
     */
    public function pubGetStats($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null)
    {
        list($response) = $this->pubGetStatsWithHttpInfo($date_begin, $date_end, $group, $timezone, $idsite, $idzone);
        return $response;
    }

    /**
     * Operation pubGetStatsWithHttpInfo
     *
     * Publisher's stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group report by this dimension (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site&#39;s ID (optional)
     * @param  int $idzone Filter by zone&#39;s ID (optional)
     *
     * @throws \Adserver\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Adserver\Model\StatsItem[]|\Adserver\Model\FormErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pubGetStatsWithHttpInfo($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null)
    {
        $request = $this->pubGetStatsRequest($date_begin, $date_end, $group, $timezone, $idsite, $idzone);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Adserver\Model\StatsItem[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\StatsItem[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Adserver\Model\FormErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\FormErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Adserver\Model\StatsItem[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Adserver\Model\StatsItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Adserver\Model\FormErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation pubGetStatsAsync
     *
     * Publisher's stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group report by this dimension (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site&#39;s ID (optional)
     * @param  int $idzone Filter by zone&#39;s ID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetStatsAsync($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null)
    {
        return $this->pubGetStatsAsyncWithHttpInfo($date_begin, $date_end, $group, $timezone, $idsite, $idzone)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pubGetStatsAsyncWithHttpInfo
     *
     * Publisher's stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group report by this dimension (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site&#39;s ID (optional)
     * @param  int $idzone Filter by zone&#39;s ID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetStatsAsyncWithHttpInfo($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null)
    {
        $returnType = '\Adserver\Model\StatsItem[]';
        $request = $this->pubGetStatsRequest($date_begin, $date_end, $group, $timezone, $idsite, $idzone);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'pubGetStats'
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group report by this dimension (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site&#39;s ID (optional)
     * @param  int $idzone Filter by zone&#39;s ID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function pubGetStatsRequest($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null)
    {
        // verify the required parameter 'date_begin' is set
        if ($date_begin === null || (is_array($date_begin) && count($date_begin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_begin when calling pubGetStats'
            );
        }
        // verify the required parameter 'date_end' is set
        if ($date_end === null || (is_array($date_end) && count($date_end) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_end when calling pubGetStats'
            );
        }
        // verify the required parameter 'group' is set
        if ($group === null || (is_array($group) && count($group) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $group when calling pubGetStats'
            );
        }

        $resourcePath = '/publish/stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($date_begin !== null) {
            $queryParams['dateBegin'] = ObjectSerializer::toQueryValue($date_begin);
        }
        // query params
        if ($date_end !== null) {
            $queryParams['dateEnd'] = ObjectSerializer::toQueryValue($date_end);
        }
        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = ObjectSerializer::toQueryValue($timezone);
        }
        // query params
        if ($idsite !== null) {
            $queryParams['idsite'] = ObjectSerializer::toQueryValue($idsite);
        }
        // query params
        if ($idzone !== null) {
            $queryParams['idzone'] = ObjectSerializer::toQueryValue($idzone);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
