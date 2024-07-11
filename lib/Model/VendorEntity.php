<?php
/**
 * VendorEntity
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
 * VendorEntity Class Doc Comment
 *
 * @category Class
 * @description Vendor entity object
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VendorEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VendorEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'status' => 'string',
        'phone' => 'string',
        'name' => 'string',
        'vendor_id' => 'string',
        'added_on' => 'string',
        'updated_on' => 'string',
        'bank' => '\Cashfree\Model\BankDetails[]',
        'upi' => 'string',
        'schedule_option' => '\Cashfree\Model\ScheduleOption[]',
        'vendor_type' => 'string',
        'account_type' => 'string',
        'business_type' => 'string',
        'remarks' => 'string',
        'related_docs' => '\Cashfree\Model\UpdateVendorResponseRelatedDocsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'status' => null,
        'phone' => null,
        'name' => null,
        'vendor_id' => null,
        'added_on' => null,
        'updated_on' => null,
        'bank' => null,
        'upi' => null,
        'schedule_option' => null,
        'vendor_type' => null,
        'account_type' => null,
        'business_type' => null,
        'remarks' => null,
        'related_docs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'email' => false,
		'status' => false,
		'phone' => false,
		'name' => false,
		'vendor_id' => false,
		'added_on' => false,
		'updated_on' => false,
		'bank' => false,
		'upi' => false,
		'schedule_option' => false,
		'vendor_type' => false,
		'account_type' => false,
		'business_type' => false,
		'remarks' => false,
		'related_docs' => false
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
        'email' => 'email',
        'status' => 'status',
        'phone' => 'phone',
        'name' => 'name',
        'vendor_id' => 'vendor_id',
        'added_on' => 'added_on',
        'updated_on' => 'updated_on',
        'bank' => 'bank',
        'upi' => 'upi',
        'schedule_option' => 'schedule_option',
        'vendor_type' => 'vendor_type',
        'account_type' => 'account_type',
        'business_type' => 'business_type',
        'remarks' => 'remarks',
        'related_docs' => 'related_docs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'status' => 'setStatus',
        'phone' => 'setPhone',
        'name' => 'setName',
        'vendor_id' => 'setVendorId',
        'added_on' => 'setAddedOn',
        'updated_on' => 'setUpdatedOn',
        'bank' => 'setBank',
        'upi' => 'setUpi',
        'schedule_option' => 'setScheduleOption',
        'vendor_type' => 'setVendorType',
        'account_type' => 'setAccountType',
        'business_type' => 'setBusinessType',
        'remarks' => 'setRemarks',
        'related_docs' => 'setRelatedDocs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'status' => 'getStatus',
        'phone' => 'getPhone',
        'name' => 'getName',
        'vendor_id' => 'getVendorId',
        'added_on' => 'getAddedOn',
        'updated_on' => 'getUpdatedOn',
        'bank' => 'getBank',
        'upi' => 'getUpi',
        'schedule_option' => 'getScheduleOption',
        'vendor_type' => 'getVendorType',
        'account_type' => 'getAccountType',
        'business_type' => 'getBusinessType',
        'remarks' => 'getRemarks',
        'related_docs' => 'getRelatedDocs'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('vendor_id', $data ?? [], null);
        $this->setIfExists('added_on', $data ?? [], null);
        $this->setIfExists('updated_on', $data ?? [], null);
        $this->setIfExists('bank', $data ?? [], null);
        $this->setIfExists('upi', $data ?? [], null);
        $this->setIfExists('schedule_option', $data ?? [], null);
        $this->setIfExists('vendor_type', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('business_type', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('related_docs', $data ?? [], null);
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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
     * @param string|null $status status
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
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return string|null
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string|null $vendor_id vendor_id
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {
        if (is_null($vendor_id)) {
            throw new \InvalidArgumentException('non-nullable vendor_id cannot be null');
        }
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets added_on
     *
     * @return string|null
     */
    public function getAddedOn()
    {
        return $this->container['added_on'];
    }

    /**
     * Sets added_on
     *
     * @param string|null $added_on added_on
     *
     * @return self
     */
    public function setAddedOn($added_on)
    {
        if (is_null($added_on)) {
            throw new \InvalidArgumentException('non-nullable added_on cannot be null');
        }
        $this->container['added_on'] = $added_on;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return string|null
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param string|null $updated_on updated_on
     *
     * @return self
     */
    public function setUpdatedOn($updated_on)
    {
        if (is_null($updated_on)) {
            throw new \InvalidArgumentException('non-nullable updated_on cannot be null');
        }
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return \Cashfree\Model\BankDetails[]|null
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param \Cashfree\Model\BankDetails[]|null $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        if (is_null($bank)) {
            throw new \InvalidArgumentException('non-nullable bank cannot be null');
        }
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets upi
     *
     * @return string|null
     */
    public function getUpi()
    {
        return $this->container['upi'];
    }

    /**
     * Sets upi
     *
     * @param string|null $upi upi
     *
     * @return self
     */
    public function setUpi($upi)
    {
        if (is_null($upi)) {
            throw new \InvalidArgumentException('non-nullable upi cannot be null');
        }
        $this->container['upi'] = $upi;

        return $this;
    }

    /**
     * Gets schedule_option
     *
     * @return \Cashfree\Model\ScheduleOption[]|null
     */
    public function getScheduleOption()
    {
        return $this->container['schedule_option'];
    }

    /**
     * Sets schedule_option
     *
     * @param \Cashfree\Model\ScheduleOption[]|null $schedule_option schedule_option
     *
     * @return self
     */
    public function setScheduleOption($schedule_option)
    {
        if (is_null($schedule_option)) {
            throw new \InvalidArgumentException('non-nullable schedule_option cannot be null');
        }
        $this->container['schedule_option'] = $schedule_option;

        return $this;
    }

    /**
     * Gets vendor_type
     *
     * @return string|null
     */
    public function getVendorType()
    {
        return $this->container['vendor_type'];
    }

    /**
     * Sets vendor_type
     *
     * @param string|null $vendor_type vendor_type
     *
     * @return self
     */
    public function setVendorType($vendor_type)
    {
        if (is_null($vendor_type)) {
            throw new \InvalidArgumentException('non-nullable vendor_type cannot be null');
        }
        $this->container['vendor_type'] = $vendor_type;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string|null
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string|null $business_type business_type
     *
     * @return self
     */
    public function setBusinessType($business_type)
    {
        if (is_null($business_type)) {
            throw new \InvalidArgumentException('non-nullable business_type cannot be null');
        }
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        if (is_null($remarks)) {
            throw new \InvalidArgumentException('non-nullable remarks cannot be null');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets related_docs
     *
     * @return \Cashfree\Model\UpdateVendorResponseRelatedDocsInner[]|null
     */
    public function getRelatedDocs()
    {
        return $this->container['related_docs'];
    }

    /**
     * Sets related_docs
     *
     * @param \Cashfree\Model\UpdateVendorResponseRelatedDocsInner[]|null $related_docs related_docs
     *
     * @return self
     */
    public function setRelatedDocs($related_docs)
    {
        if (is_null($related_docs)) {
            throw new \InvalidArgumentException('non-nullable related_docs cannot be null');
        }
        $this->container['related_docs'] = $related_docs;

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


