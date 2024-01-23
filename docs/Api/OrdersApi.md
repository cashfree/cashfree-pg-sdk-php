# Cashfree\OrdersApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGCreateOrder()**](OrdersApi.md#PGCreateOrder) | **POST** /orders | Create Order |
| [**PGFetchOrder()**](OrdersApi.md#PGFetchOrder) | **GET** /orders/{order_id} | Get Order |
| [**PGTerminateOrder()**](OrdersApi.md#PGTerminateOrder) | **PATCH** /orders/{order_id} | Terminate Order |


## `PGCreateOrder()`

```php
PGCreateOrder($x_api_version, $create_order_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\OrderEntity
```

Create Order

### Order An order is an entity which has a amount and currency associated with it. It is something for which you want to collect payment for. Use this API to create orders with Cashfree from your backend to get a `payment_sessions_id`.  You can use the `payment_sessions_id` to create a transaction for the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$create_order_request = new \Cashfree\Model\CreateOrderRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCreateOrder($x_api_version, $create_order_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->PGCreateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **create_order_request** | [**\Cashfree\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)| Request body to create an order at cashfree | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OrderEntity**](../Model/OrderEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGFetchOrder()`

```php
PGFetchOrder($x_api_version, $order_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\OrderEntity
```

Get Order

Use this API to fetch the order that was created at Cashfree's using the `order_id`.  ## When to use this API - To check the status of your order - Once the order is PAID - Once your customer returns to `return_url`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$order_id = your-order-id;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGFetchOrder($x_api_version, $order_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->PGFetchOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **order_id** | **string**| The id which uniquely identifies your order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OrderEntity**](../Model/OrderEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGTerminateOrder()`

```php
PGTerminateOrder($x_api_version, $order_id, $terminate_order_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\OrderEntity
```

Terminate Order

Use this API to terminate the order that was created at Cashfree's using the `order_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$order_id = your-order-id;
$terminate_order_request = new \Cashfree\Model\TerminateOrderRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGTerminateOrder($x_api_version, $order_id, $terminate_order_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->PGTerminateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **order_id** | **string**| The id which uniquely identifies your order | |
| **terminate_order_request** | [**\Cashfree\Model\TerminateOrderRequest**](../Model/TerminateOrderRequest.md)| Request body to terminate an order at cashfree | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OrderEntity**](../Model/OrderEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
