<?php
/**
 * CartItem
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
 * CartItem Class Doc Comment
 *
 * @category Class
 * @description Each item in the cart.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'string',
        'item_name' => 'string',
        'item_description' => 'string',
        'item_tags' => 'string[]',
        'item_details_url' => 'string',
        'item_image_url' => 'string',
        'item_original_unit_price' => 'float',
        'item_discounted_unit_price' => 'float',
        'item_currency' => 'string',
        'item_quantity' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_id' => null,
        'item_name' => null,
        'item_description' => null,
        'item_tags' => null,
        'item_details_url' => null,
        'item_image_url' => null,
        'item_original_unit_price' => 'double',
        'item_discounted_unit_price' => 'double',
        'item_currency' => null,
        'item_quantity' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'item_id' => false,
		'item_name' => false,
		'item_description' => false,
		'item_tags' => false,
		'item_details_url' => false,
		'item_image_url' => false,
		'item_original_unit_price' => false,
		'item_discounted_unit_price' => false,
		'item_currency' => false,
		'item_quantity' => false
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
        'item_id' => 'item_id',
        'item_name' => 'item_name',
        'item_description' => 'item_description',
        'item_tags' => 'item_tags',
        'item_details_url' => 'item_details_url',
        'item_image_url' => 'item_image_url',
        'item_original_unit_price' => 'item_original_unit_price',
        'item_discounted_unit_price' => 'item_discounted_unit_price',
        'item_currency' => 'item_currency',
        'item_quantity' => 'item_quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'item_name' => 'setItemName',
        'item_description' => 'setItemDescription',
        'item_tags' => 'setItemTags',
        'item_details_url' => 'setItemDetailsUrl',
        'item_image_url' => 'setItemImageUrl',
        'item_original_unit_price' => 'setItemOriginalUnitPrice',
        'item_discounted_unit_price' => 'setItemDiscountedUnitPrice',
        'item_currency' => 'setItemCurrency',
        'item_quantity' => 'setItemQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'item_name' => 'getItemName',
        'item_description' => 'getItemDescription',
        'item_tags' => 'getItemTags',
        'item_details_url' => 'getItemDetailsUrl',
        'item_image_url' => 'getItemImageUrl',
        'item_original_unit_price' => 'getItemOriginalUnitPrice',
        'item_discounted_unit_price' => 'getItemDiscountedUnitPrice',
        'item_currency' => 'getItemCurrency',
        'item_quantity' => 'getItemQuantity'
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
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('item_name', $data ?? [], null);
        $this->setIfExists('item_description', $data ?? [], null);
        $this->setIfExists('item_tags', $data ?? [], null);
        $this->setIfExists('item_details_url', $data ?? [], null);
        $this->setIfExists('item_image_url', $data ?? [], null);
        $this->setIfExists('item_original_unit_price', $data ?? [], null);
        $this->setIfExists('item_discounted_unit_price', $data ?? [], null);
        $this->setIfExists('item_currency', $data ?? [], null);
        $this->setIfExists('item_quantity', $data ?? [], null);
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
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id Unique identifier of the item
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string|null $item_name Name of the item
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        if (is_null($item_name)) {
            throw new \InvalidArgumentException('non-nullable item_name cannot be null');
        }
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description Description of the item
     *
     * @return self
     */
    public function setItemDescription($item_description)
    {
        if (is_null($item_description)) {
            throw new \InvalidArgumentException('non-nullable item_description cannot be null');
        }
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets item_tags
     *
     * @return string[]|null
     */
    public function getItemTags()
    {
        return $this->container['item_tags'];
    }

    /**
     * Sets item_tags
     *
     * @param string[]|null $item_tags Tags attached to that item
     *
     * @return self
     */
    public function setItemTags($item_tags)
    {
        if (is_null($item_tags)) {
            throw new \InvalidArgumentException('non-nullable item_tags cannot be null');
        }
        $this->container['item_tags'] = $item_tags;

        return $this;
    }

    /**
     * Gets item_details_url
     *
     * @return string|null
     */
    public function getItemDetailsUrl()
    {
        return $this->container['item_details_url'];
    }

    /**
     * Sets item_details_url
     *
     * @param string|null $item_details_url Item details url
     *
     * @return self
     */
    public function setItemDetailsUrl($item_details_url)
    {
        if (is_null($item_details_url)) {
            throw new \InvalidArgumentException('non-nullable item_details_url cannot be null');
        }
        $this->container['item_details_url'] = $item_details_url;

        return $this;
    }

    /**
     * Gets item_image_url
     *
     * @return string|null
     */
    public function getItemImageUrl()
    {
        return $this->container['item_image_url'];
    }

    /**
     * Sets item_image_url
     *
     * @param string|null $item_image_url Item image url
     *
     * @return self
     */
    public function setItemImageUrl($item_image_url)
    {
        if (is_null($item_image_url)) {
            throw new \InvalidArgumentException('non-nullable item_image_url cannot be null');
        }
        $this->container['item_image_url'] = $item_image_url;

        return $this;
    }

    /**
     * Gets item_original_unit_price
     *
     * @return float|null
     */
    public function getItemOriginalUnitPrice()
    {
        return $this->container['item_original_unit_price'];
    }

    /**
     * Sets item_original_unit_price
     *
     * @param float|null $item_original_unit_price Original price
     *
     * @return self
     */
    public function setItemOriginalUnitPrice($item_original_unit_price)
    {
        if (is_null($item_original_unit_price)) {
            throw new \InvalidArgumentException('non-nullable item_original_unit_price cannot be null');
        }
        $this->container['item_original_unit_price'] = $item_original_unit_price;

        return $this;
    }

    /**
     * Gets item_discounted_unit_price
     *
     * @return float|null
     */
    public function getItemDiscountedUnitPrice()
    {
        return $this->container['item_discounted_unit_price'];
    }

    /**
     * Sets item_discounted_unit_price
     *
     * @param float|null $item_discounted_unit_price Discounted Price
     *
     * @return self
     */
    public function setItemDiscountedUnitPrice($item_discounted_unit_price)
    {
        if (is_null($item_discounted_unit_price)) {
            throw new \InvalidArgumentException('non-nullable item_discounted_unit_price cannot be null');
        }
        $this->container['item_discounted_unit_price'] = $item_discounted_unit_price;

        return $this;
    }

    /**
     * Gets item_currency
     *
     * @return string|null
     */
    public function getItemCurrency()
    {
        return $this->container['item_currency'];
    }

    /**
     * Sets item_currency
     *
     * @param string|null $item_currency Currency of the item.
     *
     * @return self
     */
    public function setItemCurrency($item_currency)
    {
        if (is_null($item_currency)) {
            throw new \InvalidArgumentException('non-nullable item_currency cannot be null');
        }
        $this->container['item_currency'] = $item_currency;

        return $this;
    }

    /**
     * Gets item_quantity
     *
     * @return float|null
     */
    public function getItemQuantity()
    {
        return $this->container['item_quantity'];
    }

    /**
     * Sets item_quantity
     *
     * @param float|null $item_quantity Quantity if that item
     *
     * @return self
     */
    public function setItemQuantity($item_quantity)
    {
        if (is_null($item_quantity)) {
            throw new \InvalidArgumentException('non-nullable item_quantity cannot be null');
        }
        $this->container['item_quantity'] = $item_quantity;

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

