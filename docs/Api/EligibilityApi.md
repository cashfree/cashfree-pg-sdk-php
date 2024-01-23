# Cashfree\EligibilityApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGEligibilityFetchCardlessEMI()**](EligibilityApi.md#PGEligibilityFetchCardlessEMI) | **POST** /eligibility/cardlessemi | Get Eligible Cardless EMI Payment Methods for a customer on an order |
| [**PGEligibilityFetchOffers()**](EligibilityApi.md#PGEligibilityFetchOffers) | **POST** /eligibility/offers | Get Eligible Offers for an Order |
| [**PGEligibilityFetchPaylater()**](EligibilityApi.md#PGEligibilityFetchPaylater) | **POST** /eligibility/paylater | Get Eligible Paylater for a customer on an order |
| [**PGEligibilityFetchPaymentMethods()**](EligibilityApi.md#PGEligibilityFetchPaymentMethods) | **POST** /eligibility/payment_methods | Get eligible Payment Methods |


## `PGEligibilityFetchCardlessEMI()`

```php
PGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\EligibilityCardlessEMIEntity[]
```

Get Eligible Cardless EMI Payment Methods for a customer on an order

Use this API to get eligible Cardless EMI Payment Methods available for a customer on an order basis their phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$eligibility_fetch_cardless_emi_request = new \Cashfree\Model\EligibilityFetchCardlessEMIRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->PGEligibilityFetchCardlessEMI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **eligibility_fetch_cardless_emi_request** | [**\Cashfree\Model\EligibilityFetchCardlessEMIRequest**](../Model/EligibilityFetchCardlessEMIRequest.md)| Request Body to get eligible cardless emi options for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\EligibilityCardlessEMIEntity[]**](../Model/EligibilityCardlessEMIEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGEligibilityFetchOffers()`

```php
PGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\EligibilityOfferEntity[]
```

Get Eligible Offers for an Order

Use this API to get eligible offers for an order_id or order amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$eligibility_fetch_offers_request = new \Cashfree\Model\EligibilityFetchOffersRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->PGEligibilityFetchOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **eligibility_fetch_offers_request** | [**\Cashfree\Model\EligibilityFetchOffersRequest**](../Model/EligibilityFetchOffersRequest.md)| Request Body to get eligible offers for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\EligibilityOfferEntity[]**](../Model/EligibilityOfferEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGEligibilityFetchPaylater()`

```php
PGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\EligibilityPaylaterEntity[]
```

Get Eligible Paylater for a customer on an order

Use this API to get eligible Paylater Payment Methods for a customer on an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$eligibility_fetch_paylater_request = new \Cashfree\Model\EligibilityFetchPaylaterRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->PGEligibilityFetchPaylater: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **eligibility_fetch_paylater_request** | [**\Cashfree\Model\EligibilityFetchPaylaterRequest**](../Model/EligibilityFetchPaylaterRequest.md)| Request Body to get eligible paylater options for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\EligibilityPaylaterEntity[]**](../Model/EligibilityPaylaterEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGEligibilityFetchPaymentMethods()`

```php
PGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\EligibilityPaymentMethodsEntity[]
```

Get eligible Payment Methods

Use this API to get eligible Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$eligibility_fetch_payment_methods_request = new \Cashfree\Model\EligibilityFetchPaymentMethodsRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EligibilityApi->PGEligibilityFetchPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **eligibility_fetch_payment_methods_request** | [**\Cashfree\Model\EligibilityFetchPaymentMethodsRequest**](../Model/EligibilityFetchPaymentMethodsRequest.md)| Request Body to get eligible payment methods for an account and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\EligibilityPaymentMethodsEntity[]**](../Model/EligibilityPaymentMethodsEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
