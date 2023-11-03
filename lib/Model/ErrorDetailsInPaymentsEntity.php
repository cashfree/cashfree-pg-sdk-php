<?php
/**
 * ErrorDetailsInPaymentsEntity
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
 * The version of the OpenAPI document: 2022-09-01
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
 * ErrorDetailsInPaymentsEntity Class Doc Comment
 *
 * @category Class
 * @description The error details are present only for failed payments
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ErrorDetailsInPaymentsEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ErrorDetailsInPaymentsEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_code' => 'string',
        'error_description' => 'string',
        'error_reason' => 'string',
        'error_source' => 'string',
        'error_code_raw' => 'string',
        'error_description_raw' => 'string',
        'error_subcode_raw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_code' => null,
        'error_description' => null,
        'error_reason' => null,
        'error_source' => null,
        'error_code_raw' => null,
        'error_description_raw' => null,
        'error_subcode_raw' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_code' => false,
		'error_description' => false,
		'error_reason' => false,
		'error_source' => false,
		'error_code_raw' => false,
		'error_description_raw' => false,
		'error_subcode_raw' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'error_code' => 'error_code',
        'error_description' => 'error_description',
        'error_reason' => 'error_reason',
        'error_source' => 'error_source',
        'error_code_raw' => 'error_code_raw',
        'error_description_raw' => 'error_description_raw',
        'error_subcode_raw' => 'error_subcode_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'error_description' => 'setErrorDescription',
        'error_reason' => 'setErrorReason',
        'error_source' => 'setErrorSource',
        'error_code_raw' => 'setErrorCodeRaw',
        'error_description_raw' => 'setErrorDescriptionRaw',
        'error_subcode_raw' => 'setErrorSubcodeRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'error_description' => 'getErrorDescription',
        'error_reason' => 'getErrorReason',
        'error_source' => 'getErrorSource',
        'error_code_raw' => 'getErrorCodeRaw',
        'error_description_raw' => 'getErrorDescriptionRaw',
        'error_subcode_raw' => 'getErrorSubcodeRaw'
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
        $this->setIfExists('error_code', $data ?? [], null);
        $this->setIfExists('error_description', $data ?? [], null);
        $this->setIfExists('error_reason', $data ?? [], null);
        $this->setIfExists('error_source', $data ?? [], null);
        $this->setIfExists('error_code_raw', $data ?? [], null);
        $this->setIfExists('error_description_raw', $data ?? [], null);
        $this->setIfExists('error_subcode_raw', $data ?? [], null);
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
     * Gets error_code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string|null $error_code error_code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            throw new \InvalidArgumentException('non-nullable error_code cannot be null');
        }
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_description
     *
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->container['error_description'];
    }

    /**
     * Sets error_description
     *
     * @param string|null $error_description error_description
     *
     * @return self
     */
    public function setErrorDescription($error_description)
    {
        if (is_null($error_description)) {
            throw new \InvalidArgumentException('non-nullable error_description cannot be null');
        }
        $this->container['error_description'] = $error_description;

        return $this;
    }

    /**
     * Gets error_reason
     *
     * @return string|null
     */
    public function getErrorReason()
    {
        return $this->container['error_reason'];
    }

    /**
     * Sets error_reason
     *
     * @param string|null $error_reason error_reason
     *
     * @return self
     */
    public function setErrorReason($error_reason)
    {
        if (is_null($error_reason)) {
            throw new \InvalidArgumentException('non-nullable error_reason cannot be null');
        }
        $this->container['error_reason'] = $error_reason;

        return $this;
    }

    /**
     * Gets error_source
     *
     * @return string|null
     */
    public function getErrorSource()
    {
        return $this->container['error_source'];
    }

    /**
     * Sets error_source
     *
     * @param string|null $error_source error_source
     *
     * @return self
     */
    public function setErrorSource($error_source)
    {
        if (is_null($error_source)) {
            throw new \InvalidArgumentException('non-nullable error_source cannot be null');
        }
        $this->container['error_source'] = $error_source;

        return $this;
    }

    /**
     * Gets error_code_raw
     *
     * @return string|null
     */
    public function getErrorCodeRaw()
    {
        return $this->container['error_code_raw'];
    }

    /**
     * Sets error_code_raw
     *
     * @param string|null $error_code_raw error_code_raw
     *
     * @return self
     */
    public function setErrorCodeRaw($error_code_raw)
    {
        if (is_null($error_code_raw)) {
            throw new \InvalidArgumentException('non-nullable error_code_raw cannot be null');
        }
        $this->container['error_code_raw'] = $error_code_raw;

        return $this;
    }

    /**
     * Gets error_description_raw
     *
     * @return string|null
     */
    public function getErrorDescriptionRaw()
    {
        return $this->container['error_description_raw'];
    }

    /**
     * Sets error_description_raw
     *
     * @param string|null $error_description_raw error_description_raw
     *
     * @return self
     */
    public function setErrorDescriptionRaw($error_description_raw)
    {
        if (is_null($error_description_raw)) {
            throw new \InvalidArgumentException('non-nullable error_description_raw cannot be null');
        }
        $this->container['error_description_raw'] = $error_description_raw;

        return $this;
    }

    /**
     * Gets error_subcode_raw
     *
     * @return string|null
     */
    public function getErrorSubcodeRaw()
    {
        return $this->container['error_subcode_raw'];
    }

    /**
     * Sets error_subcode_raw
     *
     * @param string|null $error_subcode_raw error_subcode_raw
     *
     * @return self
     */
    public function setErrorSubcodeRaw($error_subcode_raw)
    {
        if (is_null($error_subcode_raw)) {
            throw new \InvalidArgumentException('non-nullable error_subcode_raw cannot be null');
        }
        $this->container['error_subcode_raw'] = $error_subcode_raw;

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


