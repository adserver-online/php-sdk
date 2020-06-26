<?php
/**
 * Campaign
 *
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

namespace Adserver\Model;

use \Adserver\ObjectSerializer;
use \ArrayAccess;

/**
 * Campaign Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Campaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'advertiser' => 'object',
        'status' => 'object',
        'runstatus' => 'object',
        'pricemodel' => 'object',
        'category' => 'object',
        'rate' => 'float',
        'limits' => 'object',
        'counters' => 'object',
        'frequencyCapping' => 'string',
        'tier' => 'string',
        'wight' => 'string',
        'timezone' => 'string',
        'ads' => 'object[]',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'advertiser' => null,
        'status' => null,
        'runstatus' => null,
        'pricemodel' => null,
        'category' => null,
        'rate' => null,
        'limits' => null,
        'counters' => null,
        'frequencyCapping' => null,
        'tier' => null,
        'wight' => null,
        'timezone' => null,
        'ads' => null,
        'createdAt' => null,
        'updatedAt' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'advertiser' => 'advertiser',
        'status' => 'status',
        'runstatus' => 'runstatus',
        'pricemodel' => 'pricemodel',
        'category' => 'category',
        'rate' => 'rate',
        'limits' => 'limits',
        'counters' => 'counters',
        'frequencyCapping' => 'frequency_capping',
        'tier' => 'tier',
        'wight' => 'wight',
        'timezone' => 'timezone',
        'ads' => 'ads',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'advertiser' => 'setAdvertiser',
        'status' => 'setStatus',
        'runstatus' => 'setRunstatus',
        'pricemodel' => 'setPricemodel',
        'category' => 'setCategory',
        'rate' => 'setRate',
        'limits' => 'setLimits',
        'counters' => 'setCounters',
        'frequencyCapping' => 'setFrequencyCapping',
        'tier' => 'setTier',
        'wight' => 'setWight',
        'timezone' => 'setTimezone',
        'ads' => 'setAds',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'advertiser' => 'getAdvertiser',
        'status' => 'getStatus',
        'runstatus' => 'getRunstatus',
        'pricemodel' => 'getPricemodel',
        'category' => 'getCategory',
        'rate' => 'getRate',
        'limits' => 'getLimits',
        'counters' => 'getCounters',
        'frequencyCapping' => 'getFrequencyCapping',
        'tier' => 'getTier',
        'wight' => 'getWight',
        'timezone' => 'getTimezone',
        'ads' => 'getAds',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runstatus'] = isset($data['runstatus']) ? $data['runstatus'] : null;
        $this->container['pricemodel'] = isset($data['pricemodel']) ? $data['pricemodel'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['counters'] = isset($data['counters']) ? $data['counters'] : null;
        $this->container['frequencyCapping'] = isset($data['frequencyCapping']) ? $data['frequencyCapping'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['wight'] = isset($data['wight']) ? $data['wight'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['ads'] = isset($data['ads']) ? $data['ads'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets advertiser
     *
     * @return object|null
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     *
     * @param object|null $advertiser advertiser
     *
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets status
     *
     * @return object|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets runstatus
     *
     * @return object|null
     */
    public function getRunstatus()
    {
        return $this->container['runstatus'];
    }

    /**
     * Sets runstatus
     *
     * @param object|null $runstatus runstatus
     *
     * @return $this
     */
    public function setRunstatus($runstatus)
    {
        $this->container['runstatus'] = $runstatus;

        return $this;
    }

    /**
     * Gets pricemodel
     *
     * @return object|null
     */
    public function getPricemodel()
    {
        return $this->container['pricemodel'];
    }

    /**
     * Sets pricemodel
     *
     * @param object|null $pricemodel pricemodel
     *
     * @return $this
     */
    public function setPricemodel($pricemodel)
    {
        $this->container['pricemodel'] = $pricemodel;

        return $this;
    }

    /**
     * Gets category
     *
     * @return object|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param object|null $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return object|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param object|null $limits limits
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets counters
     *
     * @return object|null
     */
    public function getCounters()
    {
        return $this->container['counters'];
    }

    /**
     * Sets counters
     *
     * @param object|null $counters counters
     *
     * @return $this
     */
    public function setCounters($counters)
    {
        $this->container['counters'] = $counters;

        return $this;
    }

    /**
     * Gets frequencyCapping
     *
     * @return string|null
     */
    public function getFrequencyCapping()
    {
        return $this->container['frequencyCapping'];
    }

    /**
     * Sets frequencyCapping
     *
     * @param string|null $frequencyCapping frequencyCapping
     *
     * @return $this
     */
    public function setFrequencyCapping($frequencyCapping)
    {
        $this->container['frequencyCapping'] = $frequencyCapping;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return string|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string|null $tier tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets wight
     *
     * @return string|null
     */
    public function getWight()
    {
        return $this->container['wight'];
    }

    /**
     * Sets wight
     *
     * @param string|null $wight wight
     *
     * @return $this
     */
    public function setWight($wight)
    {
        $this->container['wight'] = $wight;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets ads
     *
     * @return object[]|null
     */
    public function getAds()
    {
        return $this->container['ads'];
    }

    /**
     * Sets ads
     *
     * @param object[]|null $ads ads
     *
     * @return $this
     */
    public function setAds($ads)
    {
        $this->container['ads'] = $ads;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string|null $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string|null $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


