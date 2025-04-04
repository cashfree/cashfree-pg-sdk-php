<?php
/**
 * CreateTerminalRequest
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
 * CreateTerminalRequest Class Doc Comment
 *
 * @category Class
 * @description Request body to create a terminal
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateTerminalRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTerminalRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_id' => 'string',
        'terminal_phone_no' => 'string',
        'terminal_name' => 'string',
        'terminal_address' => 'string',
        'terminal_email' => 'string',
        'terminal_note' => 'string',
        'terminal_type' => 'string',
        'terminal_meta' => '\Cashfree\Model\CreateTerminalRequestTerminalMeta'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terminal_id' => null,
        'terminal_phone_no' => null,
        'terminal_name' => null,
        'terminal_address' => null,
        'terminal_email' => null,
        'terminal_note' => null,
        'terminal_type' => null,
        'terminal_meta' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'terminal_id' => false,
		'terminal_phone_no' => false,
		'terminal_name' => false,
		'terminal_address' => false,
		'terminal_email' => false,
		'terminal_note' => false,
		'terminal_type' => false,
		'terminal_meta' => false
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
        'terminal_id' => 'terminal_id',
        'terminal_phone_no' => 'terminal_phone_no',
        'terminal_name' => 'terminal_name',
        'terminal_address' => 'terminal_address',
        'terminal_email' => 'terminal_email',
        'terminal_note' => 'terminal_note',
        'terminal_type' => 'terminal_type',
        'terminal_meta' => 'terminal_meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_id' => 'setTerminalId',
        'terminal_phone_no' => 'setTerminalPhoneNo',
        'terminal_name' => 'setTerminalName',
        'terminal_address' => 'setTerminalAddress',
        'terminal_email' => 'setTerminalEmail',
        'terminal_note' => 'setTerminalNote',
        'terminal_type' => 'setTerminalType',
        'terminal_meta' => 'setTerminalMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_id' => 'getTerminalId',
        'terminal_phone_no' => 'getTerminalPhoneNo',
        'terminal_name' => 'getTerminalName',
        'terminal_address' => 'getTerminalAddress',
        'terminal_email' => 'getTerminalEmail',
        'terminal_note' => 'getTerminalNote',
        'terminal_type' => 'getTerminalType',
        'terminal_meta' => 'getTerminalMeta'
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
        $this->setIfExists('terminal_id', $data ?? [], null);
        $this->setIfExists('terminal_phone_no', $data ?? [], null);
        $this->setIfExists('terminal_name', $data ?? [], null);
        $this->setIfExists('terminal_address', $data ?? [], null);
        $this->setIfExists('terminal_email', $data ?? [], null);
        $this->setIfExists('terminal_note', $data ?? [], null);
        $this->setIfExists('terminal_type', $data ?? [], null);
        $this->setIfExists('terminal_meta', $data ?? [], null);
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

        if ($this->container['terminal_id'] === null) {
            $invalidProperties[] = "'terminal_id' can't be null";
        }
        if ((mb_strlen($this->container['terminal_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_id', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['terminal_id']) < 3)) {
            $invalidProperties[] = "invalid value for 'terminal_id', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['terminal_phone_no'] === null) {
            $invalidProperties[] = "'terminal_phone_no' can't be null";
        }
        if ((mb_strlen($this->container['terminal_phone_no']) > 10)) {
            $invalidProperties[] = "invalid value for 'terminal_phone_no', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['terminal_phone_no']) < 10)) {
            $invalidProperties[] = "invalid value for 'terminal_phone_no', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['terminal_name'] === null) {
            $invalidProperties[] = "'terminal_name' can't be null";
        }
        if ((mb_strlen($this->container['terminal_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['terminal_name']) < 3)) {
            $invalidProperties[] = "invalid value for 'terminal_name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['terminal_address']) && (mb_strlen($this->container['terminal_address']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_address', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['terminal_address']) && (mb_strlen($this->container['terminal_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_address', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['terminal_email'] === null) {
            $invalidProperties[] = "'terminal_email' can't be null";
        }
        if ((mb_strlen($this->container['terminal_email']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_email', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['terminal_email']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['terminal_note']) && (mb_strlen($this->container['terminal_note']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_note', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['terminal_note']) && (mb_strlen($this->container['terminal_note']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_note', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['terminal_type'] === null) {
            $invalidProperties[] = "'terminal_type' can't be null";
        }
        if ((mb_strlen($this->container['terminal_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'terminal_type', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['terminal_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_type', the character length must be bigger than or equal to 1.";
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
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id merchant’s internal terminal id
     *
     * @return self
     */
    public function setTerminalId($terminal_id)
    {
        if (is_null($terminal_id)) {
            throw new \InvalidArgumentException('non-nullable terminal_id cannot be null');
        }
        if ((mb_strlen($terminal_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_id when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_id) < 3)) {
            throw new \InvalidArgumentException('invalid length for $terminal_id when calling CreateTerminalRequest., must be bigger than or equal to 3.');
        }

        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets terminal_phone_no
     *
     * @return string
     */
    public function getTerminalPhoneNo()
    {
        return $this->container['terminal_phone_no'];
    }

    /**
     * Sets terminal_phone_no
     *
     * @param string $terminal_phone_no phone number assigned to the terminal
     *
     * @return self
     */
    public function setTerminalPhoneNo($terminal_phone_no)
    {
        if (is_null($terminal_phone_no)) {
            throw new \InvalidArgumentException('non-nullable terminal_phone_no cannot be null');
        }
        if ((mb_strlen($terminal_phone_no) > 10)) {
            throw new \InvalidArgumentException('invalid length for $terminal_phone_no when calling CreateTerminalRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($terminal_phone_no) < 10)) {
            throw new \InvalidArgumentException('invalid length for $terminal_phone_no when calling CreateTerminalRequest., must be bigger than or equal to 10.');
        }

        $this->container['terminal_phone_no'] = $terminal_phone_no;

        return $this;
    }

    /**
     * Gets terminal_name
     *
     * @return string
     */
    public function getTerminalName()
    {
        return $this->container['terminal_name'];
    }

    /**
     * Sets terminal_name
     *
     * @param string $terminal_name terminal name to be assigned by merchants
     *
     * @return self
     */
    public function setTerminalName($terminal_name)
    {
        if (is_null($terminal_name)) {
            throw new \InvalidArgumentException('non-nullable terminal_name cannot be null');
        }
        if ((mb_strlen($terminal_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_name when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $terminal_name when calling CreateTerminalRequest., must be bigger than or equal to 3.');
        }

        $this->container['terminal_name'] = $terminal_name;

        return $this;
    }

    /**
     * Gets terminal_address
     *
     * @return string|null
     */
    public function getTerminalAddress()
    {
        return $this->container['terminal_address'];
    }

    /**
     * Sets terminal_address
     *
     * @param string|null $terminal_address address of the terminal. required for STOREFRONT
     *
     * @return self
     */
    public function setTerminalAddress($terminal_address)
    {
        if (is_null($terminal_address)) {
            throw new \InvalidArgumentException('non-nullable terminal_address cannot be null');
        }
        if ((mb_strlen($terminal_address) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_address when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $terminal_address when calling CreateTerminalRequest., must be bigger than or equal to 1.');
        }

        $this->container['terminal_address'] = $terminal_address;

        return $this;
    }

    /**
     * Gets terminal_email
     *
     * @return string
     */
    public function getTerminalEmail()
    {
        return $this->container['terminal_email'];
    }

    /**
     * Sets terminal_email
     *
     * @param string $terminal_email terminal email ID of the AGENT/STOREFRONT assigned by merchants.
     *
     * @return self
     */
    public function setTerminalEmail($terminal_email)
    {
        if (is_null($terminal_email)) {
            throw new \InvalidArgumentException('non-nullable terminal_email cannot be null');
        }
        if ((mb_strlen($terminal_email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_email when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $terminal_email when calling CreateTerminalRequest., must be bigger than or equal to 1.');
        }

        $this->container['terminal_email'] = $terminal_email;

        return $this;
    }

    /**
     * Gets terminal_note
     *
     * @return string|null
     */
    public function getTerminalNote()
    {
        return $this->container['terminal_note'];
    }

    /**
     * Sets terminal_note
     *
     * @param string|null $terminal_note additional note for terminal
     *
     * @return self
     */
    public function setTerminalNote($terminal_note)
    {
        if (is_null($terminal_note)) {
            throw new \InvalidArgumentException('non-nullable terminal_note cannot be null');
        }
        if ((mb_strlen($terminal_note) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_note when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_note) < 1)) {
            throw new \InvalidArgumentException('invalid length for $terminal_note when calling CreateTerminalRequest., must be bigger than or equal to 1.');
        }

        $this->container['terminal_note'] = $terminal_note;

        return $this;
    }

    /**
     * Gets terminal_type
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->container['terminal_type'];
    }

    /**
     * Sets terminal_type
     *
     * @param string $terminal_type mention the terminal type. possible values - AGENT, STOREFRONT.
     *
     * @return self
     */
    public function setTerminalType($terminal_type)
    {
        if (is_null($terminal_type)) {
            throw new \InvalidArgumentException('non-nullable terminal_type cannot be null');
        }
        if ((mb_strlen($terminal_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $terminal_type when calling CreateTerminalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($terminal_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $terminal_type when calling CreateTerminalRequest., must be bigger than or equal to 1.');
        }

        $this->container['terminal_type'] = $terminal_type;

        return $this;
    }

    /**
     * Gets terminal_meta
     *
     * @return \Cashfree\Model\CreateTerminalRequestTerminalMeta|null
     */
    public function getTerminalMeta()
    {
        return $this->container['terminal_meta'];
    }

    /**
     * Sets terminal_meta
     *
     * @param \Cashfree\Model\CreateTerminalRequestTerminalMeta|null $terminal_meta terminal_meta
     *
     * @return self
     */
    public function setTerminalMeta($terminal_meta)
    {
        if (is_null($terminal_meta)) {
            throw new \InvalidArgumentException('non-nullable terminal_meta cannot be null');
        }
        $this->container['terminal_meta'] = $terminal_meta;

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


