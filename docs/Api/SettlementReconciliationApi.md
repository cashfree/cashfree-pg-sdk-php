# OpenAPI\Client\SettlementReconciliationApi



All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pGFetchSettlements()**](SettlementReconciliationApi.md#pGFetchSettlements) | **POST** /settlements | Get All Settlements |
| [**pGSettlementFetchRecon()**](SettlementReconciliationApi.md#pGSettlementFetchRecon) | **POST** /settlement/recon | Settlement Reconciliation |


## `pGFetchSettlements()`

```php
pGFetchSettlements($x_api_version, $fetch_settlements_request, $content_type, $x_request_id, $x_idempotency_key, $accept): \OpenAPI\Client\Model\SettlementEntity
```

Get All Settlements

Use this API to get all settlement details by specifying the settlement ID, settlement UTR or date range.

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


$apiInstance = new OpenAPI\Client\Api\SettlementReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$fetch_settlements_request = new \OpenAPI\Client\Model\FetchSettlementsRequest(); // \OpenAPI\Client\Model\FetchSettlementsRequest | Request Body to get the settlements.
$content_type = application/json; // string | application/json.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$accept = application/json; // string | application/json.

try {
    $result = $apiInstance->pGFetchSettlements($x_api_version, $fetch_settlements_request, $content_type, $x_request_id, $x_idempotency_key, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementReconciliationApi->pGFetchSettlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **fetch_settlements_request** | [**\OpenAPI\Client\Model\FetchSettlementsRequest**](../Model/FetchSettlementsRequest.md)| Request Body to get the settlements. | |
| **content_type** | **string**| application/json. | [optional] |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **accept** | **string**| application/json. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SettlementEntity**](../Model/SettlementEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGSettlementFetchRecon()`

```php
pGSettlementFetchRecon($x_api_version, $settlement_fetch_recon_request, $content_type, $x_request_id, $x_idempotency_key, $accept): \OpenAPI\Client\Model\SettlementReconEntity
```

Settlement Reconciliation

- Use this API to get settlement reconciliation details using Settlement ID, settlement UTR or date range. - This API will return events for the settlement IDs you want

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


$apiInstance = new OpenAPI\Client\Api\SettlementReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$settlement_fetch_recon_request = new \OpenAPI\Client\Model\SettlementFetchReconRequest(); // \OpenAPI\Client\Model\SettlementFetchReconRequest | Request Body for the settlement reconciliation.
$content_type = application/json; // string | application/json.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$accept = application/json; // string | application/json.

try {
    $result = $apiInstance->pGSettlementFetchRecon($x_api_version, $settlement_fetch_recon_request, $content_type, $x_request_id, $x_idempotency_key, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementReconciliationApi->pGSettlementFetchRecon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **settlement_fetch_recon_request** | [**\OpenAPI\Client\Model\SettlementFetchReconRequest**](../Model/SettlementFetchReconRequest.md)| Request Body for the settlement reconciliation. | |
| **content_type** | **string**| application/json. | [optional] |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **accept** | **string**| application/json. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SettlementReconEntity**](../Model/SettlementReconEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
