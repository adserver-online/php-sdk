<?php
/**
 * AdVastLinear
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
 * AdVastLinear Class Doc Comment
 *
 * @category Class
 * @description Format-specific properties
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdVastLinear implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdVastLinear';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file' => 'string',
        'skipoffset' => 'int',
        'skipoffset_type' => 'string',
        'allow_skip' => 'int',
        'maintain_aspect_ratio' => 'int',
        'video_scalable' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file' => null,
        'skipoffset' => null,
        'skipoffset_type' => null,
        'allow_skip' => null,
        'maintain_aspect_ratio' => null,
        'video_scalable' => null
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
        'file' => 'file',
        'skipoffset' => 'skipoffset',
        'skipoffset_type' => 'skipoffset_type',
        'allow_skip' => 'allow_skip',
        'maintain_aspect_ratio' => 'maintain_aspect_ratio',
        'video_scalable' => 'video_scalable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
        'skipoffset' => 'setSkipoffset',
        'skipoffset_type' => 'setSkipoffsetType',
        'allow_skip' => 'setAllowSkip',
        'maintain_aspect_ratio' => 'setMaintainAspectRatio',
        'video_scalable' => 'setVideoScalable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
        'skipoffset' => 'getSkipoffset',
        'skipoffset_type' => 'getSkipoffsetType',
        'allow_skip' => 'getAllowSkip',
        'maintain_aspect_ratio' => 'getMaintainAspectRatio',
        'video_scalable' => 'getVideoScalable'
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

    public const SKIPOFFSET_TYPE_TIME = 'Time';
    public const SKIPOFFSET_TYPE_PERCENT = 'Percent';
    public const ALLOW_SKIP_0 = 0;
    public const ALLOW_SKIP_1 = 1;
    public const MAINTAIN_ASPECT_RATIO_0 = 0;
    public const MAINTAIN_ASPECT_RATIO_1 = 1;
    public const VIDEO_SCALABLE_0 = 0;
    public const VIDEO_SCALABLE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSkipoffsetTypeAllowableValues()
    {
        return [
            self::SKIPOFFSET_TYPE_TIME,
            self::SKIPOFFSET_TYPE_PERCENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowSkipAllowableValues()
    {
        return [
            self::ALLOW_SKIP_0,
            self::ALLOW_SKIP_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaintainAspectRatioAllowableValues()
    {
        return [
            self::MAINTAIN_ASPECT_RATIO_0,
            self::MAINTAIN_ASPECT_RATIO_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoScalableAllowableValues()
    {
        return [
            self::VIDEO_SCALABLE_0,
            self::VIDEO_SCALABLE_1,
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
        $this->container['file'] = $data['file'] ?? null;
        $this->container['skipoffset'] = $data['skipoffset'] ?? null;
        $this->container['skipoffset_type'] = $data['skipoffset_type'] ?? null;
        $this->container['allow_skip'] = $data['allow_skip'] ?? null;
        $this->container['maintain_aspect_ratio'] = $data['maintain_aspect_ratio'] ?? null;
        $this->container['video_scalable'] = $data['video_scalable'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSkipoffsetTypeAllowableValues();
        if (!is_null($this->container['skipoffset_type']) && !in_array($this->container['skipoffset_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'skipoffset_type', must be one of '%s'",
                $this->container['skipoffset_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAllowSkipAllowableValues();
        if (!is_null($this->container['allow_skip']) && !in_array($this->container['allow_skip'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'allow_skip', must be one of '%s'",
                $this->container['allow_skip'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMaintainAspectRatioAllowableValues();
        if (!is_null($this->container['maintain_aspect_ratio']) && !in_array($this->container['maintain_aspect_ratio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'maintain_aspect_ratio', must be one of '%s'",
                $this->container['maintain_aspect_ratio'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVideoScalableAllowableValues();
        if (!is_null($this->container['video_scalable']) && !in_array($this->container['video_scalable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'video_scalable', must be one of '%s'",
                $this->container['video_scalable'],
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
     * Gets file
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string|null $file Base64 encoded file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets skipoffset
     *
     * @return int|null
     */
    public function getSkipoffset()
    {
        return $this->container['skipoffset'];
    }

    /**
     * Sets skipoffset
     *
     * @param int|null $skipoffset skipoffset
     *
     * @return self
     */
    public function setSkipoffset($skipoffset)
    {
        $this->container['skipoffset'] = $skipoffset;

        return $this;
    }

    /**
     * Gets skipoffset_type
     *
     * @return string|null
     */
    public function getSkipoffsetType()
    {
        return $this->container['skipoffset_type'];
    }

    /**
     * Sets skipoffset_type
     *
     * @param string|null $skipoffset_type skipoffset_type
     *
     * @return self
     */
    public function setSkipoffsetType($skipoffset_type)
    {
        $allowedValues = $this->getSkipoffsetTypeAllowableValues();
        if (!is_null($skipoffset_type) && !in_array($skipoffset_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'skipoffset_type', must be one of '%s'",
                    $skipoffset_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['skipoffset_type'] = $skipoffset_type;

        return $this;
    }

    /**
     * Gets allow_skip
     *
     * @return int|null
     */
    public function getAllowSkip()
    {
        return $this->container['allow_skip'];
    }

    /**
     * Sets allow_skip
     *
     * @param int|null $allow_skip allow_skip
     *
     * @return self
     */
    public function setAllowSkip($allow_skip)
    {
        $allowedValues = $this->getAllowSkipAllowableValues();
        if (!is_null($allow_skip) && !in_array($allow_skip, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'allow_skip', must be one of '%s'",
                    $allow_skip,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow_skip'] = $allow_skip;

        return $this;
    }

    /**
     * Gets maintain_aspect_ratio
     *
     * @return int|null
     */
    public function getMaintainAspectRatio()
    {
        return $this->container['maintain_aspect_ratio'];
    }

    /**
     * Sets maintain_aspect_ratio
     *
     * @param int|null $maintain_aspect_ratio maintain_aspect_ratio
     *
     * @return self
     */
    public function setMaintainAspectRatio($maintain_aspect_ratio)
    {
        $allowedValues = $this->getMaintainAspectRatioAllowableValues();
        if (!is_null($maintain_aspect_ratio) && !in_array($maintain_aspect_ratio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'maintain_aspect_ratio', must be one of '%s'",
                    $maintain_aspect_ratio,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['maintain_aspect_ratio'] = $maintain_aspect_ratio;

        return $this;
    }

    /**
     * Gets video_scalable
     *
     * @return int|null
     */
    public function getVideoScalable()
    {
        return $this->container['video_scalable'];
    }

    /**
     * Sets video_scalable
     *
     * @param int|null $video_scalable video_scalable
     *
     * @return self
     */
    public function setVideoScalable($video_scalable)
    {
        $allowedValues = $this->getVideoScalableAllowableValues();
        if (!is_null($video_scalable) && !in_array($video_scalable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'video_scalable', must be one of '%s'",
                    $video_scalable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['video_scalable'] = $video_scalable;

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


