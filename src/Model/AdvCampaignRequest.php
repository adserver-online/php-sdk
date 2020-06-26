<?php
/**
 * AdvCampaignRequest
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
 * AdvCampaignRequest Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdvCampaignRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdvCampaignRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'idcategory' => 'int',
        'idrunstatus' => 'int',
        'idpricemodel' => 'int',
        'rate' => 'float',
        'start_at' => 'string',
        'finish_at' => 'string',
        'timetargeting' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'idcategory' => null,
        'idrunstatus' => null,
        'idpricemodel' => null,
        'rate' => null,
        'start_at' => null,
        'finish_at' => null,
        'timetargeting' => null
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
        'name' => 'name',
        'idcategory' => 'idcategory',
        'idrunstatus' => 'idrunstatus',
        'idpricemodel' => 'idpricemodel',
        'rate' => 'rate',
        'start_at' => 'start_at',
        'finish_at' => 'finish_at',
        'timetargeting' => 'timetargeting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'idcategory' => 'setIdcategory',
        'idrunstatus' => 'setIdrunstatus',
        'idpricemodel' => 'setIdpricemodel',
        'rate' => 'setRate',
        'start_at' => 'setStartAt',
        'finish_at' => 'setFinishAt',
        'timetargeting' => 'setTimetargeting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'idcategory' => 'getIdcategory',
        'idrunstatus' => 'getIdrunstatus',
        'idpricemodel' => 'getIdpricemodel',
        'rate' => 'getRate',
        'start_at' => 'getStartAt',
        'finish_at' => 'getFinishAt',
        'timetargeting' => 'getTimetargeting'
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

    const IDRUNSTATUS_4010 = 4010;
    const IDRUNSTATUS_4020 = 4020;
    const IDRUNSTATUS_4030 = 4030;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdrunstatusAllowableValues()
    {
        return [
            self::IDRUNSTATUS_4010,
            self::IDRUNSTATUS_4020,
            self::IDRUNSTATUS_4030,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['idcategory'] = isset($data['idcategory']) ? $data['idcategory'] : null;
        $this->container['idrunstatus'] = isset($data['idrunstatus']) ? $data['idrunstatus'] : null;
        $this->container['idpricemodel'] = isset($data['idpricemodel']) ? $data['idpricemodel'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['finish_at'] = isset($data['finish_at']) ? $data['finish_at'] : null;
        $this->container['timetargeting'] = isset($data['timetargeting']) ? $data['timetargeting'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIdrunstatusAllowableValues();
        if (!is_null($this->container['idrunstatus']) && !in_array($this->container['idrunstatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'idrunstatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets idcategory
     *
     * @return int|null
     */
    public function getIdcategory()
    {
        return $this->container['idcategory'];
    }

    /**
     * Sets idcategory
     *
     * @param int|null $idcategory idcategory
     *
     * @return $this
     */
    public function setIdcategory($idcategory)
    {
        $this->container['idcategory'] = $idcategory;

        return $this;
    }

    /**
     * Gets idrunstatus
     *
     * @return int|null
     */
    public function getIdrunstatus()
    {
        return $this->container['idrunstatus'];
    }

    /**
     * Sets idrunstatus
     *
     * @param int|null $idrunstatus Run statuses:  * 4010 - running  * 4020 - paused  * 4030 - finished
     *
     * @return $this
     */
    public function setIdrunstatus($idrunstatus)
    {
        $allowedValues = $this->getIdrunstatusAllowableValues();
        if (!is_null($idrunstatus) && !in_array($idrunstatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'idrunstatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['idrunstatus'] = $idrunstatus;

        return $this;
    }

    /**
     * Gets idpricemodel
     *
     * @return int|null
     */
    public function getIdpricemodel()
    {
        return $this->container['idpricemodel'];
    }

    /**
     * Sets idpricemodel
     *
     * @param int|null $idpricemodel idpricemodel
     *
     * @return $this
     */
    public function setIdpricemodel($idpricemodel)
    {
        $this->container['idpricemodel'] = $idpricemodel;

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
     * Gets start_at
     *
     * @return string|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param string|null $start_at start_at
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets finish_at
     *
     * @return string|null
     */
    public function getFinishAt()
    {
        return $this->container['finish_at'];
    }

    /**
     * Sets finish_at
     *
     * @param string|null $finish_at finish_at
     *
     * @return $this
     */
    public function setFinishAt($finish_at)
    {
        $this->container['finish_at'] = $finish_at;

        return $this;
    }

    /**
     * Gets timetargeting
     *
     * @return string|null
     */
    public function getTimetargeting()
    {
        return $this->container['timetargeting'];
    }

    /**
     * Sets timetargeting
     *
     * @param string|null $timetargeting timetargeting
     *
     * @return $this
     */
    public function setTimetargeting($timetargeting)
    {
        $this->container['timetargeting'] = $timetargeting;

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


