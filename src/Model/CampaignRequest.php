<?php
/**
 * CampaignRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright (c) 2020 Adserver.Online
 * @link: https://adserver.online
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
 * CampaignRequest Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CampaignRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'idadvertiser' => 'int',
        'idcategory' => 'int',
        'idstatus' => 'int',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'idadvertiser' => null,
        'idcategory' => null,
        'idstatus' => null,
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
        'idadvertiser' => 'idadvertiser',
        'idcategory' => 'idcategory',
        'idstatus' => 'idstatus',
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
        'idadvertiser' => 'setIdadvertiser',
        'idcategory' => 'setIdcategory',
        'idstatus' => 'setIdstatus',
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
        'idadvertiser' => 'getIdadvertiser',
        'idcategory' => 'getIdcategory',
        'idstatus' => 'getIdstatus',
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

    const IDSTATUS_1510 = 1510;
    const IDSTATUS_1520 = 1520;
    const IDSTATUS_1530 = 1530;
    const IDRUNSTATUS_4010 = 4010;
    const IDRUNSTATUS_4020 = 4020;
    const IDRUNSTATUS_4030 = 4030;
    const IDPRICEMODEL_1 = 1;
    const IDPRICEMODEL_2 = 2;
    const IDPRICEMODEL_3 = 3;
    const IDPRICEMODEL_4 = 4;
    const IDPRICEMODEL_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdstatusAllowableValues()
    {
        return [
            self::IDSTATUS_1510,
            self::IDSTATUS_1520,
            self::IDSTATUS_1530,
        ];
    }
    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdpricemodelAllowableValues()
    {
        return [
            self::IDPRICEMODEL_1,
            self::IDPRICEMODEL_2,
            self::IDPRICEMODEL_3,
            self::IDPRICEMODEL_4,
            self::IDPRICEMODEL_5,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['idadvertiser'] = $data['idadvertiser'] ?? null;
        $this->container['idcategory'] = $data['idcategory'] ?? null;
        $this->container['idstatus'] = $data['idstatus'] ?? null;
        $this->container['idrunstatus'] = $data['idrunstatus'] ?? null;
        $this->container['idpricemodel'] = $data['idpricemodel'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['start_at'] = $data['start_at'] ?? null;
        $this->container['finish_at'] = $data['finish_at'] ?? null;
        $this->container['timetargeting'] = $data['timetargeting'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIdstatusAllowableValues();
        if (!is_null($this->container['idstatus']) && !in_array($this->container['idstatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'idstatus', must be one of '%s'",
                $this->container['idstatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdrunstatusAllowableValues();
        if (!is_null($this->container['idrunstatus']) && !in_array($this->container['idrunstatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'idrunstatus', must be one of '%s'",
                $this->container['idrunstatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdpricemodelAllowableValues();
        if (!is_null($this->container['idpricemodel']) && !in_array($this->container['idpricemodel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'idpricemodel', must be one of '%s'",
                $this->container['idpricemodel'],
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
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets idadvertiser
     *
     * @return int|null
     */
    public function getIdadvertiser()
    {
        return $this->container['idadvertiser'];
    }

    /**
     * Sets idadvertiser
     *
     * @param int|null $idadvertiser idadvertiser
     *
     * @return self
     */
    public function setIdadvertiser($idadvertiser)
    {
        $this->container['idadvertiser'] = $idadvertiser;

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
     * @return self
     */
    public function setIdcategory($idcategory)
    {
        $this->container['idcategory'] = $idcategory;

        return $this;
    }

    /**
     * Gets idstatus
     *
     * @return int|null
     */
    public function getIdstatus()
    {
        return $this->container['idstatus'];
    }

    /**
     * Sets idstatus
     *
     * @param int|null $idstatus Moderation statuses:  * 1510 - pending  * 1520 - approved  * 1530 - blocked
     *
     * @return self
     */
    public function setIdstatus($idstatus)
    {
        $allowedValues = $this->getIdstatusAllowableValues();
        if (!is_null($idstatus) && !in_array($idstatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'idstatus', must be one of '%s'",
                    $idstatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['idstatus'] = $idstatus;

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
     * @return self
     */
    public function setIdrunstatus($idrunstatus)
    {
        $allowedValues = $this->getIdrunstatusAllowableValues();
        if (!is_null($idrunstatus) && !in_array($idrunstatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'idrunstatus', must be one of '%s'",
                    $idrunstatus,
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
     * @param int|null $idpricemodel Pricing models:  * 1 - CPM  * 2 - CPC  * 3 - CPA  * 4 - CPUC (cost per unique click)  * 5 - CPUM (cost per unique mile)
     *
     * @return self
     */
    public function setIdpricemodel($idpricemodel)
    {
        $allowedValues = $this->getIdpricemodelAllowableValues();
        if (!is_null($idpricemodel) && !in_array($idpricemodel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'idpricemodel', must be one of '%s'",
                    $idpricemodel,
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @param string|null $timetargeting This field uses a special format.  For example, if you need to disable all time slots except slots from 00:00 to 05:00 and from 22:00 to 23:00 you have to pass the following JSON-string as value:  ```json {   \"tt\": {     \"1\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"2\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"3\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"4\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"5\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"6\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0},     \"7\": {\"0\":0,\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"22\":0,\"23\":0}   } } ``` The logic is simple. Horizontal lines are representing week days: 1 (Monday) - 7 (Sunday). Vertical columns are hours: 0 - 23. You have to put **0** value to needed cells to disable a particular time slot. A timeslot is enabled by default so you don't need to put 1 to enable cells.
     *
     * @return self
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


