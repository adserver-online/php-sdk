<?php
/**
 * PubZoneRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright (c) 2020-2022 Adserver.Online
 * @link: https://adserver.online
 * Contact: support@adsrv.org
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adserver\Model;

use \ArrayAccess;
use \Adserver\ObjectSerializer;

/**
 * PubZoneRequest Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PubZoneRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PubZoneRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'is_active' => 'int',
        'idzoneformat' => 'int',
        'iddimension' => 'int'
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
        'is_active' => null,
        'idzoneformat' => null,
        'iddimension' => null
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
        'is_active' => 'is_active',
        'idzoneformat' => 'idzoneformat',
        'iddimension' => 'iddimension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'is_active' => 'setIsActive',
        'idzoneformat' => 'setIdzoneformat',
        'iddimension' => 'setIddimension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'is_active' => 'getIsActive',
        'idzoneformat' => 'getIdzoneformat',
        'iddimension' => 'getIddimension'
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

    public const IS_ACTIVE_0 = 0;
    public const IS_ACTIVE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsActiveAllowableValues()
    {
        return [
            self::IS_ACTIVE_0,
            self::IS_ACTIVE_1,
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
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['idzoneformat'] = $data['idzoneformat'] ?? null;
        $this->container['iddimension'] = $data['iddimension'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIsActiveAllowableValues();
        if (!is_null($this->container['is_active']) && !in_array($this->container['is_active'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'is_active', must be one of '%s'",
                $this->container['is_active'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['idzoneformat'] === null) {
            $invalidProperties[] = "'idzoneformat' can't be null";
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
     * Gets is_active
     *
     * @return int|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param int|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $allowedValues = $this->getIsActiveAllowableValues();
        if (!is_null($is_active) && !in_array($is_active, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'is_active', must be one of '%s'",
                    $is_active,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets idzoneformat
     *
     * @return int
     */
    public function getIdzoneformat()
    {
        return $this->container['idzoneformat'];
    }

    /**
     * Sets idzoneformat
     *
     * @param int $idzoneformat idzoneformat
     *
     * @return self
     */
    public function setIdzoneformat($idzoneformat)
    {
        $this->container['idzoneformat'] = $idzoneformat;

        return $this;
    }

    /**
     * Gets iddimension
     *
     * @return int|null
     */
    public function getIddimension()
    {
        return $this->container['iddimension'];
    }

    /**
     * Sets iddimension
     *
     * @param int|null $iddimension iddimension
     *
     * @return self
     */
    public function setIddimension($iddimension)
    {
        $this->container['iddimension'] = $iddimension;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


