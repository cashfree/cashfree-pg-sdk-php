<?php
/**
 * OfferDetails
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
 * OfferDetails Class Doc Comment
 *
 * @category Class
 * @description Offer details and type
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_type' => 'string',
        'discount_details' => '\Cashfree\Model\DiscountDetails',
        'cashback_details' => '\Cashfree\Model\CashbackDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_type' => null,
        'discount_details' => null,
        'cashback_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'offer_type' => false,
		'discount_details' => false,
		'cashback_details' => false
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
        'offer_type' => 'offer_type',
        'discount_details' => 'discount_details',
        'cashback_details' => 'cashback_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_type' => 'setOfferType',
        'discount_details' => 'setDiscountDetails',
        'cashback_details' => 'setCashbackDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_type' => 'getOfferType',
        'discount_details' => 'getDiscountDetails',
        'cashback_details' => 'getCashbackDetails'
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

    public const OFFER_TYPE_DISCOUNT = 'DISCOUNT';
    public const OFFER_TYPE_CASHBACK = 'CASHBACK';
    public const OFFER_TYPE_DISCOUNT_AND_CASHBACK = 'DISCOUNT_AND_CASHBACK';
    public const OFFER_TYPE_NO_COST_EMI = 'NO_COST_EMI';
    public const OFFER_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOfferTypeAllowableValues()
    {
        return [
            self::OFFER_TYPE_DISCOUNT,
            self::OFFER_TYPE_CASHBACK,
            self::OFFER_TYPE_DISCOUNT_AND_CASHBACK,
            self::OFFER_TYPE_NO_COST_EMI,
            self::OFFER_TYPE_UNKNOWN_DEFAULT_OPEN_API,
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
        $this->setIfExists('offer_type', $data ?? [], null);
        $this->setIfExists('discount_details', $data ?? [], null);
        $this->setIfExists('cashback_details', $data ?? [], null);
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

        if ($this->container['offer_type'] === null) {
            $invalidProperties[] = "'offer_type' can't be null";
        }
        $allowedValues = $this->getOfferTypeAllowableValues();
        if (!is_null($this->container['offer_type']) && !in_array($this->container['offer_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'offer_type', must be one of '%s'",
                $this->container['offer_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['offer_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'offer_type', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['offer_type']) < 3)) {
            $invalidProperties[] = "invalid value for 'offer_type', the character length must be bigger than or equal to 3.";
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
     * Gets offer_type
     *
     * @return string
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param string $offer_type Offer Type for the Offer.
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        if (is_null($offer_type)) {
            throw new \InvalidArgumentException('non-nullable offer_type cannot be null');
        }
        $allowedValues = $this->getOfferTypeAllowableValues();
        if (!in_array($offer_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'offer_type', must be one of '%s'",
                    $offer_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($offer_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $offer_type when calling OfferDetails., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($offer_type) < 3)) {
            throw new \InvalidArgumentException('invalid length for $offer_type when calling OfferDetails., must be bigger than or equal to 3.');
        }

        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets discount_details
     *
     * @return \Cashfree\Model\DiscountDetails|null
     */
    public function getDiscountDetails()
    {
        return $this->container['discount_details'];
    }

    /**
     * Sets discount_details
     *
     * @param \Cashfree\Model\DiscountDetails|null $discount_details discount_details
     *
     * @return self
     */
    public function setDiscountDetails($discount_details)
    {
        if (is_null($discount_details)) {
            throw new \InvalidArgumentException('non-nullable discount_details cannot be null');
        }
        $this->container['discount_details'] = $discount_details;

        return $this;
    }

    /**
     * Gets cashback_details
     *
     * @return \Cashfree\Model\CashbackDetails|null
     */
    public function getCashbackDetails()
    {
        return $this->container['cashback_details'];
    }

    /**
     * Sets cashback_details
     *
     * @param \Cashfree\Model\CashbackDetails|null $cashback_details cashback_details
     *
     * @return self
     */
    public function setCashbackDetails($cashback_details)
    {
        if (is_null($cashback_details)) {
            throw new \InvalidArgumentException('non-nullable cashback_details cannot be null');
        }
        $this->container['cashback_details'] = $cashback_details;

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


