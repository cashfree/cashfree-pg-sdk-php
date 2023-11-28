# Cashfree\EligibilityApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGEligibilityFetchCardlessEMI()**](EligibilityApi.md#PGEligibilityFetchCardlessEMI) | **POST** /eligibility/cardlessemi | Get Eligible Cardless EMI |
| [**PGEligibilityFetchOffers()**](EligibilityApi.md#PGEligibilityFetchOffers) | **POST** /eligibility/offers | Get Eligible Offers |
| [**PGEligibilityFetchPaylater()**](EligibilityApi.md#PGEligibilityFetchPaylater) | **POST** /eligibility/paylater | Get Eligible Paylater |
| [**PGEligibilityFetchPaymentMethods()**](EligibilityApi.md#PGEligibilityFetchPaymentMethods) | **POST** /eligibility/payment_methods | Get Eligible Payment Methods |


## `PGEligibilityFetchCardlessEMI()`

```php
PGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\EligibilityCardlessEMIEntity[]
```

Get Eligible Cardless EMI

Use this API to get eligible Cardless EMI Payment Methods available for a customer on an order basis their phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **eligibility_fetch_cardless_emi_request** | [**\Cashfree\Model\EligibilityFetchCardlessEMIRequest**](../Model/EligibilityFetchCardlessEMIRequest.md)| Request Body to get eligible cardless emi options for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

Get Eligible Offers

Use this API to get eligible offers for an order_id or order amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **eligibility_fetch_offers_request** | [**\Cashfree\Model\EligibilityFetchOffersRequest**](../Model/EligibilityFetchOffersRequest.md)| Request Body to get eligible offers for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

Get Eligible Paylater

Use this API to get eligible Paylater Payment Methods for a customer on an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **eligibility_fetch_paylater_request** | [**\Cashfree\Model\EligibilityFetchPaylaterRequest**](../Model/EligibilityFetchPaylaterRequest.md)| Request Body to get eligible paylater options for a customer and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

Get Eligible Payment Methods

Use this API to get eligible Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **eligibility_fetch_payment_methods_request** | [**\Cashfree\Model\EligibilityFetchPaymentMethodsRequest**](../Model/EligibilityFetchPaymentMethodsRequest.md)| Request Body to get eligible payment methods for an account and order | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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
