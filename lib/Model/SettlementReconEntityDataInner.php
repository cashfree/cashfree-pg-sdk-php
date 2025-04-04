<?php
/**
 * SettlementReconEntityDataInner
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
 * SettlementReconEntityDataInner Class Doc Comment
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettlementReconEntityDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettlementReconEntity_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_details' => '\Cashfree\Model\SettlementReconEntityDataInnerEventDetails',
        'order_details' => '\Cashfree\Model\SettlementReconEntityDataInnerOrderDetails',
        'customer_details' => '\Cashfree\Model\SettlementReconEntityDataInnerCustomerDetails',
        'payment_details' => '\Cashfree\Model\SettlementReconEntityDataInnerPaymentDetails',
        'settlement_details' => '\Cashfree\Model\SettlementReconEntityDataInnerSettlementDetails',
        'dispute_details' => '\Cashfree\Model\SettlementReconEntityDataInnerDisputeDetails',
        'refund_details' => '\Cashfree\Model\SettlementReconEntityDataInnerRefundDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_details' => null,
        'order_details' => null,
        'customer_details' => null,
        'payment_details' => null,
        'settlement_details' => null,
        'dispute_details' => null,
        'refund_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'event_details' => false,
		'order_details' => false,
		'customer_details' => false,
		'payment_details' => false,
		'settlement_details' => false,
		'dispute_details' => false,
		'refund_details' => false
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
        'event_details' => 'event_details',
        'order_details' => 'order_details',
        'customer_details' => 'customer_details',
        'payment_details' => 'payment_details',
        'settlement_details' => 'settlement_details',
        'dispute_details' => 'dispute_details',
        'refund_details' => 'refund_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_details' => 'setEventDetails',
        'order_details' => 'setOrderDetails',
        'customer_details' => 'setCustomerDetails',
        'payment_details' => 'setPaymentDetails',
        'settlement_details' => 'setSettlementDetails',
        'dispute_details' => 'setDisputeDetails',
        'refund_details' => 'setRefundDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_details' => 'getEventDetails',
        'order_details' => 'getOrderDetails',
        'customer_details' => 'getCustomerDetails',
        'payment_details' => 'getPaymentDetails',
        'settlement_details' => 'getSettlementDetails',
        'dispute_details' => 'getDisputeDetails',
        'refund_details' => 'getRefundDetails'
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
        $this->setIfExists('event_details', $data ?? [], null);
        $this->setIfExists('order_details', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
        $this->setIfExists('payment_details', $data ?? [], null);
        $this->setIfExists('settlement_details', $data ?? [], null);
        $this->setIfExists('dispute_details', $data ?? [], null);
        $this->setIfExists('refund_details', $data ?? [], null);
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
     * Gets event_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerEventDetails|null
     */
    public function getEventDetails()
    {
        return $this->container['event_details'];
    }

    /**
     * Sets event_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerEventDetails|null $event_details event_details
     *
     * @return self
     */
    public function setEventDetails($event_details)
    {
        if (is_null($event_details)) {
            throw new \InvalidArgumentException('non-nullable event_details cannot be null');
        }
        $this->container['event_details'] = $event_details;

        return $this;
    }

    /**
     * Gets order_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerOrderDetails|null
     */
    public function getOrderDetails()
    {
        return $this->container['order_details'];
    }

    /**
     * Sets order_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerOrderDetails|null $order_details order_details
     *
     * @return self
     */
    public function setOrderDetails($order_details)
    {
        if (is_null($order_details)) {
            throw new \InvalidArgumentException('non-nullable order_details cannot be null');
        }
        $this->container['order_details'] = $order_details;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerCustomerDetails|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerCustomerDetails|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        if (is_null($customer_details)) {
            throw new \InvalidArgumentException('non-nullable customer_details cannot be null');
        }
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets payment_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerPaymentDetails|null
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerPaymentDetails|null $payment_details payment_details
     *
     * @return self
     */
    public function setPaymentDetails($payment_details)
    {
        if (is_null($payment_details)) {
            throw new \InvalidArgumentException('non-nullable payment_details cannot be null');
        }
        $this->container['payment_details'] = $payment_details;

        return $this;
    }

    /**
     * Gets settlement_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerSettlementDetails|null
     */
    public function getSettlementDetails()
    {
        return $this->container['settlement_details'];
    }

    /**
     * Sets settlement_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerSettlementDetails|null $settlement_details settlement_details
     *
     * @return self
     */
    public function setSettlementDetails($settlement_details)
    {
        if (is_null($settlement_details)) {
            throw new \InvalidArgumentException('non-nullable settlement_details cannot be null');
        }
        $this->container['settlement_details'] = $settlement_details;

        return $this;
    }

    /**
     * Gets dispute_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerDisputeDetails|null
     */
    public function getDisputeDetails()
    {
        return $this->container['dispute_details'];
    }

    /**
     * Sets dispute_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerDisputeDetails|null $dispute_details dispute_details
     *
     * @return self
     */
    public function setDisputeDetails($dispute_details)
    {
        if (is_null($dispute_details)) {
            throw new \InvalidArgumentException('non-nullable dispute_details cannot be null');
        }
        $this->container['dispute_details'] = $dispute_details;

        return $this;
    }

    /**
     * Gets refund_details
     *
     * @return \Cashfree\Model\SettlementReconEntityDataInnerRefundDetails|null
     */
    public function getRefundDetails()
    {
        return $this->container['refund_details'];
    }

    /**
     * Sets refund_details
     *
     * @param \Cashfree\Model\SettlementReconEntityDataInnerRefundDetails|null $refund_details refund_details
     *
     * @return self
     */
    public function setRefundDetails($refund_details)
    {
        if (is_null($refund_details)) {
            throw new \InvalidArgumentException('non-nullable refund_details cannot be null');
        }
        $this->container['refund_details'] = $refund_details;

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


