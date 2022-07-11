# OpenAPI\Client\PaymentLinksApi

All URIs are relative to https://sandbox.cashfree.com/pg.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPaymentLink()**](PaymentLinksApi.md#cancelPaymentLink) | **POST** /links/{link_id}/cancel | Cancel Payment Link
[**createPaymentLink()**](PaymentLinksApi.md#createPaymentLink) | **POST** /links | Create Payment Link
[**getPaymentLinkDetails()**](PaymentLinksApi.md#getPaymentLinkDetails) | **GET** /links/{link_id} | Fetch Payment Link Details
[**getPaymentLinkOrders()**](PaymentLinksApi.md#getPaymentLinkOrders) | **GET** /links/{link_id}/orders | Get Orders for a Payment Link


## `cancelPaymentLink()`

```php
cancelPaymentLink($x_client_id, $x_client_secret, $link_id, $x_api_version): \OpenAPI\Client\Model\CFLinkCancelledResponse
```

Cancel Payment Link

Use this API to cancel a payment link. No further payments can be done against a cancelled link. Only a link in ACTIVE status can be cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$link_id = 'link_id_example'; // string
$x_api_version = '2022-01-01'; // string

try {
    $result = $apiInstance->cancelPaymentLink($x_client_id, $x_client_secret, $link_id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->cancelPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **link_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]

### Return type

[**\OpenAPI\Client\Model\CFLinkCancelledResponse**](../Model/CFLinkCancelledResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentLink()`

```php
createPaymentLink($x_client_id, $x_client_secret, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_link_request): \OpenAPI\Client\Model\CFLink
```

Create Payment Link

Use this API to create a new payment link. The created payment link url will be available in the API response parameter link_url.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string
$cf_link_request = new \OpenAPI\Client\Model\CFLinkRequest(); // \OpenAPI\Client\Model\CFLinkRequest

try {
    $result = $apiInstance->createPaymentLink($x_client_id, $x_client_secret, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->createPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]
 **cf_link_request** | [**\OpenAPI\Client\Model\CFLinkRequest**](../Model/CFLinkRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFLink**](../Model/CFLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentLinkDetails()`

```php
getPaymentLinkDetails($x_client_id, $x_client_secret, $link_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFLink
```

Fetch Payment Link Details

Use this API to view all details and status of a payment link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$link_id = 'link_id_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->getPaymentLinkDetails($x_client_id, $x_client_secret, $link_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getPaymentLinkDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **link_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFLink**](../Model/CFLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentLinkOrders()`

```php
getPaymentLinkOrders($x_client_id, $x_client_secret, $link_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFLinkOrders[]
```

Get Orders for a Payment Link

Use this API to view all order details for a payment link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$link_id = 'link_id_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->getPaymentLinkOrders($x_client_id, $x_client_secret, $link_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getPaymentLinkOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **link_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFLinkOrders[]**](../Model/CFLinkOrders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
