<?php
/**
 * PaymentWebhookDataEntity
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
 * The version of the OpenAPI document: 2022-09-01
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
 * PaymentWebhookDataEntity Class Doc Comment
 *
 * @category Class
 * @description data entity in webhook
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentWebhookDataEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentWebhookDataEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order' => '\Cashfree\Model\PaymentWebhookOrderEntity',
        'payment' => '\Cashfree\Model\PaymentEntity',
        'customer_details' => '\Cashfree\Model\PaymentWebhookCustomerEntity',
        'error_details' => '\Cashfree\Model\PaymentWebhookErrorEntity',
        'payment_gateway_details' => '\Cashfree\Model\PaymentWebhookGatewayDetailsEntity',
        'payment_offers' => '\Cashfree\Model\OfferEntity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order' => null,
        'payment' => null,
        'customer_details' => null,
        'error_details' => null,
        'payment_gateway_details' => null,
        'payment_offers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order' => false,
		'payment' => false,
		'customer_details' => false,
		'error_details' => false,
		'payment_gateway_details' => false,
		'payment_offers' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'order' => 'order',
        'payment' => 'payment',
        'customer_details' => 'customer_details',
        'error_details' => 'error_details',
        'payment_gateway_details' => 'payment_gateway_details',
        'payment_offers' => 'payment_offers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'payment' => 'setPayment',
        'customer_details' => 'setCustomerDetails',
        'error_details' => 'setErrorDetails',
        'payment_gateway_details' => 'setPaymentGatewayDetails',
        'payment_offers' => 'setPaymentOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'payment' => 'getPayment',
        'customer_details' => 'getCustomerDetails',
        'error_details' => 'getErrorDetails',
        'payment_gateway_details' => 'getPaymentGatewayDetails',
        'payment_offers' => 'getPaymentOffers'
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
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
        $this->setIfExists('error_details', $data ?? [], null);
        $this->setIfExists('payment_gateway_details', $data ?? [], null);
        $this->setIfExists('payment_offers', $data ?? [], null);
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
     * Gets order
     *
     * @return \Cashfree\Model\PaymentWebhookOrderEntity|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Cashfree\Model\PaymentWebhookOrderEntity|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Cashfree\Model\PaymentEntity|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Cashfree\Model\PaymentEntity|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \Cashfree\Model\PaymentWebhookCustomerEntity|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \Cashfree\Model\PaymentWebhookCustomerEntity|null $customer_details customer_details
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
     * Gets error_details
     *
     * @return \Cashfree\Model\PaymentWebhookErrorEntity|null
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \Cashfree\Model\PaymentWebhookErrorEntity|null $error_details error_details
     *
     * @return self
     */
    public function setErrorDetails($error_details)
    {
        if (is_null($error_details)) {
            throw new \InvalidArgumentException('non-nullable error_details cannot be null');
        }
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets payment_gateway_details
     *
     * @return \Cashfree\Model\PaymentWebhookGatewayDetailsEntity|null
     */
    public function getPaymentGatewayDetails()
    {
        return $this->container['payment_gateway_details'];
    }

    /**
     * Sets payment_gateway_details
     *
     * @param \Cashfree\Model\PaymentWebhookGatewayDetailsEntity|null $payment_gateway_details payment_gateway_details
     *
     * @return self
     */
    public function setPaymentGatewayDetails($payment_gateway_details)
    {
        if (is_null($payment_gateway_details)) {
            throw new \InvalidArgumentException('non-nullable payment_gateway_details cannot be null');
        }
        $this->container['payment_gateway_details'] = $payment_gateway_details;

        return $this;
    }

    /**
     * Gets payment_offers
     *
     * @return \Cashfree\Model\OfferEntity[]|null
     */
    public function getPaymentOffers()
    {
        return $this->container['payment_offers'];
    }

    /**
     * Sets payment_offers
     *
     * @param \Cashfree\Model\OfferEntity[]|null $payment_offers payment_offers
     *
     * @return self
     */
    public function setPaymentOffers($payment_offers)
    {
        if (is_null($payment_offers)) {
            throw new \InvalidArgumentException('non-nullable payment_offers cannot be null');
        }
        $this->container['payment_offers'] = $payment_offers;

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


