# OpenAPI\Client\SettlementsApi

Collection of APIs to handle settlements.

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**markForSettlement()**](SettlementsApi.md#markForSettlement) | **POST** /orders/settlements | Mark Order For Settlement |
| [**pGOrderFetchSettlement()**](SettlementsApi.md#pGOrderFetchSettlement) | **GET** /orders/{order_id}/settlements | Get Settlements by Order ID |


## `markForSettlement()`

```php
markForSettlement($x_api_version, $x_request_id, $x_idempotency_key, $create_order_settlement_request_body): object
```

Mark Order For Settlement

Use this API to pass the CBRICS ID to Cashfree and mark an order for settlement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: XPartnerAPIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-partner-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-partner-apikey', 'Bearer');

// Configure API key authorization: XClientSecret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

// Configure API key authorization: XPartnerMerchantID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-partner-merchantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-partner-merchantid', 'Bearer');

// Configure API key authorization: XClientID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');

// Configure API key authorization: XClientSignatureHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$create_order_settlement_request_body = {"order_id":"order_2642712eXjxRSJ5RfEZqHBfWeTwT4rm7H","meta_data":{"cbriks_id":"CBRIKS_004","settlement_date":"2024-04-12"}}; // \OpenAPI\Client\Model\CreateOrderSettlementRequestBody | Create Order Settlement Request Body.

try {
    $result = $apiInstance->markForSettlement($x_api_version, $x_request_id, $x_idempotency_key, $create_order_settlement_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementsApi->markForSettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **create_order_settlement_request_body** | [**\OpenAPI\Client\Model\CreateOrderSettlementRequestBody**](../Model/CreateOrderSettlementRequestBody.md)| Create Order Settlement Request Body. | [optional] |

### Return type

**object**

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGOrderFetchSettlement()`

```php
pGOrderFetchSettlement($x_api_version, $order_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SettlementEntity
```

Get Settlements by Order ID

Use this API to view all the settlements of a particular order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: XPartnerAPIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-partner-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-partner-apikey', 'Bearer');

// Configure API key authorization: XClientSecret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

// Configure API key authorization: XPartnerMerchantID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-partner-merchantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-partner-merchantid', 'Bearer');

// Configure API key authorization: XClientID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');

// Configure API key authorization: XClientSignatureHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SettlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$order_id = your-order-id; // string | The ID which uniquely identifies your order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGOrderFetchSettlement($x_api_version, $order_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementsApi->pGOrderFetchSettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **order_id** | **string**| The ID which uniquely identifies your order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SettlementEntity**](../Model/SettlementEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
