# Cashfree\OffersApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**PGCreateOffer()**](OffersApi.md#PGCreateOffer) | **POST** /offers | Create Offer |
| [**PGFetchOffer()**](OffersApi.md#PGFetchOffer) | **GET** /offers/{offer_id} | Get Offer by ID |


## `PGCreateOffer()`

```php
PGCreateOffer($x_api_version, $create_offer_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\OfferEntity
```

Create Offer

Use this API to create offers with Cashfree from your backend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$create_offer_request = new \Cashfree\Model\CreateOfferRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGCreateOffer($x_api_version, $create_offer_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->PGCreateOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **create_offer_request** | [**\Cashfree\Model\CreateOfferRequest**](../Model/CreateOfferRequest.md)| Request body to create an offer at Cashfree | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OfferEntity**](../Model/OfferEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `PGFetchOffer()`

```php
PGFetchOffer($x_api_version, $offer_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\OfferEntity
```

Get Offer by ID

Use this API to get offer by offer_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$offer_id = d2b430fb-1afe-455a-af31-66d00377b29a;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->PGFetchOffer($x_api_version, $offer_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->PGFetchOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **offer_id** | **string**| The offer ID for which you want to view the offer details. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\OfferEntity**](../Model/OfferEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
