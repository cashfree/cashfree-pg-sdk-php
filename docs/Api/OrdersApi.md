# OpenAPI\Client\OrdersApi

All URIs are relative to https://sandbox.cashfree.com/pg.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder()**](OrdersApi.md#createOrder) | **POST** /orders | Create Order
[**getOrder()**](OrdersApi.md#getOrder) | **GET** /orders/{order_id} | Get Order
[**orderPay()**](OrdersApi.md#orderPay) | **POST** /orders/pay | Order Pay
[**preauthorization()**](OrdersApi.md#preauthorization) | **POST** /orders/{order_id}/authorization | Preauthorization


## `createOrder()`

```php
createOrder($x_client_id, $x_client_secret, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_order_request): \OpenAPI\Client\Model\CFOrder
```

Create Order

Use this API to create orders with Cashfree from your backend and get the payment link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
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
$cf_order_request = new \OpenAPI\Client\Model\CFOrderRequest(); // \OpenAPI\Client\Model\CFOrderRequest

try {
    $result = $apiInstance->createOrder($x_client_id, $x_client_secret, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
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
 **cf_order_request** | [**\OpenAPI\Client\Model\CFOrderRequest**](../Model/CFOrderRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFOrder**](../Model/CFOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id): \OpenAPI\Client\Model\CFOrder
```

Get Order

Use this API to view all details of an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
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
    $result = $apiInstance->getOrder($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\CFOrder**](../Model/CFOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderPay()`

```php
orderPay($x_api_version, $x_request_id, $cf_order_pay_request): \OpenAPI\Client\Model\CFOrderPayResponse
```

Order Pay

Use this API when you have already created the orders and want Cashfree to process the payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = 'x_api_version_example'; // string
$x_request_id = 'x_request_id_example'; // string
$cf_order_pay_request = new \OpenAPI\Client\Model\CFOrderPayRequest(); // \OpenAPI\Client\Model\CFOrderPayRequest

try {
    $result = $apiInstance->orderPay($x_api_version, $x_request_id, $cf_order_pay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_version** | **string**|  |
 **x_request_id** | **string**|  | [optional]
 **cf_order_pay_request** | [**\OpenAPI\Client\Model\CFOrderPayRequest**](../Model/CFOrderPayRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFOrderPayResponse**](../Model/CFOrderPayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preauthorization()`

```php
preauthorization($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_authorization_request): \OpenAPI\Client\Model\CFPaymentsEntity
```

Preauthorization

Use this API to capture or void a preauthorized payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
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
$cf_authorization_request = new \OpenAPI\Client\Model\CFAuthorizationRequest(); // \OpenAPI\Client\Model\CFAuthorizationRequest

try {
    $result = $apiInstance->preauthorization($x_client_id, $x_client_secret, $order_id, $x_api_version, $x_idempotency_replayed, $x_idempotency_key, $x_request_id, $cf_authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->preauthorization: ', $e->getMessage(), PHP_EOL;
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
 **cf_authorization_request** | [**\OpenAPI\Client\Model\CFAuthorizationRequest**](../Model/CFAuthorizationRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CFPaymentsEntity**](../Model/CFPaymentsEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
