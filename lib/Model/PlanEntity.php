<?php
/**
 * PlanEntity
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
 * PlanEntity Class Doc Comment
 *
 * @category Class
 * @description The response returned for Get, Create and Manage Plan APIs
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlanEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlanEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plan_currency' => 'string',
        'plan_id' => 'string',
        'plan_interval_type' => 'string',
        'plan_intervals' => 'int',
        'plan_max_amount' => 'float',
        'plan_max_cycles' => 'int',
        'plan_name' => 'string',
        'plan_note' => 'string',
        'plan_recurring_amount' => 'float',
        'plan_status' => 'string',
        'plan_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'plan_currency' => null,
        'plan_id' => null,
        'plan_interval_type' => null,
        'plan_intervals' => null,
        'plan_max_amount' => 'float64',
        'plan_max_cycles' => null,
        'plan_name' => null,
        'plan_note' => null,
        'plan_recurring_amount' => 'float64',
        'plan_status' => null,
        'plan_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'plan_currency' => false,
		'plan_id' => false,
		'plan_interval_type' => false,
		'plan_intervals' => false,
		'plan_max_amount' => false,
		'plan_max_cycles' => false,
		'plan_name' => false,
		'plan_note' => false,
		'plan_recurring_amount' => false,
		'plan_status' => false,
		'plan_type' => false
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
        'plan_currency' => 'plan_currency',
        'plan_id' => 'plan_id',
        'plan_interval_type' => 'plan_interval_type',
        'plan_intervals' => 'plan_intervals',
        'plan_max_amount' => 'plan_max_amount',
        'plan_max_cycles' => 'plan_max_cycles',
        'plan_name' => 'plan_name',
        'plan_note' => 'plan_note',
        'plan_recurring_amount' => 'plan_recurring_amount',
        'plan_status' => 'plan_status',
        'plan_type' => 'plan_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_currency' => 'setPlanCurrency',
        'plan_id' => 'setPlanId',
        'plan_interval_type' => 'setPlanIntervalType',
        'plan_intervals' => 'setPlanIntervals',
        'plan_max_amount' => 'setPlanMaxAmount',
        'plan_max_cycles' => 'setPlanMaxCycles',
        'plan_name' => 'setPlanName',
        'plan_note' => 'setPlanNote',
        'plan_recurring_amount' => 'setPlanRecurringAmount',
        'plan_status' => 'setPlanStatus',
        'plan_type' => 'setPlanType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_currency' => 'getPlanCurrency',
        'plan_id' => 'getPlanId',
        'plan_interval_type' => 'getPlanIntervalType',
        'plan_intervals' => 'getPlanIntervals',
        'plan_max_amount' => 'getPlanMaxAmount',
        'plan_max_cycles' => 'getPlanMaxCycles',
        'plan_name' => 'getPlanName',
        'plan_note' => 'getPlanNote',
        'plan_recurring_amount' => 'getPlanRecurringAmount',
        'plan_status' => 'getPlanStatus',
        'plan_type' => 'getPlanType'
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
        $this->setIfExists('plan_currency', $data ?? [], null);
        $this->setIfExists('plan_id', $data ?? [], null);
        $this->setIfExists('plan_interval_type', $data ?? [], null);
        $this->setIfExists('plan_intervals', $data ?? [], null);
        $this->setIfExists('plan_max_amount', $data ?? [], null);
        $this->setIfExists('plan_max_cycles', $data ?? [], null);
        $this->setIfExists('plan_name', $data ?? [], null);
        $this->setIfExists('plan_note', $data ?? [], null);
        $this->setIfExists('plan_recurring_amount', $data ?? [], null);
        $this->setIfExists('plan_status', $data ?? [], null);
        $this->setIfExists('plan_type', $data ?? [], null);
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
     * Gets plan_currency
     *
     * @return string|null
     */
    public function getPlanCurrency()
    {
        return $this->container['plan_currency'];
    }

    /**
     * Sets plan_currency
     *
     * @param string|null $plan_currency Currency for the plan.
     *
     * @return self
     */
    public function setPlanCurrency($plan_currency)
    {
        if (is_null($plan_currency)) {
            throw new \InvalidArgumentException('non-nullable plan_currency cannot be null');
        }
        $this->container['plan_currency'] = $plan_currency;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string|null $plan_id Plan ID provided by merchant.
     *
     * @return self
     */
    public function setPlanId($plan_id)
    {
        if (is_null($plan_id)) {
            throw new \InvalidArgumentException('non-nullable plan_id cannot be null');
        }
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets plan_interval_type
     *
     * @return string|null
     */
    public function getPlanIntervalType()
    {
        return $this->container['plan_interval_type'];
    }

    /**
     * Sets plan_interval_type
     *
     * @param string|null $plan_interval_type Interval type for the plan.
     *
     * @return self
     */
    public function setPlanIntervalType($plan_interval_type)
    {
        if (is_null($plan_interval_type)) {
            throw new \InvalidArgumentException('non-nullable plan_interval_type cannot be null');
        }
        $this->container['plan_interval_type'] = $plan_interval_type;

        return $this;
    }

    /**
     * Gets plan_intervals
     *
     * @return int|null
     */
    public function getPlanIntervals()
    {
        return $this->container['plan_intervals'];
    }

    /**
     * Sets plan_intervals
     *
     * @param int|null $plan_intervals Number of intervals for the plan.
     *
     * @return self
     */
    public function setPlanIntervals($plan_intervals)
    {
        if (is_null($plan_intervals)) {
            throw new \InvalidArgumentException('non-nullable plan_intervals cannot be null');
        }
        $this->container['plan_intervals'] = $plan_intervals;

        return $this;
    }

    /**
     * Gets plan_max_amount
     *
     * @return float|null
     */
    public function getPlanMaxAmount()
    {
        return $this->container['plan_max_amount'];
    }

    /**
     * Sets plan_max_amount
     *
     * @param float|null $plan_max_amount Maximum amount for the plan.
     *
     * @return self
     */
    public function setPlanMaxAmount($plan_max_amount)
    {
        if (is_null($plan_max_amount)) {
            throw new \InvalidArgumentException('non-nullable plan_max_amount cannot be null');
        }
        $this->container['plan_max_amount'] = $plan_max_amount;

        return $this;
    }

    /**
     * Gets plan_max_cycles
     *
     * @return int|null
     */
    public function getPlanMaxCycles()
    {
        return $this->container['plan_max_cycles'];
    }

    /**
     * Sets plan_max_cycles
     *
     * @param int|null $plan_max_cycles Maximum number of payment cycles for the plan.
     *
     * @return self
     */
    public function setPlanMaxCycles($plan_max_cycles)
    {
        if (is_null($plan_max_cycles)) {
            throw new \InvalidArgumentException('non-nullable plan_max_cycles cannot be null');
        }
        $this->container['plan_max_cycles'] = $plan_max_cycles;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string|null $plan_name Name of the plan.
     *
     * @return self
     */
    public function setPlanName($plan_name)
    {
        if (is_null($plan_name)) {
            throw new \InvalidArgumentException('non-nullable plan_name cannot be null');
        }
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_note
     *
     * @return string|null
     */
    public function getPlanNote()
    {
        return $this->container['plan_note'];
    }

    /**
     * Sets plan_note
     *
     * @param string|null $plan_note Note for the plan.
     *
     * @return self
     */
    public function setPlanNote($plan_note)
    {
        if (is_null($plan_note)) {
            throw new \InvalidArgumentException('non-nullable plan_note cannot be null');
        }
        $this->container['plan_note'] = $plan_note;

        return $this;
    }

    /**
     * Gets plan_recurring_amount
     *
     * @return float|null
     */
    public function getPlanRecurringAmount()
    {
        return $this->container['plan_recurring_amount'];
    }

    /**
     * Sets plan_recurring_amount
     *
     * @param float|null $plan_recurring_amount Recurring amount for the plan.
     *
     * @return self
     */
    public function setPlanRecurringAmount($plan_recurring_amount)
    {
        if (is_null($plan_recurring_amount)) {
            throw new \InvalidArgumentException('non-nullable plan_recurring_amount cannot be null');
        }
        $this->container['plan_recurring_amount'] = $plan_recurring_amount;

        return $this;
    }

    /**
     * Gets plan_status
     *
     * @return string|null
     */
    public function getPlanStatus()
    {
        return $this->container['plan_status'];
    }

    /**
     * Sets plan_status
     *
     * @param string|null $plan_status Status of the plan.
     *
     * @return self
     */
    public function setPlanStatus($plan_status)
    {
        if (is_null($plan_status)) {
            throw new \InvalidArgumentException('non-nullable plan_status cannot be null');
        }
        $this->container['plan_status'] = $plan_status;

        return $this;
    }

    /**
     * Gets plan_type
     *
     * @return string|null
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     *
     * @param string|null $plan_type Type of the plan.
     *
     * @return self
     */
    public function setPlanType($plan_type)
    {
        if (is_null($plan_type)) {
            throw new \InvalidArgumentException('non-nullable plan_type cannot be null');
        }
        $this->container['plan_type'] = $plan_type;

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


