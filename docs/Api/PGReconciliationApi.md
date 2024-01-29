# Cashfree\PGReconciliationApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGFetchRecon()**](PGReconciliationApi.md#PGFetchRecon) | **POST** /recon | PG Reconciliation |


## `PGFetchRecon()`

```php
PGFetchRecon($x_api_version, $fetch_recon_request, $content_type, $x_request_id, $x_idempotency_key, $accept): \Cashfree\Model\ReconEntity
```

PG Reconciliation

- Use this API to get the payment gateway reconciliation details with date range. - It will have events for your payment account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$fetch_recon_request = new \Cashfree\Model\FetchReconRequest();
$content_type = application/json;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;
$accept = application/json;

try {
    $result = $cashfree->PGFetchRecon($x_api_version, $fetch_recon_request, $content_type, $x_request_id, $x_idempotency_key, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PGReconciliationApi->PGFetchRecon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **fetch_recon_request** | [**\Cashfree\Model\FetchReconRequest**](../Model/FetchReconRequest.md)| Request Body for the reconciliation | |
| **content_type** | **string**| application/json | [optional] |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\Cashfree\Model\ReconEntity**](../Model/ReconEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
