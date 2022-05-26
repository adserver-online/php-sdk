<?php
/**
 * SiteRequest
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
 * SiteRequest Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SiteRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SiteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'url' => 'string',
        'idcategory' => 'int',
        'idpublisher' => 'int',
        'is_active' => 'int',
        'idstatus' => 'int',
        'idblockreason' => 'string',
        'block_reason' => 'string'
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
        'url' => null,
        'idcategory' => null,
        'idpublisher' => null,
        'is_active' => null,
        'idstatus' => null,
        'idblockreason' => null,
        'block_reason' => null
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
        'url' => 'url',
        'idcategory' => 'idcategory',
        'idpublisher' => 'idpublisher',
        'is_active' => 'is_active',
        'idstatus' => 'idstatus',
        'idblockreason' => 'idblockreason',
        'block_reason' => 'block_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'url' => 'setUrl',
        'idcategory' => 'setIdcategory',
        'idpublisher' => 'setIdpublisher',
        'is_active' => 'setIsActive',
        'idstatus' => 'setIdstatus',
        'idblockreason' => 'setIdblockreason',
        'block_reason' => 'setBlockReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'url' => 'getUrl',
        'idcategory' => 'getIdcategory',
        'idpublisher' => 'getIdpublisher',
        'is_active' => 'getIsActive',
        'idstatus' => 'getIdstatus',
        'idblockreason' => 'getIdblockreason',
        'block_reason' => 'getBlockReason'
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
    public const IDSTATUS_3500 = 3500;
    public const IDSTATUS_3510 = 3510;
    public const IDSTATUS_3520 = 3520;
    public const IDBLOCKREASON__1 = '1';
    public const IDBLOCKREASON__2 = '2';
    public const IDBLOCKREASON__100 = '100';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdstatusAllowableValues()
    {
        return [
            self::IDSTATUS_3500,
            self::IDSTATUS_3510,
            self::IDSTATUS_3520,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdblockreasonAllowableValues()
    {
        return [
            self::IDBLOCKREASON__1,
            self::IDBLOCKREASON__2,
            self::IDBLOCKREASON__100,
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['idcategory'] = $data['idcategory'] ?? null;
        $this->container['idpublisher'] = $data['idpublisher'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['idstatus'] = $data['idstatus'] ?? null;
        $this->container['idblockreason'] = $data['idblockreason'] ?? null;
        $this->container['block_reason'] = $data['block_reason'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['idcategory'] === null) {
            $invalidProperties[] = "'idcategory' can't be null";
        }
        $allowedValues = $this->getIsActiveAllowableValues();
        if (!is_null($this->container['is_active']) && !in_array($this->container['is_active'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'is_active', must be one of '%s'",
                $this->container['is_active'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['idstatus'] === null) {
            $invalidProperties[] = "'idstatus' can't be null";
        }
        $allowedValues = $this->getIdstatusAllowableValues();
        if (!is_null($this->container['idstatus']) && !in_array($this->container['idstatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'idstatus', must be one of '%s'",
                $this->container['idstatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdblockreasonAllowableValues();
        if (!is_null($this->container['idblockreason']) && !in_array($this->container['idblockreason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'idblockreason', must be one of '%s'",
                $this->container['idblockreason'],
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets idcategory
     *
     * @return int
     */
    public function getIdcategory()
    {
        return $this->container['idcategory'];
    }

    /**
     * Sets idcategory
     *
     * @param int $idcategory idcategory
     *
     * @return self
     */
    public function setIdcategory($idcategory)
    {
        $this->container['idcategory'] = $idcategory;

        return $this;
    }

    /**
     * Gets idpublisher
     *
     * @return int|null
     */
    public function getIdpublisher()
    {
        return $this->container['idpublisher'];
    }

    /**
     * Sets idpublisher
     *
     * @param int|null $idpublisher idpublisher
     *
     * @return self
     */
    public function setIdpublisher($idpublisher)
    {
        $this->container['idpublisher'] = $idpublisher;

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
     * Gets idstatus
     *
     * @return int
     */
    public function getIdstatus()
    {
        return $this->container['idstatus'];
    }

    /**
     * Sets idstatus
     *
     * @param int $idstatus Moderation statuses:  * 3520 - pending  * 3500 - approved  * 3510 - rejected
     *
     * @return self
     */
    public function setIdstatus($idstatus)
    {
        $allowedValues = $this->getIdstatusAllowableValues();
        if (!in_array($idstatus, $allowedValues, true)) {
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
     * Gets idblockreason
     *
     * @return string|null
     */
    public function getIdblockreason()
    {
        return $this->container['idblockreason'];
    }

    /**
     * Sets idblockreason
     *
     * @param string|null $idblockreason Block reason:  * 1 - low traffic quality  * 2 - illegal content  * 100 - custom
     *
     * @return self
     */
    public function setIdblockreason($idblockreason)
    {
        $allowedValues = $this->getIdblockreasonAllowableValues();
        if (!is_null($idblockreason) && !in_array($idblockreason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'idblockreason', must be one of '%s'",
                    $idblockreason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['idblockreason'] = $idblockreason;

        return $this;
    }

    /**
     * Gets block_reason
     *
     * @return string|null
     */
    public function getBlockReason()
    {
        return $this->container['block_reason'];
    }

    /**
     * Sets block_reason
     *
     * @param string|null $block_reason block_reason
     *
     * @return self
     */
    public function setBlockReason($block_reason)
    {
        $this->container['block_reason'] = $block_reason;

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


