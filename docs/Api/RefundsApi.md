# OpenAPI\Client\RefundsApi

All URIs are relative to https://sandbox.cashfree.com/pg.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createrefund()**](RefundsApi.md#createrefund) | **POST** /orders/{order_id}/refunds | Create Refund
[**getRefund()**](RefundsApi.md#getRefund) | **GET** /orders/{order_id}/refunds/{refund_id} | Get Refund
[**getallrefundsfororder()**](RefundsApi.md#getallrefundsfororder) | **GET** /orders/{order_id}/refunds | Get All Refunds for an Order


## `createrefund()`

```php
createrefund($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_refund_request): \OpenAPI\Client\Model\CFRefund
```

Create Refund

Use this API to initiate refunds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$order_id = 'order_id_example'; // string
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string
$cf_refund_request = new \OpenAPI\Client\Model\CFRefundRequest(); // \OpenAPI\Client\Model\CFRefundRequest

try {
    $result = $apiInstance->createrefund($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->createrefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **order_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]
 **cf_refund_request** | [**\OpenAPI\Client\Model\CFRefundRequest**](../Model/CFRefundRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFRefund**](../Model/CFRefund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefund()`

```php
getRefund($x_client_id, $x_client_secret, $order_id, $refund_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFRefund
```

Get Refund

Use this API to fetch a specific refund processed on your Cashfree Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$order_id = 'order_id_example'; // string
$refund_id = 'refund_id_example'; // string | Refund Id of the refund you want to fetch.
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->getRefund($x_client_id, $x_client_secret, $order_id, $refund_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->getRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **order_id** | **string**|  |
 **refund_id** | **string**| Refund Id of the refund you want to fetch. |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFRefund**](../Model/CFRefund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getallrefundsfororder()`

```php
getallrefundsfororder($x_client_id, $x_client_secret, $order_id, $x_api_version): \OpenAPI\Client\Model\CFRefund[]
```

Get All Refunds for an Order

Use this API to fetch all refunds processed against an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$order_id = 'order_id_example'; // string
$x_api_version = '2022-01-01'; // string

try {
    $result = $apiInstance->getallrefundsfororder($x_client_id, $x_client_secret, $order_id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->getallrefundsfororder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **order_id** | **string**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]

### Return type

[**\OpenAPI\Client\Model\CFRefund[]**](../Model/CFRefund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
