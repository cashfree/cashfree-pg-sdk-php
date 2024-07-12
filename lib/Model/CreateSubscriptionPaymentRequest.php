<?php
/**
 * CreateSubscriptionPaymentRequest
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
 * CreateSubscriptionPaymentRequest Class Doc Comment
 *
 * @category Class
 * @description The request to be passed for the create subscription payment API.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubscriptionPaymentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subscription_id' => 'string',
        'subscription_session_id' => 'string',
        'payment_id' => 'string',
        'payment_amount' => 'float',
        'payment_schedule_date' => 'string',
        'payment_remarks' => 'string',
        'payment_type' => 'string',
        'payment_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subscription_id' => null,
        'subscription_session_id' => null,
        'payment_id' => null,
        'payment_amount' => 'float64',
        'payment_schedule_date' => null,
        'payment_remarks' => null,
        'payment_type' => null,
        'payment_method' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'subscription_id' => false,
		'subscription_session_id' => false,
		'payment_id' => false,
		'payment_amount' => false,
		'payment_schedule_date' => false,
		'payment_remarks' => false,
		'payment_type' => false,
		'payment_method' => false
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
        'subscription_id' => 'subscription_id',
        'subscription_session_id' => 'subscription_session_id',
        'payment_id' => 'payment_id',
        'payment_amount' => 'payment_amount',
        'payment_schedule_date' => 'payment_schedule_date',
        'payment_remarks' => 'payment_remarks',
        'payment_type' => 'payment_type',
        'payment_method' => 'payment_method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_id' => 'setSubscriptionId',
        'subscription_session_id' => 'setSubscriptionSessionId',
        'payment_id' => 'setPaymentId',
        'payment_amount' => 'setPaymentAmount',
        'payment_schedule_date' => 'setPaymentScheduleDate',
        'payment_remarks' => 'setPaymentRemarks',
        'payment_type' => 'setPaymentType',
        'payment_method' => 'setPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_id' => 'getSubscriptionId',
        'subscription_session_id' => 'getSubscriptionSessionId',
        'payment_id' => 'getPaymentId',
        'payment_amount' => 'getPaymentAmount',
        'payment_schedule_date' => 'getPaymentScheduleDate',
        'payment_remarks' => 'getPaymentRemarks',
        'payment_type' => 'getPaymentType',
        'payment_method' => 'getPaymentMethod'
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
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('subscription_session_id', $data ?? [], null);
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('payment_amount', $data ?? [], null);
        $this->setIfExists('payment_schedule_date', $data ?? [], null);
        $this->setIfExists('payment_remarks', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
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

        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if ($this->container['payment_id'] === null) {
            $invalidProperties[] = "'payment_id' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
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
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id A unique ID passed by merchant for identifying the subscription.
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        if (is_null($subscription_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_id cannot be null');
        }
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets subscription_session_id
     *
     * @return string|null
     */
    public function getSubscriptionSessionId()
    {
        return $this->container['subscription_session_id'];
    }

    /**
     * Sets subscription_session_id
     *
     * @param string|null $subscription_session_id Session ID for the subscription. Required only for Auth.
     *
     * @return self
     */
    public function setSubscriptionSessionId($subscription_session_id)
    {
        if (is_null($subscription_session_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_session_id cannot be null');
        }
        $this->container['subscription_session_id'] = $subscription_session_id;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string $payment_id A unique ID passed by merchant for identifying the subscription payment.
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
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
     * @param float|null $payment_amount The charge amount of the payment. Required in case of charge.
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
     * Gets payment_schedule_date
     *
     * @return string|null
     */
    public function getPaymentScheduleDate()
    {
        return $this->container['payment_schedule_date'];
    }

    /**
     * Sets payment_schedule_date
     *
     * @param string|null $payment_schedule_date The date on which the payment is scheduled to be processed. Required for UPI and CARD payment modes.
     *
     * @return self
     */
    public function setPaymentScheduleDate($payment_schedule_date)
    {
        if (is_null($payment_schedule_date)) {
            throw new \InvalidArgumentException('non-nullable payment_schedule_date cannot be null');
        }
        $this->container['payment_schedule_date'] = $payment_schedule_date;

        return $this;
    }

    /**
     * Gets payment_remarks
     *
     * @return string|null
     */
    public function getPaymentRemarks()
    {
        return $this->container['payment_remarks'];
    }

    /**
     * Sets payment_remarks
     *
     * @param string|null $payment_remarks Payment remarks.
     *
     * @return self
     */
    public function setPaymentRemarks($payment_remarks)
    {
        if (is_null($payment_remarks)) {
            throw new \InvalidArgumentException('non-nullable payment_remarks cannot be null');
        }
        $this->container['payment_remarks'] = $payment_remarks;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type Payment type. Can be AUTH or CHARGE.
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method Payment method. Can be upi or card or enach or pnach.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

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


