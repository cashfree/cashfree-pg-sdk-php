# OpenAPI\Client\PaymentsApi

Collection of APIs to handle payments.

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pGAuthorizeOrder()**](PaymentsApi.md#pGAuthorizeOrder) | **POST** /orders/{order_id}/authorization | Preauthorisation |
| [**pGOrderAuthenticatePayment()**](PaymentsApi.md#pGOrderAuthenticatePayment) | **POST** /orders/pay/authenticate/{cf_payment_id} | Submit or Resend OTP |
| [**pGOrderFetchPayment()**](PaymentsApi.md#pGOrderFetchPayment) | **GET** /orders/{order_id}/payments/{cf_payment_id} | Get Payment by ID |
| [**pGOrderFetchPayments()**](PaymentsApi.md#pGOrderFetchPayments) | **GET** /orders/{order_id}/payments | Get Payments for an Order |
| [**pGPayOrder()**](PaymentsApi.md#pGPayOrder) | **POST** /orders/sessions | Order Pay |
| [**pGPayOrderAuthorizeOnly()**](PaymentsApi.md#pGPayOrderAuthorizeOnly) | **POST** /orders/sessions/authorize | Order Pay Authorise Only |


## `pGAuthorizeOrder()`

```php
pGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PaymentEntity
```

Preauthorisation

Use this API to capture or void a [pre-authorised](/docs/payments/features/pre-authorisation) payment.

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


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$order_id = your-order-id; // string | The ID which uniquely identifies your order.
$authorize_order_request = {"action":"CAPTURE","amount":100}; // \OpenAPI\Client\Model\AuthorizeOrderRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGAuthorizeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **order_id** | **string**| The ID which uniquely identifies your order. | |
| **authorize_order_request** | [**\OpenAPI\Client\Model\AuthorizeOrderRequest**](../Model/AuthorizeOrderRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentEntity**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGOrderAuthenticatePayment()`

```php
pGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\OrderAuthenticateEntity
```

Submit or Resend OTP

Use this API to submit or resend OTP if you use [Native OTP](https://www.cashfree.com/docs/payments/features/native-otp) for authentication of card payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$cf_payment_id = 121224562; // string | The Cashfree payment or transaction ID.
$order_authenticate_payment_request = new \OpenAPI\Client\Model\OrderAuthenticatePaymentRequest(); // \OpenAPI\Client\Model\OrderAuthenticatePaymentRequest | Request body to submit or resend OTP in Native OTP flow.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGOrderAuthenticatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **cf_payment_id** | **string**| The Cashfree payment or transaction ID. | |
| **order_authenticate_payment_request** | [**\OpenAPI\Client\Model\OrderAuthenticatePaymentRequest**](../Model/OrderAuthenticatePaymentRequest.md)| Request body to submit or resend OTP in Native OTP flow. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderAuthenticateEntity**](../Model/OrderAuthenticateEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGOrderFetchPayment()`

```php
pGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PaymentEntity
```

Get Payment by ID

Use this API to view payment details of an order for a payment ID.

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


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$order_id = your-order-id; // string | The ID which uniquely identifies your order.
$cf_payment_id = 121224562; // string | The Cashfree payment or transaction ID.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGOrderFetchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **order_id** | **string**| The ID which uniquely identifies your order. | |
| **cf_payment_id** | **string**| The Cashfree payment or transaction ID. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentEntity**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGOrderFetchPayments()`

```php
pGOrderFetchPayments($x_api_version, $order_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PaymentEntity[]
```

Get Payments for an Order

Use this API to view all payment details for an order.

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


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$order_id = your-order-id; // string | The ID which uniquely identifies your order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGOrderFetchPayments($x_api_version, $order_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGOrderFetchPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **order_id** | **string**| The ID which uniquely identifies your order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentEntity[]**](../Model/PaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGPayOrder()`

```php
pGPayOrder($x_api_version, $pay_order_request, $x_request_id, $x_idempotency_key, $x_client_device, $x_client_os, $x_client_rendering_type, $x_client_browser): \OpenAPI\Client\Model\PayOrderEntity
```

Order Pay

Use this API when you have already created the order using [Create Order API](https://www.cashfree.com/docs/api-reference/payments/latest/orders/create) and want Cashfree to process the payment. To use this API S2S flag needs to be enabled from the backend. In case you want to use this API for plain cards payments also, the PCI DSS flag is required, for more information fill out the [Support Form](https://merchant.cashfree.com/merchants/landing?env=prod&raise_issue=1).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$pay_order_request = new \OpenAPI\Client\Model\PayOrderRequest(); // \OpenAPI\Client\Model\PayOrderRequest | Request body to create a transaction at Cashfree using `payment_session_id`.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$x_client_device = mobile; // string | The type of device on which the payment is initiated.
$x_client_os = android; // string | The operating system of the client device used to make the payment.
$x_client_rendering_type = mweb; // string | Indicates how the payment experience is rendered to the user. - mweb – Payment rendered in a mobile browser (browser on a mobile device) - webview – Payment rendered inside an in-app browser (WebView within a merchant app) - native – Payment rendered natively within the merchant’s mobile app using SDKs.
$x_client_browser = safari; // string | The browser used to initiate the payment.

try {
    $result = $apiInstance->pGPayOrder($x_api_version, $pay_order_request, $x_request_id, $x_idempotency_key, $x_client_device, $x_client_os, $x_client_rendering_type, $x_client_browser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGPayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **pay_order_request** | [**\OpenAPI\Client\Model\PayOrderRequest**](../Model/PayOrderRequest.md)| Request body to create a transaction at Cashfree using &#x60;payment_session_id&#x60;. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **x_client_device** | **string**| The type of device on which the payment is initiated. | [optional] |
| **x_client_os** | **string**| The operating system of the client device used to make the payment. | [optional] |
| **x_client_rendering_type** | **string**| Indicates how the payment experience is rendered to the user. - mweb – Payment rendered in a mobile browser (browser on a mobile device) - webview – Payment rendered inside an in-app browser (WebView within a merchant app) - native – Payment rendered natively within the merchant’s mobile app using SDKs. | [optional] |
| **x_client_browser** | **string**| The browser used to initiate the payment. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayOrderEntity**](../Model/PayOrderEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGPayOrderAuthorizeOnly()`

```php
pGPayOrderAuthorizeOnly($x_api_version, $pay_order_authorize_only_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PaymentEntity
```

Order Pay Authorise Only

Use this API when an order has already been created and you want Cashfree to process the payment for authorisation only. To use this API, the 'AUTHORIZE_ONLY' flag must be enabled for your account. Submit [Support Form](https://merchant.cashfree.com/auth/login) to enable this feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$pay_order_authorize_only_request = new \OpenAPI\Client\Model\PayOrderAuthorizeOnlyRequest(); // \OpenAPI\Client\Model\PayOrderAuthorizeOnlyRequest | Request body to create an authorization only transaction at cashfree using `payment_session_id`.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGPayOrderAuthorizeOnly($x_api_version, $pay_order_authorize_only_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->pGPayOrderAuthorizeOnly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **pay_order_authorize_only_request** | [**\OpenAPI\Client\Model\PayOrderAuthorizeOnlyRequest**](../Model/PayOrderAuthorizeOnlyRequest.md)| Request body to create an authorization only transaction at cashfree using &#x60;payment_session_id&#x60;. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentEntity**](../Model/PaymentEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
