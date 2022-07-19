<?php
/**
 * CFOrder
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * New Payment Gateway APIs
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2022-01-01
 * Contact: nextgenapi@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CFOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cf_order_id' => 'int',
        'order_id' => 'string',
        'entity' => 'string',
        'order_currency' => 'string',
        'order_amount' => 'float',
        'order_status' => 'string',
        'order_token' => 'string',
        'order_expiry_time' => 'string',
        'order_note' => 'string',
        'payment_link' => 'string',
        'customer_details' => '\OpenAPI\Client\Model\CFCustomerDetails',
        'order_meta' => '\OpenAPI\Client\Model\CFOrderMeta',
        'payments' => '\OpenAPI\Client\Model\CFPaymentURLObject',
        'settlements' => '\OpenAPI\Client\Model\CFSettlementURLObject',
        'refunds' => '\OpenAPI\Client\Model\CFRefundURLObject',
        'order_splits' => 'mixed',
        'order_tags' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cf_order_id' => null,
        'order_id' => null,
        'entity' => null,
        'order_currency' => null,
        'order_amount' => null,
        'order_status' => null,
        'order_token' => null,
        'order_expiry_time' => null,
        'order_note' => null,
        'payment_link' => null,
        'customer_details' => null,
        'order_meta' => null,
        'payments' => null,
        'settlements' => null,
        'refunds' => null,
        'order_splits' => null,
        'order_tags' => null
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
        'cf_order_id' => 'cf_order_id',
        'order_id' => 'order_id',
        'entity' => 'entity',
        'order_currency' => 'order_currency',
        'order_amount' => 'order_amount',
        'order_status' => 'order_status',
        'order_token' => 'order_token',
        'order_expiry_time' => 'order_expiry_time',
        'order_note' => 'order_note',
        'payment_link' => 'payment_link',
        'customer_details' => 'customer_details',
        'order_meta' => 'order_meta',
        'payments' => 'payments',
        'settlements' => 'settlements',
        'refunds' => 'refunds',
        'order_splits' => 'order_splits',
        'order_tags' => 'order_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cf_order_id' => 'setCfOrderId',
        'order_id' => 'setOrderId',
        'entity' => 'setEntity',
        'order_currency' => 'setOrderCurrency',
        'order_amount' => 'setOrderAmount',
        'order_status' => 'setOrderStatus',
        'order_token' => 'setOrderToken',
        'order_expiry_time' => 'setOrderExpiryTime',
        'order_note' => 'setOrderNote',
        'payment_link' => 'setPaymentLink',
        'customer_details' => 'setCustomerDetails',
        'order_meta' => 'setOrderMeta',
        'payments' => 'setPayments',
        'settlements' => 'setSettlements',
        'refunds' => 'setRefunds',
        'order_splits' => 'setOrderSplits',
        'order_tags' => 'setOrderTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cf_order_id' => 'getCfOrderId',
        'order_id' => 'getOrderId',
        'entity' => 'getEntity',
        'order_currency' => 'getOrderCurrency',
        'order_amount' => 'getOrderAmount',
        'order_status' => 'getOrderStatus',
        'order_token' => 'getOrderToken',
        'order_expiry_time' => 'getOrderExpiryTime',
        'order_note' => 'getOrderNote',
        'payment_link' => 'getPaymentLink',
        'customer_details' => 'getCustomerDetails',
        'order_meta' => 'getOrderMeta',
        'payments' => 'getPayments',
        'settlements' => 'getSettlements',
        'refunds' => 'getRefunds',
        'order_splits' => 'getOrderSplits',
        'order_tags' => 'getOrderTags'
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
        $this->container['cf_order_id'] = $data['cf_order_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['order_currency'] = $data['order_currency'] ?? null;
        $this->container['order_amount'] = $data['order_amount'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['order_token'] = $data['order_token'] ?? null;
        $this->container['order_expiry_time'] = $data['order_expiry_time'] ?? null;
        $this->container['order_note'] = $data['order_note'] ?? null;
        $this->container['payment_link'] = $data['payment_link'] ?? null;
        $this->container['customer_details'] = $data['customer_details'] ?? null;
        $this->container['order_meta'] = $data['order_meta'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['settlements'] = $data['settlements'] ?? null;
        $this->container['refunds'] = $data['refunds'] ?? null;
        $this->container['order_splits'] = $data['order_splits'] ?? null;
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
     * Gets cf_order_id
     *
     * @return int|null
     */
    public function getCfOrderId()
    {
        return $this->container['cf_order_id'];
    }

    public function getOrderSplits()
    {
        return $this->container['order_splits'];
    }

    public function setOrderSplits($order_splits)
    {
        $this->container['order_splits'] = $order_splits;

        return $this;
    }

    public function getOrderTags()
    {
        return $this->container['order_tags'];
    }

    public function setOrderTags($order_tags)
    {
        $this->container['order_tags'] = $order_tags;

        return $this;
    }

    /**
     * Sets cf_order_id
     *
     * @param int|null $cf_order_id cf_order_id
     *
     * @return self
     */
    public function setCfOrderId($cf_order_id)
    {
        $this->container['cf_order_id'] = $cf_order_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return string|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets order_currency
     *
     * @return string|null
     */
    public function getOrderCurrency()
    {
        return $this->container['order_currency'];
    }

    /**
     * Sets order_currency
     *
     * @param string|null $order_currency order_currency
     *
     * @return self
     */
    public function setOrderCurrency($order_currency)
    {
        $this->container['order_currency'] = $order_currency;

        return $this;
    }

    /**
     * Gets order_amount
     *
     * @return float|null
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount
     *
     * @param float|null $order_amount order_amount
     *
     * @return self
     */
    public function setOrderAmount($order_amount)
    {
        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string|null $order_status order_status
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets order_token
     *
     * @return string|null
     */
    public function getOrderToken()
    {
        return $this->container['order_token'];
    }

    /**
     * Sets order_token
     *
     * @param string|null $order_token order_token
     *
     * @return self
     */
    public function setOrderToken($order_token)
    {
        $this->container['order_token'] = $order_token;

        return $this;
    }

    /**
     * Gets order_expiry_time
     *
     * @return string|null
     */
    public function getOrderExpiryTime()
    {
        return $this->container['order_expiry_time'];
    }

    /**
     * Sets order_expiry_time
     *
     * @param string|null $order_expiry_time order_expiry_time
     *
     * @return self
     */
    public function setOrderExpiryTime($order_expiry_time)
    {
        $this->container['order_expiry_time'] = $order_expiry_time;

        return $this;
    }

    /**
     * Gets order_note
     *
     * @return string|null
     */
    public function getOrderNote()
    {
        return $this->container['order_note'];
    }

    /**
     * Sets order_note
     *
     * @param string|null $order_note order_note
     *
     * @return self
     */
    public function setOrderNote($order_note)
    {
        $this->container['order_note'] = $order_note;

        return $this;
    }

    /**
     * Gets payment_link
     *
     * @return string|null
     */
    public function getPaymentLink()
    {
        return $this->container['payment_link'];
    }

    /**
     * Sets payment_link
     *
     * @param string|null $payment_link payment_link
     *
     * @return self
     */
    public function setPaymentLink($payment_link)
    {
        $this->container['payment_link'] = $payment_link;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \OpenAPI\Client\Model\CFCustomerDetails|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \OpenAPI\Client\Model\CFCustomerDetails|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets order_meta
     *
     * @return \OpenAPI\Client\Model\CFOrderMeta|null
     */
    public function getOrderMeta()
    {
        return $this->container['order_meta'];
    }

    /**
     * Sets order_meta
     *
     * @param \OpenAPI\Client\Model\CFOrderMeta|null $order_meta order_meta
     *
     * @return self
     */
    public function setOrderMeta($order_meta)
    {
        $this->container['order_meta'] = $order_meta;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\CFPaymentURLObject|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\CFPaymentURLObject|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets settlements
     *
     * @return \OpenAPI\Client\Model\CFSettlementURLObject|null
     */
    public function getSettlements()
    {
        return $this->container['settlements'];
    }

    /**
     * Sets settlements
     *
     * @param \OpenAPI\Client\Model\CFSettlementURLObject|null $settlements settlements
     *
     * @return self
     */
    public function setSettlements($settlements)
    {
        $this->container['settlements'] = $settlements;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \OpenAPI\Client\Model\CFRefundURLObject|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \OpenAPI\Client\Model\CFRefundURLObject|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


