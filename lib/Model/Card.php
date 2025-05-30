<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @description Card Payment method
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'card_number' => 'string',
        'card_holder_name' => 'string',
        'card_expiry_mm' => 'string',
        'card_expiry_yy' => 'string',
        'card_cvv' => 'string',
        'instrument_id' => 'string',
        'cryptogram' => 'string',
        'token_requestor_id' => 'string',
        'token_reference_id' => 'string',
        'token_type' => 'string',
        'card_display' => 'string',
        'card_alias' => 'string',
        'card_bank_name' => 'string',
        'address_line_one' => 'string',
        'address_line_two' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'state' => 'string',
        'state_code' => 'string',
        'emi_tenure' => 'int'
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
        'card_number' => null,
        'card_holder_name' => null,
        'card_expiry_mm' => null,
        'card_expiry_yy' => null,
        'card_cvv' => null,
        'instrument_id' => null,
        'cryptogram' => null,
        'token_requestor_id' => null,
        'token_reference_id' => null,
        'token_type' => null,
        'card_display' => null,
        'card_alias' => null,
        'card_bank_name' => null,
        'address_line_one' => null,
        'address_line_two' => null,
        'city' => null,
        'zip_code' => null,
        'country' => null,
        'country_code' => null,
        'state' => null,
        'state_code' => null,
        'emi_tenure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'channel' => false,
		'card_number' => false,
		'card_holder_name' => false,
		'card_expiry_mm' => false,
		'card_expiry_yy' => false,
		'card_cvv' => false,
		'instrument_id' => false,
		'cryptogram' => false,
		'token_requestor_id' => false,
		'token_reference_id' => false,
		'token_type' => false,
		'card_display' => false,
		'card_alias' => false,
		'card_bank_name' => false,
		'address_line_one' => false,
		'address_line_two' => false,
		'city' => false,
		'zip_code' => false,
		'country' => false,
		'country_code' => false,
		'state' => false,
		'state_code' => false,
		'emi_tenure' => false
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
        'card_number' => 'card_number',
        'card_holder_name' => 'card_holder_name',
        'card_expiry_mm' => 'card_expiry_mm',
        'card_expiry_yy' => 'card_expiry_yy',
        'card_cvv' => 'card_cvv',
        'instrument_id' => 'instrument_id',
        'cryptogram' => 'cryptogram',
        'token_requestor_id' => 'token_requestor_id',
        'token_reference_id' => 'token_reference_id',
        'token_type' => 'token_type',
        'card_display' => 'card_display',
        'card_alias' => 'card_alias',
        'card_bank_name' => 'card_bank_name',
        'address_line_one' => 'address_line_one',
        'address_line_two' => 'address_line_two',
        'city' => 'city',
        'zip_code' => 'zip_code',
        'country' => 'country',
        'country_code' => 'country_code',
        'state' => 'state',
        'state_code' => 'state_code',
        'emi_tenure' => 'emi_tenure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'card_number' => 'setCardNumber',
        'card_holder_name' => 'setCardHolderName',
        'card_expiry_mm' => 'setCardExpiryMm',
        'card_expiry_yy' => 'setCardExpiryYy',
        'card_cvv' => 'setCardCvv',
        'instrument_id' => 'setInstrumentId',
        'cryptogram' => 'setCryptogram',
        'token_requestor_id' => 'setTokenRequestorId',
        'token_reference_id' => 'setTokenReferenceId',
        'token_type' => 'setTokenType',
        'card_display' => 'setCardDisplay',
        'card_alias' => 'setCardAlias',
        'card_bank_name' => 'setCardBankName',
        'address_line_one' => 'setAddressLineOne',
        'address_line_two' => 'setAddressLineTwo',
        'city' => 'setCity',
        'zip_code' => 'setZipCode',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'state' => 'setState',
        'state_code' => 'setStateCode',
        'emi_tenure' => 'setEmiTenure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'card_number' => 'getCardNumber',
        'card_holder_name' => 'getCardHolderName',
        'card_expiry_mm' => 'getCardExpiryMm',
        'card_expiry_yy' => 'getCardExpiryYy',
        'card_cvv' => 'getCardCvv',
        'instrument_id' => 'getInstrumentId',
        'cryptogram' => 'getCryptogram',
        'token_requestor_id' => 'getTokenRequestorId',
        'token_reference_id' => 'getTokenReferenceId',
        'token_type' => 'getTokenType',
        'card_display' => 'getCardDisplay',
        'card_alias' => 'getCardAlias',
        'card_bank_name' => 'getCardBankName',
        'address_line_one' => 'getAddressLineOne',
        'address_line_two' => 'getAddressLineTwo',
        'city' => 'getCity',
        'zip_code' => 'getZipCode',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'state' => 'getState',
        'state_code' => 'getStateCode',
        'emi_tenure' => 'getEmiTenure'
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

    public const CHANNEL_LINK = 'link';
    public const CHANNEL_POST = 'post';
    public const CHANNEL_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    public const TOKEN_TYPE_ISSUER_TOKEN = 'ISSUER_TOKEN';
    public const TOKEN_TYPE_NETWORK_GC_TOKEN = 'NETWORK_GC_TOKEN';
    public const TOKEN_TYPE_ISSUER_GC_TOKEN = 'ISSUER_GC_TOKEN';
    public const TOKEN_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    public const CARD_BANK_NAME_KOTAK = 'Kotak';
    public const CARD_BANK_NAME_ICICI = 'ICICI';
    public const CARD_BANK_NAME_RBL = 'RBL';
    public const CARD_BANK_NAME_BOB = 'BOB';
    public const CARD_BANK_NAME_STANDARD_CHARTERED = 'Standard Chartered';
    public const CARD_BANK_NAME_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_LINK,
            self::CHANNEL_POST,
            self::CHANNEL_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTokenTypeAllowableValues()
    {
        return [
            self::TOKEN_TYPE_ISSUER_TOKEN,
            self::TOKEN_TYPE_NETWORK_GC_TOKEN,
            self::TOKEN_TYPE_ISSUER_GC_TOKEN,
            self::TOKEN_TYPE_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardBankNameAllowableValues()
    {
        return [
            self::CARD_BANK_NAME_KOTAK,
            self::CARD_BANK_NAME_ICICI,
            self::CARD_BANK_NAME_RBL,
            self::CARD_BANK_NAME_BOB,
            self::CARD_BANK_NAME_STANDARD_CHARTERED,
            self::CARD_BANK_NAME_UNKNOWN_DEFAULT_OPEN_API,
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
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('card_holder_name', $data ?? [], null);
        $this->setIfExists('card_expiry_mm', $data ?? [], null);
        $this->setIfExists('card_expiry_yy', $data ?? [], null);
        $this->setIfExists('card_cvv', $data ?? [], null);
        $this->setIfExists('instrument_id', $data ?? [], null);
        $this->setIfExists('cryptogram', $data ?? [], null);
        $this->setIfExists('token_requestor_id', $data ?? [], null);
        $this->setIfExists('token_reference_id', $data ?? [], null);
        $this->setIfExists('token_type', $data ?? [], null);
        $this->setIfExists('card_display', $data ?? [], null);
        $this->setIfExists('card_alias', $data ?? [], null);
        $this->setIfExists('card_bank_name', $data ?? [], null);
        $this->setIfExists('address_line_one', $data ?? [], null);
        $this->setIfExists('address_line_two', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('state_code', $data ?? [], null);
        $this->setIfExists('emi_tenure', $data ?? [], null);
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!is_null($this->container['token_type']) && !in_array($this->container['token_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'token_type', must be one of '%s'",
                $this->container['token_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCardBankNameAllowableValues();
        if (!is_null($this->container['card_bank_name']) && !in_array($this->container['card_bank_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_bank_name', must be one of '%s'",
                $this->container['card_bank_name'],
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
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel The channel for card payments can be \"link\" or \"post\". Post is used for seamless OTP payments where merchant captures OTP on their own page.
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel', must be one of '%s'",
                    $channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel'] = $channel;

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
     * @param string|null $card_number Customer card number for plain card transactions. Token pan number for tokenized card transactions.
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
     * @param string|null $card_holder_name Customer name mentioned on the card.
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
     * @param string|null $card_expiry_mm Card expiry month for plain card transactions. Token expiry month for tokenized card transactions.
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
     * @param string|null $card_expiry_yy Card expiry year for plain card transactions. Token expiry year for tokenized card transactions.
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
     * @param string|null $card_cvv CVV mentioned on the card.
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
     * Gets instrument_id
     *
     * @return string|null
     */
    public function getInstrumentId()
    {
        return $this->container['instrument_id'];
    }

    /**
     * Sets instrument_id
     *
     * @param string|null $instrument_id instrument id of saved card. Required only to make payment using saved instrument.
     *
     * @return self
     */
    public function setInstrumentId($instrument_id)
    {
        if (is_null($instrument_id)) {
            throw new \InvalidArgumentException('non-nullable instrument_id cannot be null');
        }
        $this->container['instrument_id'] = $instrument_id;

        return $this;
    }

    /**
     * Gets cryptogram
     *
     * @return string|null
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param string|null $cryptogram cryptogram received from card network. Required only for tokenized card transactions.
     *
     * @return self
     */
    public function setCryptogram($cryptogram)
    {
        if (is_null($cryptogram)) {
            throw new \InvalidArgumentException('non-nullable cryptogram cannot be null');
        }
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets token_requestor_id
     *
     * @return string|null
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string|null $token_requestor_id TRID issued by card networks. Required only for tokenized card transactions.
     *
     * @return self
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        if (is_null($token_requestor_id)) {
            throw new \InvalidArgumentException('non-nullable token_requestor_id cannot be null');
        }
        $this->container['token_requestor_id'] = $token_requestor_id;

        return $this;
    }

    /**
     * Gets token_reference_id
     *
     * @return string|null
     */
    public function getTokenReferenceId()
    {
        return $this->container['token_reference_id'];
    }

    /**
     * Sets token_reference_id
     *
     * @param string|null $token_reference_id Token Reference Id provided by Diners for Guest Checkout Token.  Required only for Diners cards.
     *
     * @return self
     */
    public function setTokenReferenceId($token_reference_id)
    {
        if (is_null($token_reference_id)) {
            throw new \InvalidArgumentException('non-nullable token_reference_id cannot be null');
        }
        $this->container['token_reference_id'] = $token_reference_id;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type token_type
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        if (is_null($token_type)) {
            throw new \InvalidArgumentException('non-nullable token_type cannot be null');
        }
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!in_array($token_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'token_type', must be one of '%s'",
                    $token_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets card_display
     *
     * @return string|null
     */
    public function getCardDisplay()
    {
        return $this->container['card_display'];
    }

    /**
     * Sets card_display
     *
     * @param string|null $card_display last 4 digits of original card number. Required only for tokenized card transactions.
     *
     * @return self
     */
    public function setCardDisplay($card_display)
    {
        if (is_null($card_display)) {
            throw new \InvalidArgumentException('non-nullable card_display cannot be null');
        }
        $this->container['card_display'] = $card_display;

        return $this;
    }

    /**
     * Gets card_alias
     *
     * @return string|null
     */
    public function getCardAlias()
    {
        return $this->container['card_alias'];
    }

    /**
     * Sets card_alias
     *
     * @param string|null $card_alias Card alias as returned by Cashfree Vault API.
     *
     * @return self
     */
    public function setCardAlias($card_alias)
    {
        if (is_null($card_alias)) {
            throw new \InvalidArgumentException('non-nullable card_alias cannot be null');
        }
        $this->container['card_alias'] = $card_alias;

        return $this;
    }

    /**
     * Gets card_bank_name
     *
     * @return string|null
     */
    public function getCardBankName()
    {
        return $this->container['card_bank_name'];
    }

    /**
     * Sets card_bank_name
     *
     * @param string|null $card_bank_name One of [\"Kotak\", \"ICICI\", \"RBL\", \"BOB\", \"Standard Chartered\"]. Card bank name, required for EMI payments. This is the bank user has selected for EMI
     *
     * @return self
     */
    public function setCardBankName($card_bank_name)
    {
        if (is_null($card_bank_name)) {
            throw new \InvalidArgumentException('non-nullable card_bank_name cannot be null');
        }
        $allowedValues = $this->getCardBankNameAllowableValues();
        if (!in_array($card_bank_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_bank_name', must be one of '%s'",
                    $card_bank_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_bank_name'] = $card_bank_name;

        return $this;
    }

    /**
     * Gets address_line_one
     *
     * @return string|null
     */
    public function getAddressLineOne()
    {
        return $this->container['address_line_one'];
    }

    /**
     * Sets address_line_one
     *
     * @param string|null $address_line_one First line of the address.
     *
     * @return self
     */
    public function setAddressLineOne($address_line_one)
    {
        if (is_null($address_line_one)) {
            throw new \InvalidArgumentException('non-nullable address_line_one cannot be null');
        }
        $this->container['address_line_one'] = $address_line_one;

        return $this;
    }

    /**
     * Gets address_line_two
     *
     * @return string|null
     */
    public function getAddressLineTwo()
    {
        return $this->container['address_line_two'];
    }

    /**
     * Sets address_line_two
     *
     * @param string|null $address_line_two Second line of the address.
     *
     * @return self
     */
    public function setAddressLineTwo($address_line_two)
    {
        if (is_null($address_line_two)) {
            throw new \InvalidArgumentException('non-nullable address_line_two cannot be null');
        }
        $this->container['address_line_two'] = $address_line_two;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City Name.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code Pin Code/Zip Code.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            throw new \InvalidArgumentException('non-nullable zip_code cannot be null');
        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country Name.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Country Code. Should be in ISO 2 format (ie. US for United States)
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State Name.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code State Code. Should be in ISO 2 format (ie. FL for Florida)
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (is_null($state_code)) {
            throw new \InvalidArgumentException('non-nullable state_code cannot be null');
        }
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets emi_tenure
     *
     * @return int|null
     */
    public function getEmiTenure()
    {
        return $this->container['emi_tenure'];
    }

    /**
     * Sets emi_tenure
     *
     * @param int|null $emi_tenure EMI tenure selected by the user
     *
     * @return self
     */
    public function setEmiTenure($emi_tenure)
    {
        if (is_null($emi_tenure)) {
            throw new \InvalidArgumentException('non-nullable emi_tenure cannot be null');
        }
        $this->container['emi_tenure'] = $emi_tenure;

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


