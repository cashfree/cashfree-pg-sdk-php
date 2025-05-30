<?php
/**
 * PaymentMethodNetBankingInPaymentsEntityNetbanking
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
 * The version of the OpenAPI document: 2025-01-01
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
 * PaymentMethodNetBankingInPaymentsEntityNetbanking Class Doc Comment
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodNetBankingInPaymentsEntityNetbanking implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodNetBankingInPaymentsEntity_netbanking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'netbanking_bank_code' => 'int',
        'netbanking_bank_name' => 'string',
        'netbanking_ifsc' => 'string',
        'netbanking_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'netbanking_bank_code' => null,
        'netbanking_bank_name' => null,
        'netbanking_ifsc' => null,
        'netbanking_account_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'channel' => false,
		'netbanking_bank_code' => false,
		'netbanking_bank_name' => false,
		'netbanking_ifsc' => false,
		'netbanking_account_number' => false
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
        'channel' => 'channel',
        'netbanking_bank_code' => 'netbanking_bank_code',
        'netbanking_bank_name' => 'netbanking_bank_name',
        'netbanking_ifsc' => 'netbanking_ifsc',
        'netbanking_account_number' => 'netbanking_account_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'netbanking_bank_code' => 'setNetbankingBankCode',
        'netbanking_bank_name' => 'setNetbankingBankName',
        'netbanking_ifsc' => 'setNetbankingIfsc',
        'netbanking_account_number' => 'setNetbankingAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'netbanking_bank_code' => 'getNetbankingBankCode',
        'netbanking_bank_name' => 'getNetbankingBankName',
        'netbanking_ifsc' => 'getNetbankingIfsc',
        'netbanking_account_number' => 'getNetbankingAccountNumber'
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
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('netbanking_bank_code', $data ?? [], null);
        $this->setIfExists('netbanking_bank_name', $data ?? [], null);
        $this->setIfExists('netbanking_ifsc', $data ?? [], null);
        $this->setIfExists('netbanking_account_number', $data ?? [], null);
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
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets netbanking_bank_code
     *
     * @return int|null
     */
    public function getNetbankingBankCode()
    {
        return $this->container['netbanking_bank_code'];
    }

    /**
     * Sets netbanking_bank_code
     *
     * @param int|null $netbanking_bank_code netbanking_bank_code
     *
     * @return self
     */
    public function setNetbankingBankCode($netbanking_bank_code)
    {
        if (is_null($netbanking_bank_code)) {
            throw new \InvalidArgumentException('non-nullable netbanking_bank_code cannot be null');
        }
        $this->container['netbanking_bank_code'] = $netbanking_bank_code;

        return $this;
    }

    /**
     * Gets netbanking_bank_name
     *
     * @return string|null
     */
    public function getNetbankingBankName()
    {
        return $this->container['netbanking_bank_name'];
    }

    /**
     * Sets netbanking_bank_name
     *
     * @param string|null $netbanking_bank_name netbanking_bank_name
     *
     * @return self
     */
    public function setNetbankingBankName($netbanking_bank_name)
    {
        if (is_null($netbanking_bank_name)) {
            throw new \InvalidArgumentException('non-nullable netbanking_bank_name cannot be null');
        }
        $this->container['netbanking_bank_name'] = $netbanking_bank_name;

        return $this;
    }

    /**
     * Gets netbanking_ifsc
     *
     * @return string|null
     */
    public function getNetbankingIfsc()
    {
        return $this->container['netbanking_ifsc'];
    }

    /**
     * Sets netbanking_ifsc
     *
     * @param string|null $netbanking_ifsc netbanking_ifsc
     *
     * @return self
     */
    public function setNetbankingIfsc($netbanking_ifsc)
    {
        if (is_null($netbanking_ifsc)) {
            throw new \InvalidArgumentException('non-nullable netbanking_ifsc cannot be null');
        }
        $this->container['netbanking_ifsc'] = $netbanking_ifsc;

        return $this;
    }

    /**
     * Gets netbanking_account_number
     *
     * @return string|null
     */
    public function getNetbankingAccountNumber()
    {
        return $this->container['netbanking_account_number'];
    }

    /**
     * Sets netbanking_account_number
     *
     * @param string|null $netbanking_account_number netbanking_account_number
     *
     * @return self
     */
    public function setNetbankingAccountNumber($netbanking_account_number)
    {
        if (is_null($netbanking_account_number)) {
            throw new \InvalidArgumentException('non-nullable netbanking_account_number cannot be null');
        }
        $this->container['netbanking_account_number'] = $netbanking_account_number;

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


