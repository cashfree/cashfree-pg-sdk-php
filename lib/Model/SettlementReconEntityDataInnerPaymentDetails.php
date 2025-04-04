<?php
/**
 * SettlementReconEntityDataInnerPaymentDetails
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
 * SettlementReconEntityDataInnerPaymentDetails Class Doc Comment
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettlementReconEntityDataInnerPaymentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettlementReconEntity_data_inner_payment_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_amount' => 'float',
        'payment_currency' => 'string',
        'bank_reference' => 'string',
        'payment_time' => 'string',
        'payment_mode' => 'string',
        'payment_service_charge' => 'float',
        'payment_service_tax' => 'float',
        'cf_payment_id' => 'string',
        'status' => 'string',
        'forex_conversion_handling_charge' => 'string',
        'forex_conversion_handling_tax' => 'string',
        'charges_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_amount' => null,
        'payment_currency' => null,
        'bank_reference' => null,
        'payment_time' => null,
        'payment_mode' => null,
        'payment_service_charge' => null,
        'payment_service_tax' => null,
        'cf_payment_id' => null,
        'status' => null,
        'forex_conversion_handling_charge' => null,
        'forex_conversion_handling_tax' => null,
        'charges_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'payment_amount' => false,
		'payment_currency' => false,
		'bank_reference' => false,
		'payment_time' => false,
		'payment_mode' => false,
		'payment_service_charge' => false,
		'payment_service_tax' => false,
		'cf_payment_id' => false,
		'status' => false,
		'forex_conversion_handling_charge' => false,
		'forex_conversion_handling_tax' => false,
		'charges_currency' => false
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
        'payment_amount' => 'payment_amount',
        'payment_currency' => 'payment_currency',
        'bank_reference' => 'bank_reference',
        'payment_time' => 'payment_time',
        'payment_mode' => 'payment_mode',
        'payment_service_charge' => 'payment_service_charge',
        'payment_service_tax' => 'payment_service_tax',
        'cf_payment_id' => 'cf_payment_id',
        'status' => 'status',
        'forex_conversion_handling_charge' => 'forex_conversion_handling_charge',
        'forex_conversion_handling_tax' => 'forex_conversion_handling_tax',
        'charges_currency' => 'charges_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_amount' => 'setPaymentAmount',
        'payment_currency' => 'setPaymentCurrency',
        'bank_reference' => 'setBankReference',
        'payment_time' => 'setPaymentTime',
        'payment_mode' => 'setPaymentMode',
        'payment_service_charge' => 'setPaymentServiceCharge',
        'payment_service_tax' => 'setPaymentServiceTax',
        'cf_payment_id' => 'setCfPaymentId',
        'status' => 'setStatus',
        'forex_conversion_handling_charge' => 'setForexConversionHandlingCharge',
        'forex_conversion_handling_tax' => 'setForexConversionHandlingTax',
        'charges_currency' => 'setChargesCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_amount' => 'getPaymentAmount',
        'payment_currency' => 'getPaymentCurrency',
        'bank_reference' => 'getBankReference',
        'payment_time' => 'getPaymentTime',
        'payment_mode' => 'getPaymentMode',
        'payment_service_charge' => 'getPaymentServiceCharge',
        'payment_service_tax' => 'getPaymentServiceTax',
        'cf_payment_id' => 'getCfPaymentId',
        'status' => 'getStatus',
        'forex_conversion_handling_charge' => 'getForexConversionHandlingCharge',
        'forex_conversion_handling_tax' => 'getForexConversionHandlingTax',
        'charges_currency' => 'getChargesCurrency'
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
        $this->setIfExists('payment_amount', $data ?? [], null);
        $this->setIfExists('payment_currency', $data ?? [], null);
        $this->setIfExists('bank_reference', $data ?? [], null);
        $this->setIfExists('payment_time', $data ?? [], null);
        $this->setIfExists('payment_mode', $data ?? [], null);
        $this->setIfExists('payment_service_charge', $data ?? [], null);
        $this->setIfExists('payment_service_tax', $data ?? [], null);
        $this->setIfExists('cf_payment_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('forex_conversion_handling_charge', $data ?? [], null);
        $this->setIfExists('forex_conversion_handling_tax', $data ?? [], null);
        $this->setIfExists('charges_currency', $data ?? [], null);
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
     * Gets payment_amount
     *
     * @return float|null
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param float|null $payment_amount Payment amount captured.
     *
     * @return self
     */
    public function setPaymentAmount($payment_amount)
    {
        if (is_null($payment_amount)) {
            throw new \InvalidArgumentException('non-nullable payment_amount cannot be null');
        }
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets payment_currency
     *
     * @return string|null
     */
    public function getPaymentCurrency()
    {
        return $this->container['payment_currency'];
    }

    /**
     * Sets payment_currency
     *
     * @param string|null $payment_currency Payment Curreny type - INR.
     *
     * @return self
     */
    public function setPaymentCurrency($payment_currency)
    {
        if (is_null($payment_currency)) {
            throw new \InvalidArgumentException('non-nullable payment_currency cannot be null');
        }
        $this->container['payment_currency'] = $payment_currency;

        return $this;
    }

    /**
     * Gets bank_reference
     *
     * @return string|null
     */
    public function getBankReference()
    {
        return $this->container['bank_reference'];
    }

    /**
     * Sets bank_reference
     *
     * @param string|null $bank_reference Unique transaction reference number of the payment.
     *
     * @return self
     */
    public function setBankReference($bank_reference)
    {
        if (is_null($bank_reference)) {
            throw new \InvalidArgumentException('non-nullable bank_reference cannot be null');
        }
        $this->container['bank_reference'] = $bank_reference;

        return $this;
    }

    /**
     * Gets payment_time
     *
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->container['payment_time'];
    }

    /**
     * Sets payment_time
     *
     * @param string|null $payment_time Date and time when the payment was initiated.
     *
     * @return self
     */
    public function setPaymentTime($payment_time)
    {
        if (is_null($payment_time)) {
            throw new \InvalidArgumentException('non-nullable payment_time cannot be null');
        }
        $this->container['payment_time'] = $payment_time;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param string|null $payment_mode Mode of the payment.
     *
     * @return self
     */
    public function setPaymentMode($payment_mode)
    {
        if (is_null($payment_mode)) {
            throw new \InvalidArgumentException('non-nullable payment_mode cannot be null');
        }
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets payment_service_charge
     *
     * @return float|null
     */
    public function getPaymentServiceCharge()
    {
        return $this->container['payment_service_charge'];
    }

    /**
     * Sets payment_service_charge
     *
     * @param float|null $payment_service_charge Service charge applicable for the payment.
     *
     * @return self
     */
    public function setPaymentServiceCharge($payment_service_charge)
    {
        if (is_null($payment_service_charge)) {
            throw new \InvalidArgumentException('non-nullable payment_service_charge cannot be null');
        }
        $this->container['payment_service_charge'] = $payment_service_charge;

        return $this;
    }

    /**
     * Gets payment_service_tax
     *
     * @return float|null
     */
    public function getPaymentServiceTax()
    {
        return $this->container['payment_service_tax'];
    }

    /**
     * Sets payment_service_tax
     *
     * @param float|null $payment_service_tax Service tax applicable on the payment.
     *
     * @return self
     */
    public function setPaymentServiceTax($payment_service_tax)
    {
        if (is_null($payment_service_tax)) {
            throw new \InvalidArgumentException('non-nullable payment_service_tax cannot be null');
        }
        $this->container['payment_service_tax'] = $payment_service_tax;

        return $this;
    }

    /**
     * Gets cf_payment_id
     *
     * @return string|null
     */
    public function getCfPaymentId()
    {
        return $this->container['cf_payment_id'];
    }

    /**
     * Sets cf_payment_id
     *
     * @param string|null $cf_payment_id Cashfree Payments unique ID to identify a payment.
     *
     * @return self
     */
    public function setCfPaymentId($cf_payment_id)
    {
        if (is_null($cf_payment_id)) {
            throw new \InvalidArgumentException('non-nullable cf_payment_id cannot be null');
        }
        $this->container['cf_payment_id'] = $cf_payment_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the Payment.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets forex_conversion_handling_charge
     *
     * @return string|null
     */
    public function getForexConversionHandlingCharge()
    {
        return $this->container['forex_conversion_handling_charge'];
    }

    /**
     * Sets forex_conversion_handling_charge
     *
     * @param string|null $forex_conversion_handling_charge Forex Conversion Service Charge.
     *
     * @return self
     */
    public function setForexConversionHandlingCharge($forex_conversion_handling_charge)
    {
        if (is_null($forex_conversion_handling_charge)) {
            throw new \InvalidArgumentException('non-nullable forex_conversion_handling_charge cannot be null');
        }
        $this->container['forex_conversion_handling_charge'] = $forex_conversion_handling_charge;

        return $this;
    }

    /**
     * Gets forex_conversion_handling_tax
     *
     * @return string|null
     */
    public function getForexConversionHandlingTax()
    {
        return $this->container['forex_conversion_handling_tax'];
    }

    /**
     * Sets forex_conversion_handling_tax
     *
     * @param string|null $forex_conversion_handling_tax Forex Conversion Service Tax.
     *
     * @return self
     */
    public function setForexConversionHandlingTax($forex_conversion_handling_tax)
    {
        if (is_null($forex_conversion_handling_tax)) {
            throw new \InvalidArgumentException('non-nullable forex_conversion_handling_tax cannot be null');
        }
        $this->container['forex_conversion_handling_tax'] = $forex_conversion_handling_tax;

        return $this;
    }

    /**
     * Gets charges_currency
     *
     * @return string|null
     */
    public function getChargesCurrency()
    {
        return $this->container['charges_currency'];
    }

    /**
     * Sets charges_currency
     *
     * @param string|null $charges_currency Forex Charges Curreny type - INR.
     *
     * @return self
     */
    public function setChargesCurrency($charges_currency)
    {
        if (is_null($charges_currency)) {
            throw new \InvalidArgumentException('non-nullable charges_currency cannot be null');
        }
        $this->container['charges_currency'] = $charges_currency;

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


