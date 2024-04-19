<?php
/**
 * PubReportsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright (c) 2020-2024 Adserver.Online
 * @link: https://adserver.online
 * Contact: support@adsrv.org
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adserver\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Adserver\ApiException;
use Adserver\Configuration;
use Adserver\HeaderSelector;
use Adserver\ObjectSerializer;

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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'pubGetCustomRtbReport' => [
            'application/json',
        ],
        'pubGetStats' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Publisher RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Site ID (optional)
     * @param  int $idzone Zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetCustomRtbReport'] to see the possible values for this operation
     *
     * @throws \Adserver\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Adserver\Model\StatsCustomRtbItem[]|\Adserver\Model\FormErrorResponse
     */
    public function pubGetCustomRtbReport($date_begin, $date_end, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetCustomRtbReport'][0])
    {
        list($response) = $this->pubGetCustomRtbReportWithHttpInfo($date_begin, $date_end, $timezone, $idsite, $idzone, $contentType);
        return $response;
    }

    /**
     * Operation pubGetCustomRtbReportWithHttpInfo
     *
     * Publisher RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Site ID (optional)
     * @param  int $idzone Zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetCustomRtbReport'] to see the possible values for this operation
     *
     * @throws \Adserver\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Adserver\Model\StatsCustomRtbItem[]|\Adserver\Model\FormErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pubGetCustomRtbReportWithHttpInfo($date_begin, $date_end, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetCustomRtbReport'][0])
    {
        $request = $this->pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone, $idsite, $idzone, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Adserver\Model\StatsCustomRtbItem[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Adserver\Model\StatsCustomRtbItem[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\StatsCustomRtbItem[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Adserver\Model\FormErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Adserver\Model\FormErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\FormErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Adserver\Model\StatsCustomRtbItem[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
     * Publisher RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Site ID (optional)
     * @param  int $idzone Zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetCustomRtbReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetCustomRtbReportAsync($date_begin, $date_end, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetCustomRtbReport'][0])
    {
        return $this->pubGetCustomRtbReportAsyncWithHttpInfo($date_begin, $date_end, $timezone, $idsite, $idzone, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pubGetCustomRtbReportAsyncWithHttpInfo
     *
     * Publisher RTB report
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Site ID (optional)
     * @param  int $idzone Zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetCustomRtbReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetCustomRtbReportAsyncWithHttpInfo($date_begin, $date_end, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetCustomRtbReport'][0])
    {
        $returnType = '\Adserver\Model\StatsCustomRtbItem[]';
        $request = $this->pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone, $idsite, $idzone, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
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
     * @param  int $idsite Site ID (optional)
     * @param  int $idzone Zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetCustomRtbReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function pubGetCustomRtbReportRequest($date_begin, $date_end, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetCustomRtbReport'][0])
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
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_begin,
            'dateBegin', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_end,
            'dateEnd', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timezone,
            'timezone', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $idsite,
            'idsite', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $idzone,
            'idzone', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation pubGetStats
     *
     * Publisher stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group by (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site ID (optional)
     * @param  int $idzone Filter by zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetStats'] to see the possible values for this operation
     *
     * @throws \Adserver\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Adserver\Model\StatsItem[]|\Adserver\Model\FormErrorResponse
     */
    public function pubGetStats($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetStats'][0])
    {
        list($response) = $this->pubGetStatsWithHttpInfo($date_begin, $date_end, $group, $timezone, $idsite, $idzone, $contentType);
        return $response;
    }

    /**
     * Operation pubGetStatsWithHttpInfo
     *
     * Publisher stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group by (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site ID (optional)
     * @param  int $idzone Filter by zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetStats'] to see the possible values for this operation
     *
     * @throws \Adserver\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Adserver\Model\StatsItem[]|\Adserver\Model\FormErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pubGetStatsWithHttpInfo($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetStats'][0])
    {
        $request = $this->pubGetStatsRequest($date_begin, $date_end, $group, $timezone, $idsite, $idzone, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Adserver\Model\StatsItem[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Adserver\Model\StatsItem[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\StatsItem[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Adserver\Model\FormErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Adserver\Model\FormErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Adserver\Model\FormErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Adserver\Model\StatsItem[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
     * Publisher stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group by (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site ID (optional)
     * @param  int $idzone Filter by zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetStatsAsync($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetStats'][0])
    {
        return $this->pubGetStatsAsyncWithHttpInfo($date_begin, $date_end, $group, $timezone, $idsite, $idzone, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pubGetStatsAsyncWithHttpInfo
     *
     * Publisher stats
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group by (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site ID (optional)
     * @param  int $idzone Filter by zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pubGetStatsAsyncWithHttpInfo($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetStats'][0])
    {
        $returnType = '\Adserver\Model\StatsItem[]';
        $request = $this->pubGetStatsRequest($date_begin, $date_end, $group, $timezone, $idsite, $idzone, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'pubGetStats'
     *
     * @param  string $date_begin Beginning of date interval (required)
     * @param  string $date_end Ending of date interval (required)
     * @param  string $group Group by (required)
     * @param  string $timezone Time zone (optional)
     * @param  int $idsite Filter by site ID (optional)
     * @param  int $idzone Filter by zone ID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['pubGetStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function pubGetStatsRequest($date_begin, $date_end, $group, $timezone = null, $idsite = null, $idzone = null, string $contentType = self::contentTypes['pubGetStats'][0])
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
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_begin,
            'dateBegin', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_end,
            'dateEnd', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $group,
            'group', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timezone,
            'timezone', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $idsite,
            'idsite', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $idzone,
            'idzone', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
