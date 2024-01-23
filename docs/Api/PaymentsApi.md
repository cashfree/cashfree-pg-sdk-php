# Cashfree\PaymentsApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGAuthorizeOrder()**](PaymentsApi.md#PGAuthorizeOrder) | **POST** /orders/{order_id}/authorization | Preauthorization |
| [**PGOrderAuthenticatePayment()**](PaymentsApi.md#PGOrderAuthenticatePayment) | **POST** /orders/pay/authenticate/{cf_payment_id} | Submit or Resend OTP |
| [**PGOrderFetchPayment()**](PaymentsApi.md#PGOrderFetchPayment) | **GET** /orders/{order_id}/payments/{cf_payment_id} | Get Payment by ID |
| [**PGOrderFetchPayments()**](PaymentsApi.md#PGOrderFetchPayments) | **GET** /orders/{order_id}/payments | Get Payments for an Order |
| [**PGPayOrder()**](PaymentsApi.md#PGPayOrder) | **POST** /orders/sessions | Order Pay |


## `PGAuthorizeOrder()`

```php
PGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\PaymentEntity
```

Preauthorization

Use this API to capture or void a preauthorized payment

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
$authorize_order_request = new \Cashfree\Model\AuthorizeOrderRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->PGAuthorizeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **order_id** | **string**| The id which uniquely identifies your order | |
| **authorize_order_request** | [**\Cashfree\Model\AuthorizeOrderRequest**](../Model/AuthorizeOrderRequest.md)| Request to Capture or Void Transactions | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\PaymentEntity**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGOrderAuthenticatePayment()`

```php
PGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\OrderAuthenticateEntity
```

Submit or Resend OTP

If you accept OTP on your own page, you can use the below API to send OTP to Cashfree.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$cf_payment_id = 121224562;
$order_authenticate_payment_request = new \Cashfree\Model\OrderAuthenticatePaymentRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->PGOrderAuthenticatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **cf_payment_id** | **string**| The Cashfree payment or transaction ID. | |
| **order_authenticate_payment_request** | [**\Cashfree\Model\OrderAuthenticatePaymentRequest**](../Model/OrderAuthenticatePaymentRequest.md)| Request body to submit/resend headless OTP. To use this API make sure you have headless OTP enabled for your account | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OrderAuthenticateEntity**](../Model/OrderAuthenticateEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGOrderFetchPayment()`

```php
PGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\PaymentEntity
```

Get Payment by ID

Use this API to view payment details of an order for a payment ID.

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
$cf_payment_id = 121224562;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->PGOrderFetchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **order_id** | **string**| The id which uniquely identifies your order | |
| **cf_payment_id** | **string**| The Cashfree payment or transaction ID. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\PaymentEntity**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGOrderFetchPayments()`

```php
PGOrderFetchPayments($x_api_version, $order_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\PaymentEntity[]
```

Get Payments for an Order

Use this API to view all payment details for an order.

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
    $result = $cashfree->PGOrderFetchPayments($x_api_version, $order_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->PGOrderFetchPayments: ', $e->getMessage(), PHP_EOL;
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

[**\Cashfree\Model\PaymentEntity[]**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGPayOrder()`

```php
PGPayOrder($x_api_version, $pay_order_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\PayOrderEntity
```

Order Pay

Use this API when you have already created the orders and want Cashfree to process the payment. To use this API S2S flag needs to be enabled from the backend. In case you want to use the cards payment option the PCI DSS flag is required, for more information send an email to \"care@cashfree.com\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGPayOrder($x_api_version, $pay_order_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->PGPayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **pay_order_request** | [**\Cashfree\Model\PayOrderRequest**](../Model/PayOrderRequest.md)| Request body to create a transaction at cashfree using &#x60;payment_session_id&#x60; | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\PayOrderEntity**](../Model/PayOrderEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
