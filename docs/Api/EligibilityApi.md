# OpenAPI\Client\EligibilityApi

Collection of APIs to check eligibile entities - payment methods, offer, affordibility.

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pGEligibilityFetchCardlessEMI()**](EligibilityApi.md#pGEligibilityFetchCardlessEMI) | **POST** /eligibility/cardlessemi | Get Eligible Cardless EMI Payment Methods for a customer on an order |
| [**pGEligibilityFetchOffers()**](EligibilityApi.md#pGEligibilityFetchOffers) | **POST** /eligibility/offers | Get Eligible Offers for an Order |
| [**pGEligibilityFetchPaylater()**](EligibilityApi.md#pGEligibilityFetchPaylater) | **POST** /eligibility/paylater | Get Eligible Paylater for a customer on an order |
| [**pGEligibilityFetchPaymentMethods()**](EligibilityApi.md#pGEligibilityFetchPaymentMethods) | **POST** /eligibility/payment_methods | Get eligible Payment Methods |


## `pGEligibilityFetchCardlessEMI()`

```php
pGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\EligibilityCardlessEMIEntity[]
```

Get Eligible Cardless EMI Payment Methods for a customer on an order

Use this API to get eligible Cardless EMI Payment Methods available for a customer on an order basis their phone number.

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


$apiInstance = new OpenAPI\Client\Api\EligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$eligibility_fetch_cardless_emi_request = new \OpenAPI\Client\Model\EligibilityFetchCardlessEMIRequest(); // \OpenAPI\Client\Model\EligibilityFetchCardlessEMIRequest | Request Body to get eligible cardless emi options for a customer and order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->pGEligibilityFetchCardlessEMI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **eligibility_fetch_cardless_emi_request** | [**\OpenAPI\Client\Model\EligibilityFetchCardlessEMIRequest**](../Model/EligibilityFetchCardlessEMIRequest.md)| Request Body to get eligible cardless emi options for a customer and order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EligibilityCardlessEMIEntity[]**](../Model/EligibilityCardlessEMIEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGEligibilityFetchOffers()`

```php
pGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\EligibilityOfferEntity[]
```

Get Eligible Offers for an Order

Use this API to get eligible offers for an order_id or order amount.

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


$apiInstance = new OpenAPI\Client\Api\EligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$eligibility_fetch_offers_request = new \OpenAPI\Client\Model\EligibilityFetchOffersRequest(); // \OpenAPI\Client\Model\EligibilityFetchOffersRequest | Request Body to get eligible offers for a customer and order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->pGEligibilityFetchOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **eligibility_fetch_offers_request** | [**\OpenAPI\Client\Model\EligibilityFetchOffersRequest**](../Model/EligibilityFetchOffersRequest.md)| Request Body to get eligible offers for a customer and order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EligibilityOfferEntity[]**](../Model/EligibilityOfferEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGEligibilityFetchPaylater()`

```php
pGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, $x_request_id, $x_idempotency_key): \OpenAPI\Client\Model\EligibilityPaylaterEntity[]
```

Get Eligible Paylater for a customer on an order

Use this API to get eligible Paylater Payment Methods for a customer on an order.

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


$apiInstance = new OpenAPI\Client\Api\EligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$eligibility_fetch_paylater_request = new \OpenAPI\Client\Model\EligibilityFetchPaylaterRequest(); // \OpenAPI\Client\Model\EligibilityFetchPaylaterRequest | Request Body to get eligible paylater options for a customer and order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.

try {
    $result = $apiInstance->pGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->pGEligibilityFetchPaylater: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **eligibility_fetch_paylater_request** | [**\OpenAPI\Client\Model\EligibilityFetchPaylaterRequest**](../Model/EligibilityFetchPaylaterRequest.md)| Request Body to get eligible paylater options for a customer and order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EligibilityPaylaterEntity[]**](../Model/EligibilityPaylaterEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pGEligibilityFetchPaymentMethods()`

```php
pGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, $x_request_id, $x_idempotency_key, $x_client_device, $x_client_os, $x_client_rendering_type, $x_client_browser): \OpenAPI\Client\Model\EligibilityPaymentMethodsEntity[]
```

Get eligible Payment Methods

Use this API to get eligible Payment Methods.

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


$apiInstance = new OpenAPI\Client\Api\EligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = 2026-01-01; // string | API version to be used. Format is in YYYY-MM-DD.
$eligibility_fetch_payment_methods_request = new \OpenAPI\Client\Model\EligibilityFetchPaymentMethodsRequest(); // \OpenAPI\Client\Model\EligibilityFetchPaymentMethodsRequest | Request Body to get eligible payment methods for an account and order.
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002; // string | Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree.
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002; // string | An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions.
$x_client_device = mobile; // string | The type of device on which the payment is initiated.
$x_client_os = android; // string | The operating system of the client device used to make the payment.
$x_client_rendering_type = mweb; // string | Indicates how the payment experience is rendered to the user. - mweb – Payment rendered in a mobile browser (browser on a mobile device) - webview – Payment rendered inside an in-app browser (WebView within a merchant app) - native – Payment rendered natively within the merchant’s mobile app using SDKs.
$x_client_browser = safari; // string | The browser used to initiate the payment.

try {
    $result = $apiInstance->pGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, $x_request_id, $x_idempotency_key, $x_client_device, $x_client_os, $x_client_rendering_type, $x_client_browser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->pGEligibilityFetchPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD. | [default to &#39;2026-01-01&#39;] |
| **eligibility_fetch_payment_methods_request** | [**\OpenAPI\Client\Model\EligibilityFetchPaymentMethodsRequest**](../Model/EligibilityFetchPaymentMethodsRequest.md)| Request Body to get eligible payment methods for an account and order. | |
| **x_request_id** | **string**| Request ID for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to Cashfree. | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |
| **x_client_device** | **string**| The type of device on which the payment is initiated. | [optional] |
| **x_client_os** | **string**| The operating system of the client device used to make the payment. | [optional] |
| **x_client_rendering_type** | **string**| Indicates how the payment experience is rendered to the user. - mweb – Payment rendered in a mobile browser (browser on a mobile device) - webview – Payment rendered inside an in-app browser (WebView within a merchant app) - native – Payment rendered natively within the merchant’s mobile app using SDKs. | [optional] |
| **x_client_browser** | **string**| The browser used to initiate the payment. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EligibilityPaymentMethodsEntity[]**](../Model/EligibilityPaymentMethodsEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
