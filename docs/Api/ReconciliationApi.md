# OpenAPI\Client\ReconciliationApi



All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pGESReconVendor()**](ReconciliationApi.md#pGESReconVendor) | **POST** /recon/vendor | Vendor Reconciliation API |


## `pGESReconVendor()`

```php
pGESReconVendor($x_api_version, $vendor_recon_request, $x_request_id, $x_idempotency_key, $content_type): \OpenAPI\Client\Model\VendorRecon200Response
```

Vendor Reconciliation API

This API allows you to fetch vendor reconciliation details by using different filters. Use the appropriate filters based on your requirements. After you receive a VENDOR_SETTLEMENT_SUCCESS webhook confirmation, wait 15 minutes before you call this API endpoint.  - **View Split Order Details Using Settlement ID**: Retrieve details of split orders within a settlement by Settlement ID.  - **Vendor Recon for a Time Period**: Fetch reconciliation details for all vendors within a specific time interval.  - **Vendor Recon Using Vendor ID & Time Interval**: Get reconciliation details for a specific vendor within a given time interval.

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


$apiInstance = new OpenAPI\Client\Api\ReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$vendor_recon_request = new \OpenAPI\Client\Model\VendorReconRequest(); // \OpenAPI\Client\Model\VendorReconRequest | Vendor Recon Request body.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$content_type = application/json; // string | application/json.

try {
    $result = $apiInstance->pGESReconVendor($x_api_version, $vendor_recon_request, $x_request_id, $x_idempotency_key, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationApi->pGESReconVendor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **vendor_recon_request** | [**\OpenAPI\Client\Model\VendorReconRequest**](../Model/VendorReconRequest.md)| Vendor Recon Request body. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **content_type** | **string**| application/json. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VendorRecon200Response**](../Model/VendorRecon200Response.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
