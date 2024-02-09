<?php
/**
 * UpdateTerminalRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payment Gateway APIs
 *
 * Cashfree's Payment Gateway APIs provide developers with a streamlined pathway to integrate advanced payment processing capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2023-08-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * UpdateTerminalRequest Class Doc Comment
 *
 * @category Class
 * @description Request body to update terminal details.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateTerminalRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateTerminalRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_email' => 'string',
        'terminal_phone_no' => 'string',
        'terminal_meta' => '\Cashfree\Model\UpdateTerminalRequestTerminalMeta',
        'terminal_status' => 'string',
        'terminal_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terminal_email' => null,
        'terminal_phone_no' => null,
        'terminal_meta' => null,
        'terminal_status' => null,
        'terminal_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'terminal_email' => false,
		'terminal_phone_no' => false,
		'terminal_meta' => false,
		'terminal_status' => false,
		'terminal_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'terminal_email' => 'terminal_email',
        'terminal_phone_no' => 'terminal_phone_no',
        'terminal_meta' => 'terminal_meta',
        'terminal_status' => 'terminal_status',
        'terminal_type' => 'terminal_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_email' => 'setTerminalEmail',
        'terminal_phone_no' => 'setTerminalPhoneNo',
        'terminal_meta' => 'setTerminalMeta',
        'terminal_status' => 'setTerminalStatus',
        'terminal_type' => 'setTerminalType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_email' => 'getTerminalEmail',
        'terminal_phone_no' => 'getTerminalPhoneNo',
        'terminal_meta' => 'getTerminalMeta',
        'terminal_status' => 'getTerminalStatus',
        'terminal_type' => 'getTerminalType'
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
        $this->setIfExists('terminal_email', $data ?? [], null);
        $this->setIfExists('terminal_phone_no', $data ?? [], null);
        $this->setIfExists('terminal_meta', $data ?? [], null);
        $this->setIfExists('terminal_status', $data ?? [], null);
        $this->setIfExists('terminal_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['terminal_phone_no']) && (mb_strlen($this->container['terminal_phone_no']) > 10)) {
            $invalidProperties[] = "invalid value for 'terminal_phone_no', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['terminal_phone_no']) && (mb_strlen($this->container['terminal_phone_no']) < 10)) {
            $invalidProperties[] = "invalid value for 'terminal_phone_no', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['terminal_type'] === null) {
            $invalidProperties[] = "'terminal_type' can't be null";
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
     * Gets terminal_email
     *
     * @return string|null
     */
    public function getTerminalEmail()
    {
        return $this->container['terminal_email'];
    }

    /**
     * Sets terminal_email
     *
     * @param string|null $terminal_email Mention the updated email ID of the terminal.
     *
     * @return self
     */
    public function setTerminalEmail($terminal_email)
    {
        if (is_null($terminal_email)) {
            throw new \InvalidArgumentException('non-nullable terminal_email cannot be null');
        }
        $this->container['terminal_email'] = $terminal_email;

        return $this;
    }

    /**
     * Gets terminal_phone_no
     *
     * @return string|null
     */
    public function getTerminalPhoneNo()
    {
        return $this->container['terminal_phone_no'];
    }

    /**
     * Sets terminal_phone_no
     *
     * @param string|null $terminal_phone_no Terminal phone number to be updated.
     *
     * @return self
     */
    public function setTerminalPhoneNo($terminal_phone_no)
    {
        if (is_null($terminal_phone_no)) {
            throw new \InvalidArgumentException('non-nullable terminal_phone_no cannot be null');
        }
        if ((mb_strlen($terminal_phone_no) > 10)) {
            throw new \InvalidArgumentException('invalid length for $terminal_phone_no when calling UpdateTerminalRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($terminal_phone_no) < 10)) {
            throw new \InvalidArgumentException('invalid length for $terminal_phone_no when calling UpdateTerminalRequest., must be bigger than or equal to 10.');
        }

        $this->container['terminal_phone_no'] = $terminal_phone_no;

        return $this;
    }

    /**
     * Gets terminal_meta
     *
     * @return \Cashfree\Model\UpdateTerminalRequestTerminalMeta|null
     */
    public function getTerminalMeta()
    {
        return $this->container['terminal_meta'];
    }

    /**
     * Sets terminal_meta
     *
     * @param \Cashfree\Model\UpdateTerminalRequestTerminalMeta|null $terminal_meta terminal_meta
     *
     * @return self
     */
    public function setTerminalMeta($terminal_meta)
    {
        if (is_null($terminal_meta)) {
            throw new \InvalidArgumentException('non-nullable terminal_meta cannot be null');
        }
        $this->container['terminal_meta'] = $terminal_meta;

        return $this;
    }

    /**
     * Gets terminal_status
     *
     * @return string|null
     */
    public function getTerminalStatus()
    {
        return $this->container['terminal_status'];
    }

    /**
     * Sets terminal_status
     *
     * @param string|null $terminal_status Status of the terminal to be updated.
     *
     * @return self
     */
    public function setTerminalStatus($terminal_status)
    {
        if (is_null($terminal_status)) {
            throw new \InvalidArgumentException('non-nullable terminal_status cannot be null');
        }
        $this->container['terminal_status'] = $terminal_status;

        return $this;
    }

    /**
     * Gets terminal_type
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->container['terminal_type'];
    }

    /**
     * Sets terminal_type
     *
     * @param string $terminal_type Mention the terminal type to be updated. Possible values - AGENT, STOREFRONT.
     *
     * @return self
     */
    public function setTerminalType($terminal_type)
    {
        if (is_null($terminal_type)) {
            throw new \InvalidArgumentException('non-nullable terminal_type cannot be null');
        }
        $this->container['terminal_type'] = $terminal_type;

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


