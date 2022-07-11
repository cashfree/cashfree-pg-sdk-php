# OpenAPI\Client\TokenVaultApi

All URIs are relative to https://sandbox.cashfree.com/pg.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSpecificSavedInstrument()**](TokenVaultApi.md#deleteSpecificSavedInstrument) | **DELETE** /customers/{customer_id}/instruments/{instrument_id} | Delete Saved Instrument
[**fetchAllSavedInstruments()**](TokenVaultApi.md#fetchAllSavedInstruments) | **GET** /customers/{customer_id}/instruments | Fetch All Saved Instruments
[**fetchCryptogram()**](TokenVaultApi.md#fetchCryptogram) | **GET** /customers/{customer_id}/instruments/{instrument_id}/cryptogram | Fetch cryptogram for saved instrument
[**fetchSpecificSavedInstrument()**](TokenVaultApi.md#fetchSpecificSavedInstrument) | **GET** /customers/{customer_id}/instruments/{instrument_id} | Fetch Single Saved Instrument


## `deleteSpecificSavedInstrument()`

```php
deleteSpecificSavedInstrument($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version): \OpenAPI\Client\Model\CFFetchAllSavedInstruments
```

Delete Saved Instrument

To delete a saved instrument for a customer id and instrument id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokenVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$customer_id = 'customer_id_example'; // string
$instrument_id = 'instrument_id_example'; // string
$x_api_version = '2022-01-01'; // string

try {
    $result = $apiInstance->deleteSpecificSavedInstrument($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->deleteSpecificSavedInstrument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **customer_id** | **string**|  |
 **instrument_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]

### Return type

[**\OpenAPI\Client\Model\CFFetchAllSavedInstruments**](../Model/CFFetchAllSavedInstruments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAllSavedInstruments()`

```php
fetchAllSavedInstruments($x_client_id, $x_client_secret, $customer_id, $instrument_type, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFFetchAllSavedInstruments[]
```

Fetch All Saved Instruments

To get all saved instruments for a customer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokenVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$customer_id = 'customer_id_example'; // string
$instrument_type = 'instrument_type_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->fetchAllSavedInstruments($x_client_id, $x_client_secret, $customer_id, $instrument_type, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->fetchAllSavedInstruments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **customer_id** | **string**|  |
 **instrument_type** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFFetchAllSavedInstruments[]**](../Model/CFFetchAllSavedInstruments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchCryptogram()`

```php
fetchCryptogram($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFCryptogram
```

Fetch cryptogram for saved instrument

To get the card network token, token expiry and cryptogram for a saved instrument using instrument id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokenVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$customer_id = 'customer_id_example'; // string
$instrument_id = 'instrument_id_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->fetchCryptogram($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->fetchCryptogram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **customer_id** | **string**|  |
 **instrument_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFCryptogram**](../Model/CFCryptogram.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchSpecificSavedInstrument()`

```php
fetchSpecificSavedInstrument($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFFetchAllSavedInstruments
```

Fetch Single Saved Instrument

To get specific saved instrument for a customer id and instrument id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokenVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$customer_id = 'customer_id_example'; // string
$instrument_id = 'instrument_id_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->fetchSpecificSavedInstrument($x_client_id, $x_client_secret, $customer_id, $instrument_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenVaultApi->fetchSpecificSavedInstrument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **customer_id** | **string**|  |
 **instrument_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFFetchAllSavedInstruments**](../Model/CFFetchAllSavedInstruments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
