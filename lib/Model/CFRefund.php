<?php
/**
 * CFRefund
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

namespace cashfree\Client\Model;

use \ArrayAccess;
use \cashfree\Client\ObjectSerializer;

/**
 * CFRefund Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFRefund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cf_payment_id' => 'int',
        'cf_refund_id' => 'string',
        'order_id' => 'string',
        'refund_id' => 'string',
        'entity' => 'string',
        'refund_amount' => 'float',
        'refund_currency' => 'string',
        'refund_note' => 'string',
        'refund_status' => 'string',
        'refund_arn' => 'string',
        'refund_charge' => 'float',
        'status_description' => 'string',
        'metadata' => 'object',
        'refund_splits' => '\cashfree\Client\Model\CFVendorSplit[]',
        'refund_type' => 'string',
        'refund_mode' => 'string',
        'created_at' => 'string',
        'processed_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cf_payment_id' => null,
        'cf_refund_id' => null,
        'order_id' => null,
        'refund_id' => null,
        'entity' => null,
        'refund_amount' => null,
        'refund_currency' => null,
        'refund_note' => null,
        'refund_status' => null,
        'refund_arn' => null,
        'refund_charge' => null,
        'status_description' => null,
        'metadata' => null,
        'refund_splits' => null,
        'refund_type' => null,
        'refund_mode' => null,
        'created_at' => null,
        'processed_at' => null
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
        'cf_payment_id' => 'cf_payment_id',
        'cf_refund_id' => 'cf_refund_id',
        'order_id' => 'order_id',
        'refund_id' => 'refund_id',
        'entity' => 'entity',
        'refund_amount' => 'refund_amount',
        'refund_currency' => 'refund_currency',
        'refund_note' => 'refund_note',
        'refund_status' => 'refund_status',
        'refund_arn' => 'refund_arn',
        'refund_charge' => 'refund_charge',
        'status_description' => 'status_description',
        'metadata' => 'metadata',
        'refund_splits' => 'refund_splits',
        'refund_type' => 'refund_type',
        'refund_mode' => 'refund_mode',
        'created_at' => 'created_at',
        'processed_at' => 'processed_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cf_payment_id' => 'setCfPaymentId',
        'cf_refund_id' => 'setCfRefundId',
        'order_id' => 'setOrderId',
        'refund_id' => 'setRefundId',
        'entity' => 'setEntity',
        'refund_amount' => 'setRefundAmount',
        'refund_currency' => 'setRefundCurrency',
        'refund_note' => 'setRefundNote',
        'refund_status' => 'setRefundStatus',
        'refund_arn' => 'setRefundArn',
        'refund_charge' => 'setRefundCharge',
        'status_description' => 'setStatusDescription',
        'metadata' => 'setMetadata',
        'refund_splits' => 'setRefundSplits',
        'refund_type' => 'setRefundType',
        'refund_mode' => 'setRefundMode',
        'created_at' => 'setCreatedAt',
        'processed_at' => 'setProcessedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cf_payment_id' => 'getCfPaymentId',
        'cf_refund_id' => 'getCfRefundId',
        'order_id' => 'getOrderId',
        'refund_id' => 'getRefundId',
        'entity' => 'getEntity',
        'refund_amount' => 'getRefundAmount',
        'refund_currency' => 'getRefundCurrency',
        'refund_note' => 'getRefundNote',
        'refund_status' => 'getRefundStatus',
        'refund_arn' => 'getRefundArn',
        'refund_charge' => 'getRefundCharge',
        'status_description' => 'getStatusDescription',
        'metadata' => 'getMetadata',
        'refund_splits' => 'getRefundSplits',
        'refund_type' => 'getRefundType',
        'refund_mode' => 'getRefundMode',
        'created_at' => 'getCreatedAt',
        'processed_at' => 'getProcessedAt'
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

    const ENTITY_REFUND = 'refund';
    const REFUND_STATUS_SUCCESS = 'SUCCESS';
    const REFUND_STATUS_PENDING = 'PENDING';
    const REFUND_STATUS_CANCELLED = 'CANCELLED';
    const REFUND_STATUS_ONHOLD = 'ONHOLD';
    const REFUND_TYPE_PAYMENT_AUTO_REFUND = 'PAYMENT_AUTO_REFUND';
    const REFUND_TYPE_MERCHANT_INITIATED = 'MERCHANT_INITIATED';
    const REFUND_TYPE_UNRECONCILED_AUTO_REFUND = 'UNRECONCILED_AUTO_REFUND';
    const REFUND_MODE_STANDARD = 'STANDARD';
    const REFUND_MODE_INSTANT = 'INSTANT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityAllowableValues()
    {
        return [
            self::ENTITY_REFUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundStatusAllowableValues()
    {
        return [
            self::REFUND_STATUS_SUCCESS,
            self::REFUND_STATUS_PENDING,
            self::REFUND_STATUS_CANCELLED,
            self::REFUND_STATUS_ONHOLD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundTypeAllowableValues()
    {
        return [
            self::REFUND_TYPE_PAYMENT_AUTO_REFUND,
            self::REFUND_TYPE_MERCHANT_INITIATED,
            self::REFUND_TYPE_UNRECONCILED_AUTO_REFUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundModeAllowableValues()
    {
        return [
            self::REFUND_MODE_STANDARD,
            self::REFUND_MODE_INSTANT,
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
        $this->container['cf_payment_id'] = $data['cf_payment_id'] ?? null;
        $this->container['cf_refund_id'] = $data['cf_refund_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['refund_id'] = $data['refund_id'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['refund_amount'] = $data['refund_amount'] ?? null;
        $this->container['refund_currency'] = $data['refund_currency'] ?? null;
        $this->container['refund_note'] = $data['refund_note'] ?? null;
        $this->container['refund_status'] = $data['refund_status'] ?? null;
        $this->container['refund_arn'] = $data['refund_arn'] ?? null;
        $this->container['refund_charge'] = $data['refund_charge'] ?? null;
        $this->container['status_description'] = $data['status_description'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['refund_splits'] = $data['refund_splits'] ?? null;
        $this->container['refund_type'] = $data['refund_type'] ?? null;
        $this->container['refund_mode'] = $data['refund_mode'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['processed_at'] = $data['processed_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEntityAllowableValues();
        if (!is_null($this->container['entity']) && !in_array($this->container['entity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entity', must be one of '%s'",
                $this->container['entity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRefundStatusAllowableValues();
        if (!is_null($this->container['refund_status']) && !in_array($this->container['refund_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_status', must be one of '%s'",
                $this->container['refund_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!is_null($this->container['refund_type']) && !in_array($this->container['refund_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_type', must be one of '%s'",
                $this->container['refund_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRefundModeAllowableValues();
        if (!is_null($this->container['refund_mode']) && !in_array($this->container['refund_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_mode', must be one of '%s'",
                $this->container['refund_mode'],
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
     * Gets cf_payment_id
     *
     * @return int|null
     */
    public function getCfPaymentId()
    {
        return $this->container['cf_payment_id'];
    }

    /**
     * Sets cf_payment_id
     *
     * @param int|null $cf_payment_id Cashfree Payments ID of the payment for which refund is initiated
     *
     * @return self
     */
    public function setCfPaymentId($cf_payment_id)
    {
        $this->container['cf_payment_id'] = $cf_payment_id;

        return $this;
    }

    /**
     * Gets cf_refund_id
     *
     * @return string|null
     */
    public function getCfRefundId()
    {
        return $this->container['cf_refund_id'];
    }

    /**
     * Sets cf_refund_id
     *
     * @param string|null $cf_refund_id Cashfree Payments ID for a refund
     *
     * @return self
     */
    public function setCfRefundId($cf_refund_id)
    {
        $this->container['cf_refund_id'] = $cf_refund_id;

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
     * @param string|null $order_id Merchant’s order Id of the order for which refund is initiated
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string|null
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string|null $refund_id Merchant’s refund ID of the refund
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

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
     * @param string|null $entity Type of object
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $allowedValues = $this->getEntityAllowableValues();
        if (!is_null($entity) && !in_array($entity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entity', must be one of '%s'",
                    $entity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return float|null
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param float|null $refund_amount Amount that is refunded
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets refund_currency
     *
     * @return string|null
     */
    public function getRefundCurrency()
    {
        return $this->container['refund_currency'];
    }

    /**
     * Sets refund_currency
     *
     * @param string|null $refund_currency Currency of the refund amount
     *
     * @return self
     */
    public function setRefundCurrency($refund_currency)
    {
        $this->container['refund_currency'] = $refund_currency;

        return $this;
    }

    /**
     * Gets refund_note
     *
     * @return string|null
     */
    public function getRefundNote()
    {
        return $this->container['refund_note'];
    }

    /**
     * Sets refund_note
     *
     * @param string|null $refund_note Note added by merchant for the refund
     *
     * @return self
     */
    public function setRefundNote($refund_note)
    {
        $this->container['refund_note'] = $refund_note;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param string|null $refund_status This can be one of [\"SUCCESS\", \"PENDING\", \"CANCELLED\", \"ONHOLD\"]
     *
     * @return self
     */
    public function setRefundStatus($refund_status)
    {
        $allowedValues = $this->getRefundStatusAllowableValues();
        if (!is_null($refund_status) && !in_array($refund_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_status', must be one of '%s'",
                    $refund_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_status'] = $refund_status;

        return $this;
    }

    /**
     * Gets refund_arn
     *
     * @return string|null
     */
    public function getRefundArn()
    {
        return $this->container['refund_arn'];
    }

    /**
     * Sets refund_arn
     *
     * @param string|null $refund_arn The bank reference number for refund
     *
     * @return self
     */
    public function setRefundArn($refund_arn)
    {
        $this->container['refund_arn'] = $refund_arn;

        return $this;
    }

    /**
     * Gets refund_charge
     *
     * @return float|null
     */
    public function getRefundCharge()
    {
        return $this->container['refund_charge'];
    }

    /**
     * Sets refund_charge
     *
     * @param float|null $refund_charge Charges in INR for processing refund
     *
     * @return self
     */
    public function setRefundCharge($refund_charge)
    {
        $this->container['refund_charge'] = $refund_charge;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string|null $status_description Description of refund status
     *
     * @return self
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Key-value pair that can be used to store additional information about the entity. Maximum 5 key-value pairs
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets refund_splits
     *
     * @return \cashfree\Client\Model\CFVendorSplit[]|null
     */
    public function getRefundSplits()
    {
        return $this->container['refund_splits'];
    }

    /**
     * Sets refund_splits
     *
     * @param \cashfree\Client\Model\CFVendorSplit[]|null $refund_splits refund_splits
     *
     * @return self
     */
    public function setRefundSplits($refund_splits)
    {
        $this->container['refund_splits'] = $refund_splits;

        return $this;
    }

    /**
     * Gets refund_type
     *
     * @return string|null
     */
    public function getRefundType()
    {
        return $this->container['refund_type'];
    }

    /**
     * Sets refund_type
     *
     * @param string|null $refund_type This can be one of [\"PAYMENT_AUTO_REFUND\", \"MERCHANT_INITIATED\", \"UNRECONCILED_AUTO_REFUND\"]
     *
     * @return self
     */
    public function setRefundType($refund_type)
    {
        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!is_null($refund_type) && !in_array($refund_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_type', must be one of '%s'",
                    $refund_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_type'] = $refund_type;

        return $this;
    }

    /**
     * Gets refund_mode
     *
     * @return string|null
     */
    public function getRefundMode()
    {
        return $this->container['refund_mode'];
    }

    /**
     * Sets refund_mode
     *
     * @param string|null $refund_mode Method or speed of processing refund
     *
     * @return self
     */
    public function setRefundMode($refund_mode)
    {
        $allowedValues = $this->getRefundModeAllowableValues();
        if (!is_null($refund_mode) && !in_array($refund_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_mode', must be one of '%s'",
                    $refund_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_mode'] = $refund_mode;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Time of refund creation
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets processed_at
     *
     * @return string|null
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     *
     * @param string|null $processed_at Time when refund was processed successfully
     *
     * @return self
     */
    public function setProcessedAt($processed_at)
    {
        $this->container['processed_at'] = $processed_at;

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


