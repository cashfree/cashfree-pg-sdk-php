<?php
/**
 * CreateSubscriptionPaymentRequestPaymentMethod
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
 * CreateSubscriptionPaymentRequestPaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Payment method. Can be one of [\&quot;upi\&quot;, \&quot;enach\&quot;, \&quot;pnach\&quot;, \&quot;card\&quot;]
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubscriptionPaymentRequestPaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionPaymentRequest_payment_method';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'upi_id' => 'string',
        'account_bank_code' => 'string',
        'account_holder_name' => 'string',
        'account_ifsc' => 'string',
        'account_number' => 'string',
        'account_type' => 'string',
        'auth_mode' => 'string',
        'mandate_creation_date' => 'string',
        'mandate_start_date' => 'string',
        'card_cvv' => 'string',
        'card_expiry_mm' => 'string',
        'card_expiry_yy' => 'string',
        'card_holder_name' => 'string',
        'card_network' => 'string',
        'card_number' => 'string',
        'card_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'upi_id' => null,
        'account_bank_code' => null,
        'account_holder_name' => null,
        'account_ifsc' => null,
        'account_number' => null,
        'account_type' => null,
        'auth_mode' => null,
        'mandate_creation_date' => null,
        'mandate_start_date' => null,
        'card_cvv' => null,
        'card_expiry_mm' => null,
        'card_expiry_yy' => null,
        'card_holder_name' => null,
        'card_network' => null,
        'card_number' => null,
        'card_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'channel' => false,
		'upi_id' => false,
		'account_bank_code' => false,
		'account_holder_name' => false,
		'account_ifsc' => false,
		'account_number' => false,
		'account_type' => false,
		'auth_mode' => false,
		'mandate_creation_date' => false,
		'mandate_start_date' => false,
		'card_cvv' => false,
		'card_expiry_mm' => false,
		'card_expiry_yy' => false,
		'card_holder_name' => false,
		'card_network' => false,
		'card_number' => false,
		'card_type' => false
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
        'channel' => 'channel',
        'upi_id' => 'upi_id',
        'account_bank_code' => 'account_bank_code',
        'account_holder_name' => 'account_holder_name',
        'account_ifsc' => 'account_ifsc',
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'auth_mode' => 'auth_mode',
        'mandate_creation_date' => 'mandate_creation_date',
        'mandate_start_date' => 'mandate_start_date',
        'card_cvv' => 'card_cvv',
        'card_expiry_mm' => 'card_expiry_mm',
        'card_expiry_yy' => 'card_expiry_yy',
        'card_holder_name' => 'card_holder_name',
        'card_network' => 'card_network',
        'card_number' => 'card_number',
        'card_type' => 'card_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'upi_id' => 'setUpiId',
        'account_bank_code' => 'setAccountBankCode',
        'account_holder_name' => 'setAccountHolderName',
        'account_ifsc' => 'setAccountIfsc',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'auth_mode' => 'setAuthMode',
        'mandate_creation_date' => 'setMandateCreationDate',
        'mandate_start_date' => 'setMandateStartDate',
        'card_cvv' => 'setCardCvv',
        'card_expiry_mm' => 'setCardExpiryMm',
        'card_expiry_yy' => 'setCardExpiryYy',
        'card_holder_name' => 'setCardHolderName',
        'card_network' => 'setCardNetwork',
        'card_number' => 'setCardNumber',
        'card_type' => 'setCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'upi_id' => 'getUpiId',
        'account_bank_code' => 'getAccountBankCode',
        'account_holder_name' => 'getAccountHolderName',
        'account_ifsc' => 'getAccountIfsc',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'auth_mode' => 'getAuthMode',
        'mandate_creation_date' => 'getMandateCreationDate',
        'mandate_start_date' => 'getMandateStartDate',
        'card_cvv' => 'getCardCvv',
        'card_expiry_mm' => 'getCardExpiryMm',
        'card_expiry_yy' => 'getCardExpiryYy',
        'card_holder_name' => 'getCardHolderName',
        'card_network' => 'getCardNetwork',
        'card_number' => 'getCardNumber',
        'card_type' => 'getCardType'
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
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('upi_id', $data ?? [], null);
        $this->setIfExists('account_bank_code', $data ?? [], null);
        $this->setIfExists('account_holder_name', $data ?? [], null);
        $this->setIfExists('account_ifsc', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('auth_mode', $data ?? [], null);
        $this->setIfExists('mandate_creation_date', $data ?? [], null);
        $this->setIfExists('mandate_start_date', $data ?? [], null);
        $this->setIfExists('card_cvv', $data ?? [], null);
        $this->setIfExists('card_expiry_mm', $data ?? [], null);
        $this->setIfExists('card_expiry_yy', $data ?? [], null);
        $this->setIfExists('card_holder_name', $data ?? [], null);
        $this->setIfExists('card_network', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
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
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel Channel. can be link
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets upi_id
     *
     * @return string|null
     */
    public function getUpiId()
    {
        return $this->container['upi_id'];
    }

    /**
     * Sets upi_id
     *
     * @param string|null $upi_id upi_id
     *
     * @return self
     */
    public function setUpiId($upi_id)
    {
        if (is_null($upi_id)) {
            throw new \InvalidArgumentException('non-nullable upi_id cannot be null');
        }
        $this->container['upi_id'] = $upi_id;

        return $this;
    }

    /**
     * Gets account_bank_code
     *
     * @return string|null
     */
    public function getAccountBankCode()
    {
        return $this->container['account_bank_code'];
    }

    /**
     * Sets account_bank_code
     *
     * @param string|null $account_bank_code Account bank code
     *
     * @return self
     */
    public function setAccountBankCode($account_bank_code)
    {
        if (is_null($account_bank_code)) {
            throw new \InvalidArgumentException('non-nullable account_bank_code cannot be null');
        }
        $this->container['account_bank_code'] = $account_bank_code;

        return $this;
    }

    /**
     * Gets account_holder_name
     *
     * @return string|null
     */
    public function getAccountHolderName()
    {
        return $this->container['account_holder_name'];
    }

    /**
     * Sets account_holder_name
     *
     * @param string|null $account_holder_name Account holder name
     *
     * @return self
     */
    public function setAccountHolderName($account_holder_name)
    {
        if (is_null($account_holder_name)) {
            throw new \InvalidArgumentException('non-nullable account_holder_name cannot be null');
        }
        $this->container['account_holder_name'] = $account_holder_name;

        return $this;
    }

    /**
     * Gets account_ifsc
     *
     * @return string|null
     */
    public function getAccountIfsc()
    {
        return $this->container['account_ifsc'];
    }

    /**
     * Sets account_ifsc
     *
     * @param string|null $account_ifsc Account IFSC
     *
     * @return self
     */
    public function setAccountIfsc($account_ifsc)
    {
        if (is_null($account_ifsc)) {
            throw new \InvalidArgumentException('non-nullable account_ifsc cannot be null');
        }
        $this->container['account_ifsc'] = $account_ifsc;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number Account number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

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
     * @param string|null $account_type Account type
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
     * Gets auth_mode
     *
     * @return string|null
     */
    public function getAuthMode()
    {
        return $this->container['auth_mode'];
    }

    /**
     * Sets auth_mode
     *
     * @param string|null $auth_mode Authentication mode. can be debit_card, aadhaar, or net_banking
     *
     * @return self
     */
    public function setAuthMode($auth_mode)
    {
        if (is_null($auth_mode)) {
            throw new \InvalidArgumentException('non-nullable auth_mode cannot be null');
        }
        $this->container['auth_mode'] = $auth_mode;

        return $this;
    }

    /**
     * Gets mandate_creation_date
     *
     * @return string|null
     */
    public function getMandateCreationDate()
    {
        return $this->container['mandate_creation_date'];
    }

    /**
     * Sets mandate_creation_date
     *
     * @param string|null $mandate_creation_date Mandate creation date
     *
     * @return self
     */
    public function setMandateCreationDate($mandate_creation_date)
    {
        if (is_null($mandate_creation_date)) {
            throw new \InvalidArgumentException('non-nullable mandate_creation_date cannot be null');
        }
        $this->container['mandate_creation_date'] = $mandate_creation_date;

        return $this;
    }

    /**
     * Gets mandate_start_date
     *
     * @return string|null
     */
    public function getMandateStartDate()
    {
        return $this->container['mandate_start_date'];
    }

    /**
     * Sets mandate_start_date
     *
     * @param string|null $mandate_start_date Mandate start date
     *
     * @return self
     */
    public function setMandateStartDate($mandate_start_date)
    {
        if (is_null($mandate_start_date)) {
            throw new \InvalidArgumentException('non-nullable mandate_start_date cannot be null');
        }
        $this->container['mandate_start_date'] = $mandate_start_date;

        return $this;
    }

    /**
     * Gets card_cvv
     *
     * @return string|null
     */
    public function getCardCvv()
    {
        return $this->container['card_cvv'];
    }

    /**
     * Sets card_cvv
     *
     * @param string|null $card_cvv Card CVV
     *
     * @return self
     */
    public function setCardCvv($card_cvv)
    {
        if (is_null($card_cvv)) {
            throw new \InvalidArgumentException('non-nullable card_cvv cannot be null');
        }
        $this->container['card_cvv'] = $card_cvv;

        return $this;
    }

    /**
     * Gets card_expiry_mm
     *
     * @return string|null
     */
    public function getCardExpiryMm()
    {
        return $this->container['card_expiry_mm'];
    }

    /**
     * Sets card_expiry_mm
     *
     * @param string|null $card_expiry_mm Card expiry month
     *
     * @return self
     */
    public function setCardExpiryMm($card_expiry_mm)
    {
        if (is_null($card_expiry_mm)) {
            throw new \InvalidArgumentException('non-nullable card_expiry_mm cannot be null');
        }
        $this->container['card_expiry_mm'] = $card_expiry_mm;

        return $this;
    }

    /**
     * Gets card_expiry_yy
     *
     * @return string|null
     */
    public function getCardExpiryYy()
    {
        return $this->container['card_expiry_yy'];
    }

    /**
     * Sets card_expiry_yy
     *
     * @param string|null $card_expiry_yy Card expiry year
     *
     * @return self
     */
    public function setCardExpiryYy($card_expiry_yy)
    {
        if (is_null($card_expiry_yy)) {
            throw new \InvalidArgumentException('non-nullable card_expiry_yy cannot be null');
        }
        $this->container['card_expiry_yy'] = $card_expiry_yy;

        return $this;
    }

    /**
     * Gets card_holder_name
     *
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string|null $card_holder_name Card holder name
     *
     * @return self
     */
    public function setCardHolderName($card_holder_name)
    {
        if (is_null($card_holder_name)) {
            throw new \InvalidArgumentException('non-nullable card_holder_name cannot be null');
        }
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets card_network
     *
     * @return string|null
     */
    public function getCardNetwork()
    {
        return $this->container['card_network'];
    }

    /**
     * Sets card_network
     *
     * @param string|null $card_network Card network
     *
     * @return self
     */
    public function setCardNetwork($card_network)
    {
        if (is_null($card_network)) {
            throw new \InvalidArgumentException('non-nullable card_network cannot be null');
        }
        $this->container['card_network'] = $card_network;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number Card number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        if (is_null($card_number)) {
            throw new \InvalidArgumentException('non-nullable card_number cannot be null');
        }
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type Card type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        if (is_null($card_type)) {
            throw new \InvalidArgumentException('non-nullable card_type cannot be null');
        }
        $this->container['card_type'] = $card_type;

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


