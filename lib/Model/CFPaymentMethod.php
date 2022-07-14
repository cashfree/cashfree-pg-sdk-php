<?php
/**
 * CFPaymentMethod
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
 * CFPaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CFPaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CFPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card' => '\cashfree\Client\Model\CFCard',
        'upi' => '\cashfree\Client\Model\CFUPI',
        'netbanking' => '\cashfree\Client\Model\CFNetbanking',
        'app' => '\cashfree\Client\Model\CFApp',
        'emi' => '\cashfree\Client\Model\CFCardEMI',
        'cardless_emi' => '\cashfree\Client\Model\CFCardlessEMI',
        'paylater' => '\cashfree\Client\Model\CFPaylater'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card' => null,
        'upi' => null,
        'netbanking' => null,
        'app' => null,
        'emi' => null,
        'cardless_emi' => null,
        'paylater' => null
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
        'card' => 'card',
        'upi' => 'upi',
        'netbanking' => 'netbanking',
        'app' => 'app',
        'emi' => 'emi',
        'cardless_emi' => 'cardless_emi',
        'paylater' => 'paylater'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'upi' => 'setUpi',
        'netbanking' => 'setNetbanking',
        'app' => 'setApp',
        'emi' => 'setEmi',
        'cardless_emi' => 'setCardlessEmi',
        'paylater' => 'setPaylater'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'upi' => 'getUpi',
        'netbanking' => 'getNetbanking',
        'app' => 'getApp',
        'emi' => 'getEmi',
        'cardless_emi' => 'getCardlessEmi',
        'paylater' => 'getPaylater'
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
        $this->container['card'] = $data['card'] ?? null;
        $this->container['upi'] = $data['upi'] ?? null;
        $this->container['netbanking'] = $data['netbanking'] ?? null;
        $this->container['app'] = $data['app'] ?? null;
        $this->container['emi'] = $data['emi'] ?? null;
        $this->container['cardless_emi'] = $data['cardless_emi'] ?? null;
        $this->container['paylater'] = $data['paylater'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['card'] === null) {
            $invalidProperties[] = "'card' can't be null";
        }
        if ($this->container['upi'] === null) {
            $invalidProperties[] = "'upi' can't be null";
        }
        if ($this->container['netbanking'] === null) {
            $invalidProperties[] = "'netbanking' can't be null";
        }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
        if ($this->container['cardless_emi'] === null) {
            $invalidProperties[] = "'cardless_emi' can't be null";
        }
        if ($this->container['paylater'] === null) {
            $invalidProperties[] = "'paylater' can't be null";
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
     * Gets card
     *
     * @return \cashfree\Client\Model\CFCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \cashfree\Client\Model\CFCard $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets upi
     *
     * @return \cashfree\Client\Model\CFUPI
     */
    public function getUpi()
    {
        return $this->container['upi'];
    }

    /**
     * Sets upi
     *
     * @param \cashfree\Client\Model\CFUPI $upi upi
     *
     * @return self
     */
    public function setUpi($upi)
    {
        $this->container['upi'] = $upi;

        return $this;
    }

    /**
     * Gets netbanking
     *
     * @return \cashfree\Client\Model\CFNetbanking
     */
    public function getNetbanking()
    {
        return $this->container['netbanking'];
    }

    /**
     * Sets netbanking
     *
     * @param \cashfree\Client\Model\CFNetbanking $netbanking netbanking
     *
     * @return self
     */
    public function setNetbanking($netbanking)
    {
        $this->container['netbanking'] = $netbanking;

        return $this;
    }

    /**
     * Gets app
     *
     * @return \cashfree\Client\Model\CFApp
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \cashfree\Client\Model\CFApp $app app
     *
     * @return self
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets emi
     *
     * @return \cashfree\Client\Model\CFCardEMI|null
     */
    public function getEmi()
    {
        return $this->container['emi'];
    }

    /**
     * Sets emi
     *
     * @param \cashfree\Client\Model\CFCardEMI|null $emi emi
     *
     * @return self
     */
    public function setEmi($emi)
    {
        $this->container['emi'] = $emi;

        return $this;
    }

    /**
     * Gets cardless_emi
     *
     * @return \cashfree\Client\Model\CFCardlessEMI
     */
    public function getCardlessEmi()
    {
        return $this->container['cardless_emi'];
    }

    /**
     * Sets cardless_emi
     *
     * @param \cashfree\Client\Model\CFCardlessEMI $cardless_emi cardless_emi
     *
     * @return self
     */
    public function setCardlessEmi($cardless_emi)
    {
        $this->container['cardless_emi'] = $cardless_emi;

        return $this;
    }

    /**
     * Gets paylater
     *
     * @return \cashfree\Client\Model\CFPaylater
     */
    public function getPaylater()
    {
        return $this->container['paylater'];
    }

    /**
     * Sets paylater
     *
     * @param \cashfree\Client\Model\CFPaylater $paylater paylater
     *
     * @return self
     */
    public function setPaylater($paylater)
    {
        $this->container['paylater'] = $paylater;

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


