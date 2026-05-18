# OpenAPI\Client\SubscriptionApi



All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subsCreatePayment()**](SubscriptionApi.md#subsCreatePayment) | **POST** /subscriptions/pay | Raise a Charge or Create an Auth |
| [**subsCreatePlan()**](SubscriptionApi.md#subsCreatePlan) | **POST** /plans | Create a Plan |
| [**subsCreateRefund()**](SubscriptionApi.md#subsCreateRefund) | **POST** /subscriptions/{subscription_id}/refunds | Create a Refund |
| [**subsCreateSubscription()**](SubscriptionApi.md#subsCreateSubscription) | **POST** /subscriptions | Create Subscription |
| [**subsFetchPlan()**](SubscriptionApi.md#subsFetchPlan) | **GET** /plans/{plan_id} | Fetch Plan |
| [**subsFetchSubscription()**](SubscriptionApi.md#subsFetchSubscription) | **GET** /subscriptions/{subscription_id} | Fetch Subscription |
| [**subsFetchSubscriptionPayment()**](SubscriptionApi.md#subsFetchSubscriptionPayment) | **GET** /subscriptions/{subscription_id}/payments/{payment_id} | Fetch Details of a Single Payment |
| [**subsFetchSubscriptionPayments()**](SubscriptionApi.md#subsFetchSubscriptionPayments) | **GET** /subscriptions/{subscription_id}/payments | Fetch Details of All Payments of a Subscription |
| [**subsFetchSubscriptionRefund()**](SubscriptionApi.md#subsFetchSubscriptionRefund) | **GET** /subscriptions/{subscription_id}/refunds/{refund_id} | Fetch Details of a Refund |
| [**subsFetchSubscription_0()**](SubscriptionApi.md#subsFetchSubscription_0) | **POST** /subscriptions/charge/{payment_id}/transaction-return-summary/generate | Generate Transaction Return Summary |
| [**subsManageSubscription()**](SubscriptionApi.md#subsManageSubscription) | **POST** /subscriptions/{subscription_id}/manage | Manage Subscription |
| [**subsManageSubscriptionPayment()**](SubscriptionApi.md#subsManageSubscriptionPayment) | **POST** /subscriptions/{subscription_id}/payments/{payment_id}/manage | Manage a Single Payment |
| [**subscriptionDocumentUpload()**](SubscriptionApi.md#subscriptionDocumentUpload) | **POST** /subscriptions/pay/documents/{payment_id} | Upload file for Physical Nach Authorisation |
| [**subscriptionEligibility()**](SubscriptionApi.md#subscriptionEligibility) | **POST** /subscriptions/eligibility/payment_methods | Get All the Payment Method Details Available for Subscription Payments |


## `subsCreatePayment()`

```php
subsCreatePayment($x_api_version, $create_subscription_payment_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\CreateSubscriptionPaymentResponse
```

Raise a Charge or Create an Auth

Use this API to create an auth or to raise a charge.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$create_subscription_payment_request = new \OpenAPI\Client\Model\CreateSubscriptionPaymentRequest(); // \OpenAPI\Client\Model\CreateSubscriptionPaymentRequest | Request body to create a subscription payment.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsCreatePayment($x_api_version, $create_subscription_payment_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsCreatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **create_subscription_payment_request** | [**\OpenAPI\Client\Model\CreateSubscriptionPaymentRequest**](../Model/CreateSubscriptionPaymentRequest.md)| Request body to create a subscription payment. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateSubscriptionPaymentResponse**](../Model/CreateSubscriptionPaymentResponse.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsCreatePlan()`

```php
subsCreatePlan($x_api_version, $create_plan_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PlanEntity
```

Create a Plan

A plan allows your customer to identify the features you offer along with your pricing. You can create plans as per the pricing you support for your services. For each plan, you can set a pre-decided frequency and amount with which they’ll be charged. Example: Netflix Plans : Premium, Basic, Standard, Mobile. Each plan differs and caters for a particular set of audiences.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$create_plan_request = new \OpenAPI\Client\Model\CreatePlanRequest(); // \OpenAPI\Client\Model\CreatePlanRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsCreatePlan($x_api_version, $create_plan_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsCreatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **create_plan_request** | [**\OpenAPI\Client\Model\CreatePlanRequest**](../Model/CreatePlanRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlanEntity**](../Model/PlanEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsCreateRefund()`

```php
subsCreateRefund($x_api_version, $subscription_id, $create_subscription_refund_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionPaymentRefundEntity
```

Create a Refund

This API allows you to create refund on a successful payment. Refund amount can be partial or the full amount of the payment.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$create_subscription_refund_request = new \OpenAPI\Client\Model\CreateSubscriptionRefundRequest(); // \OpenAPI\Client\Model\CreateSubscriptionRefundRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsCreateRefund($x_api_version, $subscription_id, $create_subscription_refund_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsCreateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **create_subscription_refund_request** | [**\OpenAPI\Client\Model\CreateSubscriptionRefundRequest**](../Model/CreateSubscriptionRefundRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPaymentRefundEntity**](../Model/SubscriptionPaymentRefundEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsCreateSubscription()`

```php
subsCreateSubscription($x_api_version, $create_subscription_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionEntity
```

Create Subscription

Use this API to create a new subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$create_subscription_request = new \OpenAPI\Client\Model\CreateSubscriptionRequest(); // \OpenAPI\Client\Model\CreateSubscriptionRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsCreateSubscription($x_api_version, $create_subscription_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsCreateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **create_subscription_request** | [**\OpenAPI\Client\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionEntity**](../Model/SubscriptionEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchPlan()`

```php
subsFetchPlan($x_api_version, $plan_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\PlanEntity
```

Fetch Plan

Use this API to fetch plan details.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$plan_id = plan-id-123; // string | Provide the plan ID for which the details have to be fetched.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchPlan($x_api_version, $plan_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **plan_id** | **string**| Provide the plan ID for which the details have to be fetched. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlanEntity**](../Model/PlanEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchSubscription()`

```php
subsFetchSubscription($x_api_version, $subscription_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionEntity
```

Fetch Subscription

Use this API to fetch subscription details.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchSubscription($x_api_version, $subscription_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionEntity**](../Model/SubscriptionEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchSubscriptionPayment()`

```php
subsFetchSubscriptionPayment($x_api_version, $subscription_id, $payment_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionPaymentEntity
```

Fetch Details of a Single Payment

Use this API to fetch details of a single payment of a subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$payment_id = payment-id-123; // string | Provide the PaymentId using which the payment was created.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchSubscriptionPayment($x_api_version, $subscription_id, $payment_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchSubscriptionPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **payment_id** | **string**| Provide the PaymentId using which the payment was created. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPaymentEntity**](../Model/SubscriptionPaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchSubscriptionPayments()`

```php
subsFetchSubscriptionPayments($x_api_version, $subscription_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionPaymentEntity[]
```

Fetch Details of All Payments of a Subscription

Use this API to fetch all payments of a subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchSubscriptionPayments($x_api_version, $subscription_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchSubscriptionPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPaymentEntity[]**](../Model/SubscriptionPaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchSubscriptionRefund()`

```php
subsFetchSubscriptionRefund($x_api_version, $subscription_id, $refund_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionPaymentRefundEntity
```

Fetch Details of a Refund

Use this API to fetch details of a refund of a subscription payment.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$refund_id = refund-id-123; // string | Provide the PaymentId for which the details have to be fetched.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchSubscriptionRefund($x_api_version, $subscription_id, $refund_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchSubscriptionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **refund_id** | **string**| Provide the PaymentId for which the details have to be fetched. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPaymentRefundEntity**](../Model/SubscriptionPaymentRefundEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsFetchSubscription_0()`

```php
subsFetchSubscription_0($x_api_version, $payment_id, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\TransactionReturnSummary200Response
```

Generate Transaction Return Summary

Use this API to generate transaction return summary for failed transactions (insufficient balance).

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$payment_id = payment-id-123; // string | Provide the PaymentId using which the payment was created.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsFetchSubscription_0($x_api_version, $payment_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsFetchSubscription_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **payment_id** | **string**| Provide the PaymentId using which the payment was created. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionReturnSummary200Response**](../Model/TransactionReturnSummary200Response.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsManageSubscription()`

```php
subsManageSubscription($x_api_version, $subscription_id, $manage_subscription_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionEntity
```

Manage Subscription

Use this API to manage subscriptions. You can cancel, pause, activate, or change the plan associated with a subscription. To update the recurring amount for a periodic subscription: 1. Create a new plan with the revised amount. 2. Use the Manage Subscription API to associate the subscription with the new plan. 3. Include the `CHANGE_PLAN` action and the new `plan_id` in the request body.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$manage_subscription_request = new \OpenAPI\Client\Model\ManageSubscriptionRequest(); // \OpenAPI\Client\Model\ManageSubscriptionRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsManageSubscription($x_api_version, $subscription_id, $manage_subscription_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsManageSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **manage_subscription_request** | [**\OpenAPI\Client\Model\ManageSubscriptionRequest**](../Model/ManageSubscriptionRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionEntity**](../Model/SubscriptionEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subsManageSubscriptionPayment()`

```php
subsManageSubscriptionPayment($x_api_version, $subscription_id, $payment_id, $manage_subscription_payment_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionPaymentEntity
```

Manage a Single Payment

Use this API to manage a payment of a subscription. A payment can be cancelled or retried with this API.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_id = subscription-id-123; // string | Provide the SubscriptionId using which the subscription was created.
$payment_id = payment-id-123; // string | Provide the PaymentId using which the payment was created.
$manage_subscription_payment_request = new \OpenAPI\Client\Model\ManageSubscriptionPaymentRequest(); // \OpenAPI\Client\Model\ManageSubscriptionPaymentRequest
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subsManageSubscriptionPayment($x_api_version, $subscription_id, $payment_id, $manage_subscription_payment_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subsManageSubscriptionPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_id** | **string**| Provide the SubscriptionId using which the subscription was created. | |
| **payment_id** | **string**| Provide the PaymentId using which the payment was created. | |
| **manage_subscription_payment_request** | [**\OpenAPI\Client\Model\ManageSubscriptionPaymentRequest**](../Model/ManageSubscriptionPaymentRequest.md)|  | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionPaymentEntity**](../Model/SubscriptionPaymentEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionDocumentUpload()`

```php
subscriptionDocumentUpload($x_api_version, $payment_id, $file, $payment_id2, $action, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\UploadPnachImageResponse
```

Upload file for Physical Nach Authorisation

Use this API to upload file for Physical Nach Authorization.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$payment_id = payment-id-123; // string | Provide the PaymentId using which the payment was created.
$file = '/path/to/file.txt'; // \SplFileObject | Select the .jpg file that should be uploaded or provide the path of that file. You cannot upload a file that is more than 1MB in size.
$payment_id2 = 'payment_id_example'; // string | Authorization Payment Id for physical nach authorization.
$action = 'action_example'; // string | Action to be performed on the file. Can be SUBMIT_DOCUMENT.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subscriptionDocumentUpload($x_api_version, $payment_id, $file, $payment_id2, $action, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionDocumentUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **payment_id** | **string**| Provide the PaymentId using which the payment was created. | |
| **file** | **\SplFileObject****\SplFileObject**| Select the .jpg file that should be uploaded or provide the path of that file. You cannot upload a file that is more than 1MB in size. | |
| **payment_id2** | **string**| Authorization Payment Id for physical nach authorization. | |
| **action** | **string**| Action to be performed on the file. Can be SUBMIT_DOCUMENT. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UploadPnachImageResponse**](../Model/UploadPnachImageResponse.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionEligibility()`

```php
subscriptionEligibility($x_api_version, $subscription_eligibility_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\SubscriptionEligibilityResponse
```

Get All the Payment Method Details Available for Subscription Payments

Use this API to check if a payment method is enabled for your account.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$subscription_eligibility_request = {"queries":{"subscription_id":"test-subscription-1"},"filters":{"payment_methods":[]}}; // \OpenAPI\Client\Model\SubscriptionEligibilityRequest | Request body to fetch subscription eligibile payment method details.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->subscriptionEligibility($x_api_version, $subscription_eligibility_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **subscription_eligibility_request** | [**\OpenAPI\Client\Model\SubscriptionEligibilityRequest**](../Model/SubscriptionEligibilityRequest.md)| Request body to fetch subscription eligibile payment method details. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionEligibilityResponse**](../Model/SubscriptionEligibilityResponse.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
