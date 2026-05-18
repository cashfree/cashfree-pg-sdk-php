# OpenAPI\Client\DowntimeApi



All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchActiveEcosystemDowntimes()**](DowntimeApi.md#fetchActiveEcosystemDowntimes) | **GET** /incident | Fetch All Downtimes |


## `fetchActiveEcosystemDowntimes()`

```php
fetchActiveEcosystemDowntimes($x_api_version, $x_request_id, $x_idempotency_key, $incident_id, $incident_status, $incident_impact, $incident_type, $incident_start_time, $incident_end_time, $payment_method): \OpenAPI\Client\Model\FetchActiveEcosystemDowntimes200Response
```

Fetch All Downtimes

Fetches active downtimes across various payment methods based on filters. Gives all active downtimes when no filters are applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: XClientSecret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

// Configure API key authorization: XClientID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DowntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$incident_id = your-incident-id; // string | Valid incident id for fetching incident details.
$incident_status = ["ACTIVE","RESOLVED"]; // string[] | Filter incidents by status. Possible values: ACTIVE, UPCOMING, RESOLVED.
$incident_impact = ["HIGH","MEDIUM"]; // string[] | Filter incidents by impact level. Possible values: HIGH, MEDIUM, LOW.
$incident_type = ["UNSCHEDULED"]; // string[] | Filter incidents by type. Possible values: SCHEDULED, UNSCHEDULED.
$incident_start_time = 2024-06-01 14:00:00; // \DateTime | Filter incidents by start time. Format: YYYY-MM-DD HH:MM:SS.
$incident_end_time = 2024-06-02 14:00:00; // \DateTime | Filter incidents by end time. Format: YYYY-MM-DD HH:MM:SS.
$payment_method = ["UPI","CARD"]; // string[] | Filter incidents by payment method. Possible values: UPI, CARD, NET_BANKING, WALLET.

try {
    $result = $apiInstance->fetchActiveEcosystemDowntimes($x_api_version, $x_request_id, $x_idempotency_key, $incident_id, $incident_status, $incident_impact, $incident_type, $incident_start_time, $incident_end_time, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DowntimeApi->fetchActiveEcosystemDowntimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **incident_id** | **string**| Valid incident id for fetching incident details. | [optional] |
| **incident_status** | [**string[]**](../Model/string.md)| Filter incidents by status. Possible values: ACTIVE, UPCOMING, RESOLVED. | [optional] |
| **incident_impact** | [**string[]**](../Model/string.md)| Filter incidents by impact level. Possible values: HIGH, MEDIUM, LOW. | [optional] |
| **incident_type** | [**string[]**](../Model/string.md)| Filter incidents by type. Possible values: SCHEDULED, UNSCHEDULED. | [optional] |
| **incident_start_time** | **\DateTime**| Filter incidents by start time. Format: YYYY-MM-DD HH:MM:SS. | [optional] |
| **incident_end_time** | **\DateTime**| Filter incidents by end time. Format: YYYY-MM-DD HH:MM:SS. | [optional] |
| **payment_method** | [**string[]**](../Model/string.md)| Filter incidents by payment method. Possible values: UPI, CARD, NET_BANKING, WALLET. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FetchActiveEcosystemDowntimes200Response**](../Model/FetchActiveEcosystemDowntimes200Response.md)

### Authorization

[XClientSecret](../../README.md#XClientSecret), [XClientID](../../README.md#XClientID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
