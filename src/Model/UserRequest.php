<?php
/**
 * UserRequest
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
 * UserRequest Class Doc Comment
 *
 * @category Class
 * @package  Adserver
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'skype' => 'string',
        'timezone' => 'string',
        'is_active' => 'int',
        'send_password' => 'int',
        'allow_login' => 'int',
        'campaigns_post_moderation' => 'int',
        'idcloudrole' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'email' => null,
        'phone' => null,
        'skype' => null,
        'timezone' => null,
        'is_active' => null,
        'send_password' => null,
        'allow_login' => null,
        'campaigns_post_moderation' => null,
        'idcloudrole' => null
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
        'email' => 'email',
        'phone' => 'phone',
        'skype' => 'skype',
        'timezone' => 'timezone',
        'is_active' => 'is_active',
        'send_password' => 'send_password',
        'allow_login' => 'allow_login',
        'campaigns_post_moderation' => 'campaigns_post_moderation',
        'idcloudrole' => 'idcloudrole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'skype' => 'setSkype',
        'timezone' => 'setTimezone',
        'is_active' => 'setIsActive',
        'send_password' => 'setSendPassword',
        'allow_login' => 'setAllowLogin',
        'campaigns_post_moderation' => 'setCampaignsPostModeration',
        'idcloudrole' => 'setIdcloudrole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'skype' => 'getSkype',
        'timezone' => 'getTimezone',
        'is_active' => 'getIsActive',
        'send_password' => 'getSendPassword',
        'allow_login' => 'getAllowLogin',
        'campaigns_post_moderation' => 'getCampaignsPostModeration',
        'idcloudrole' => 'getIdcloudrole'
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

    const IS_ACTIVE_0 = 0;
    const IS_ACTIVE_1 = 1;
    const SEND_PASSWORD_0 = 0;
    const SEND_PASSWORD_1 = 1;
    const ALLOW_LOGIN_0 = 0;
    const ALLOW_LOGIN_1 = 1;
    const CAMPAIGNS_POST_MODERATION_0 = 0;
    const CAMPAIGNS_POST_MODERATION_1 = 1;
    const IDCLOUDROLE_1 = 1;
    const IDCLOUDROLE_2 = 2;
    

    
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
    public function getSendPasswordAllowableValues()
    {
        return [
            self::SEND_PASSWORD_0,
            self::SEND_PASSWORD_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowLoginAllowableValues()
    {
        return [
            self::ALLOW_LOGIN_0,
            self::ALLOW_LOGIN_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignsPostModerationAllowableValues()
    {
        return [
            self::CAMPAIGNS_POST_MODERATION_0,
            self::CAMPAIGNS_POST_MODERATION_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdcloudroleAllowableValues()
    {
        return [
            self::IDCLOUDROLE_1,
            self::IDCLOUDROLE_2,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['skype'] = isset($data['skype']) ? $data['skype'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['send_password'] = isset($data['send_password']) ? $data['send_password'] : null;
        $this->container['allow_login'] = isset($data['allow_login']) ? $data['allow_login'] : null;
        $this->container['campaigns_post_moderation'] = isset($data['campaigns_post_moderation']) ? $data['campaigns_post_moderation'] : null;
        $this->container['idcloudrole'] = isset($data['idcloudrole']) ? $data['idcloudrole'] : null;
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
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        $allowedValues = $this->getIsActiveAllowableValues();
        if (!is_null($this->container['is_active']) && !in_array($this->container['is_active'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'is_active', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSendPasswordAllowableValues();
        if (!is_null($this->container['send_password']) && !in_array($this->container['send_password'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'send_password', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAllowLoginAllowableValues();
        if (!is_null($this->container['allow_login']) && !in_array($this->container['allow_login'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'allow_login', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCampaignsPostModerationAllowableValues();
        if (!is_null($this->container['campaigns_post_moderation']) && !in_array($this->container['campaigns_post_moderation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'campaigns_post_moderation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdcloudroleAllowableValues();
        if (!is_null($this->container['idcloudrole']) && !in_array($this->container['idcloudrole'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'idcloudrole', must be one of '%s'",
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets skype
     *
     * @return string|null
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     *
     * @param string|null $skype skype
     *
     * @return $this
     */
    public function setSkype($skype)
    {
        $this->container['skype'] = $skype;

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
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $allowedValues = $this->getIsActiveAllowableValues();
        if (!is_null($is_active) && !in_array($is_active, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'is_active', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets send_password
     *
     * @return int|null
     */
    public function getSendPassword()
    {
        return $this->container['send_password'];
    }

    /**
     * Sets send_password
     *
     * @param int|null $send_password Generate and send password to user's email
     *
     * @return $this
     */
    public function setSendPassword($send_password)
    {
        $allowedValues = $this->getSendPasswordAllowableValues();
        if (!is_null($send_password) && !in_array($send_password, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'send_password', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['send_password'] = $send_password;

        return $this;
    }

    /**
     * Gets allow_login
     *
     * @return int|null
     */
    public function getAllowLogin()
    {
        return $this->container['allow_login'];
    }

    /**
     * Sets allow_login
     *
     * @param int|null $allow_login allow_login
     *
     * @return $this
     */
    public function setAllowLogin($allow_login)
    {
        $allowedValues = $this->getAllowLoginAllowableValues();
        if (!is_null($allow_login) && !in_array($allow_login, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allow_login', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow_login'] = $allow_login;

        return $this;
    }

    /**
     * Gets campaigns_post_moderation
     *
     * @return int|null
     */
    public function getCampaignsPostModeration()
    {
        return $this->container['campaigns_post_moderation'];
    }

    /**
     * Sets campaigns_post_moderation
     *
     * @param int|null $campaigns_post_moderation campaigns_post_moderation
     *
     * @return $this
     */
    public function setCampaignsPostModeration($campaigns_post_moderation)
    {
        $allowedValues = $this->getCampaignsPostModerationAllowableValues();
        if (!is_null($campaigns_post_moderation) && !in_array($campaigns_post_moderation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'campaigns_post_moderation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaigns_post_moderation'] = $campaigns_post_moderation;

        return $this;
    }

    /**
     * Gets idcloudrole
     *
     * @return int|null
     */
    public function getIdcloudrole()
    {
        return $this->container['idcloudrole'];
    }

    /**
     * Sets idcloudrole
     *
     * @param int|null $idcloudrole Roles:  * 2 - manager  * 3 - advertiser  * 4 - publisher
     *
     * @return $this
     */
    public function setIdcloudrole($idcloudrole)
    {
        $allowedValues = $this->getIdcloudroleAllowableValues();
        if (!is_null($idcloudrole) && !in_array($idcloudrole, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'idcloudrole', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['idcloudrole'] = $idcloudrole;

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


