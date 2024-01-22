# Cashfree\TokenVaultApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGCustomerDeleteInstrument()**](TokenVaultApi.md#PGCustomerDeleteInstrument) | **DELETE** /customers/{customer_id}/instruments/{instrument_id} | Delete Saved Card Instrument |
| [**PGCustomerFetchInstrument()**](TokenVaultApi.md#PGCustomerFetchInstrument) | **GET** /customers/{customer_id}/instruments/{instrument_id} | Fetch Specific Saved Card Instrument |
| [**PGCustomerFetchInstruments()**](TokenVaultApi.md#PGCustomerFetchInstruments) | **GET** /customers/{customer_id}/instruments | Fetch All Saved Card Instrument |
| [**PGCustomerInstrumentsFetchCryptogram()**](TokenVaultApi.md#PGCustomerInstrumentsFetchCryptogram) | **GET** /customers/{customer_id}/instruments/{instrument_id}/cryptogram | Fetch cryptogram for a saved card instrument |


## `PGCustomerDeleteInstrument()`

```php
PGCustomerDeleteInstrument($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\InstrumentEntity
```

Delete Saved Card Instrument

Use this API to delete a saved card instrument for a customer_id and instrument_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$customer_id = your-customer-id;
$instrument_id = some-instrument-id;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCustomerDeleteInstrument($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->PGCustomerDeleteInstrument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **customer_id** | **string**| Your Customer ID that you had sent during create order API &#x60;POST/orders&#x60; | |
| **instrument_id** | **string**| The instrument_id which needs to be deleted | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\InstrumentEntity**](../Model/InstrumentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGCustomerFetchInstrument()`

```php
PGCustomerFetchInstrument($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\InstrumentEntity
```

Fetch Specific Saved Card Instrument

Use this API to fetch a single specific saved card for a customer_id by it's instrument_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$customer_id = your-customer-id;
$instrument_id = some-instrument-id;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCustomerFetchInstrument($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->PGCustomerFetchInstrument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **customer_id** | **string**| Your Customer ID that you had sent during create order API &#x60;POST/orders&#x60; | |
| **instrument_id** | **string**| The instrument_id of the saved instrument which needs to be queried | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\InstrumentEntity**](../Model/InstrumentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGCustomerFetchInstruments()`

```php
PGCustomerFetchInstruments($x_api_version, $customer_id, $instrument_type, $x_request_id, $x_idempotency_key): \Cashfree\Model\InstrumentEntity[]
```

Fetch All Saved Card Instrument

Use this API to fetch saved cards for a customer_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$customer_id = your-customer-id;
$instrument_type = card;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCustomerFetchInstruments($x_api_version, $customer_id, $instrument_type, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->PGCustomerFetchInstruments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **customer_id** | **string**| Your Customer ID that you had sent during create order API &#x60;POST/orders&#x60; | |
| **instrument_type** | **string**| Payment mode or type of saved instrument | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\InstrumentEntity[]**](../Model/InstrumentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGCustomerInstrumentsFetchCryptogram()`

```php
PGCustomerInstrumentsFetchCryptogram($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\CryptogramEntity
```

Fetch cryptogram for a saved card instrument

Use this API To get the card network token, token expiry and cryptogram for a saved card instrument using instrument id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$customer_id = your-customer-id;
$instrument_id = some-instrument-id;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCustomerInstrumentsFetchCryptogram($x_api_version, $customer_id, $instrument_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->PGCustomerInstrumentsFetchCryptogram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **customer_id** | **string**| Your Customer ID that you had sent during create order API &#x60;POST/orders&#x60; | |
| **instrument_id** | **string**| The instrument_id of the saved card instrument which needs to be queried | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\CryptogramEntity**](../Model/CryptogramEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
