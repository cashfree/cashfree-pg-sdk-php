# OpenAPI\Client\PaymentsApi

All URIs are relative to https://sandbox.cashfree.com/pg.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentbyId()**](PaymentsApi.md#getPaymentbyId) | **GET** /orders/{order_id}/payments/{cf_payment_id} | Get Payment by ID
[**getPaymentsfororder()**](PaymentsApi.md#getPaymentsfororder) | **GET** /orders/{order_id}/payments | Get Payments for an Order


## `getPaymentbyId()`

```php
getPaymentbyId($x_client_id, $x_client_secret, $order_id, $cf_payment_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFPaymentsEntity
```

Get Payment by ID

Use this API to view payment details of an order for a payment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_client_id = 'x_client_id_example'; // string
$x_client_secret = 'x_client_secret_example'; // string
$order_id = 'order_id_example'; // string
$cf_payment_id = 56; // int
$x_api_version = '2022-01-01'; // string
$x_idempotency_replayed = false; // bool
$x_idempotency_key = 'x_idempotency_key_example'; // string
$x_request_id = 'x_request_id_example'; // string

try {
    $result = $apiInstance->getPaymentbyId($x_client_id, $x_client_secret, $order_id, $cf_payment_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentbyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_client_id** | **string**|  |
 **x_client_secret** | **string**|  |
 **order_id** | **string**|  |
 **cf_payment_id** | **int**|  |
 **x_api_version** | **string**|  | [optional] [default to &#39;2022-01-01&#39;]
 **x_idempotency_replayed** | **bool**|  | [optional] [default to false]
 **x_idempotency_key** | **string**|  | [optional]
 **x_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFPaymentsEntity**](../Model/CFPaymentsEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentsfororder()`

```php
getPaymentsfororder($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFPaymentsEntity[]
```

Get Payments for an Order

Use this API to view all payment details for an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
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

try {
    $result = $apiInstance->getPaymentsfororder($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsfororder: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\CFPaymentsEntity[]**](../Model/CFPaymentsEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
