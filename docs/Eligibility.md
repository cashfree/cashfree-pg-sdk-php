# Eligibility

Method | HTTP request | Description
------------- | ------------- | -------------
[**PGEligibilityFetchCardlessEMI**](Eligibility.md#PGEligibilityFetchCardlessEMI) | **Post** /eligibility/cardlessemi | Get Eligible Cardless EMI
[**PGEligibilityFetchOffers**](Eligibility.md#PGEligibilityFetchOffers) | **Post** /eligibility/offers | Get Eligible Offers
[**PGEligibilityFetchPaylater**](Eligibility.md#PGEligibilityFetchPaylater) | **Post** /eligibility/paylater | Get Eligible Paylater
[**PGEligibilityFetchPaymentMethods**](Eligibility.md#PGEligibilityFetchPaymentMethods) | **Post** /eligibility/payment_methods | Get Eligible Payment Methods



## PGEligibilityFetchCardlessEMI

> PGEligibilityFetchCardlessEMI($x_api_version, $eligibility_fetch_cardless_emi_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Eligible Cardless EMI ([Docs](https://docs.cashfree.com/reference/pgeligibilityfetchcardlessemi))

### Example

```php
$x_api_version = "2022-09-01";
$customer_details_cardless_emi = new \Cashfree\Model\CustomerDetailsCardlessEMI();
$customer_details_cardless_emi->setCustomerPhone("7330797796");
$cardless_emi_Queries = new \Cashfree\Model\CardlessEMIQueries();
$cardless_emi_Queries->setAmount(10000);
$cardless_emi_Queries->setCustomerDetails($customer_details_cardless_emi);
$eligibility_fetch_cardless_emi_request = new \Cashfree\Model\EligibilityFetchCardlessEMIRequest();
$eligibility_fetch_cardless_emi_request->setQueries($cardless_emi_Queries);
try {
  $result = $cashfree->PGEligibilityFetchCardlessEMI($x_api_version, $create_eligibility_fetch_cardless_emi_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGEligibilityFetchCardlessEMI: ', $e->getMessage(), PHP_EOL;
}
```

###  Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**eligibilityFetchCardlessEMIRequest** | [**EligibilityFetchCardlessEMIRequest***](Eligibility.md#EligibilityFetchCardlessEMIRequest) | Request Body to get eligible cardless emi options for a customer and order | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree |

### Response

```json
[
  {
    "eligibility": true,
    "entity_type": "cardlessemi",
    "entity_value": "idfc",
    "entity_details": {
      "payment_method": "idfc",
      "emi_plans": [
        {
          "tenure": 1,
          "interest_rate": 10,
          "currency": "INR",
          "emi": 400,
          "total_interest": 10,
          "total_amount": 40
        }
      ]
    }
  }
]
```

## PGEligibilityFetchOffers

> PGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Eligible Offers ([Docs](https://docs.cashfree.com/reference/pgeligibilityfetchoffers))

### Example

```php
$x_api_version = "2022-09-01";
$offer_queries = new \Cashfree\Model\OfferQueries();
$offer_queries->setAmount(10000);
$eligibility_fetch_offers_request = new \Cashfree\Model\EligibilityFetchOffersRequest();
$eligibility_fetch_offers_request->setQueries($offer_queries);
try {
  $result = $cashfree->PGEligibilityFetchOffers($x_api_version, $eligibility_fetch_offers_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGEligibilityFetchOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**eligibilityFetchOffersRequest** | [**EligibilityFetchOffersRequest***](EligibilityFetchOffersRequest.md) | Request Body to get eligible offers for a customer and order | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 

### Response

```json
[
  {
    "offer_id": "d2b430fb-1afe-455a-af31-66d00377b29a",
    "offer_status": "active",
    "offer_meta": {
      "offer_title": "some title",
      "offer_description": "some offer description",
      "offer_code": "CFTESTOFFER",
      "offer_start_time": "2023-03-21T08:09:51Z",
      "offer_end_time": "2023-03-29T08:09:51Z"
    },
    "offer_tnc": {
      "offer_tnc_type": "text",
      "offer_tnc_value": "TnC for the Offer."
    },
    "offer_details": {
      "offer_type": "DISCOUNT_AND_CASHBACK",
      "discount_details": {
        "discount_type": "flat",
        "discount_value": "10",
        "max_discount_amount": "10"
      },
      "cashback_details": {
        "cashback_type": "percentage",
        "cashback_value": "20",
        "max_cashback_amount": "150"
      }
    },
    "offer_validations": {
      "min_amount": 10,
      "payment_method": {
        "wallet": {
          "issuer": "paytm"
        }
      },
      "max_allowed": 2
    }
  }
]
```


## PGEligibilityFetchPaylater

> PGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Eligible Paylater ([Docs](https://docs.cashfree.com/reference/pgeligibilityfetchpaylater))



### Example

```php
$x_api_version = "2022-09-01";
$customer_detail = new \Cashfree\Model\CustomerDetailsCardlessEMI();
$customer_detail->setCustomerPhone("8908908901");
$cardless_emi_queries = new \Cashfree\Model\CardlessEMIQueries();
$cardless_emi_queries->setAmount(10000);
$cardless_emi_queries->setCustomerDetails($customer_detail);
$eligibility_fetch_paylater_request = new \Cashfree\Model\EligibilityFetchPaylaterRequest();
$eligibility_fetch_paylater_request->setQueries($cardless_emi_queries);
try {
  $result = $cashfree->PGEligibilityFetchPaylater($x_api_version, $eligibility_fetch_paylater_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGEligibilityFetchPaylater: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**eligibilityFetchPaylaterRequest** | [**EligibilityFetchPaylaterRequest***](EligibilityFetchPaylaterRequest.md) | Request Body to get eligible paylater options for a customer and order | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 

### Response

```json
[
  {
    "eligibility": true,
    "entity_type": "paylater",
    "entity_value": "olapostpaid",
    "entity_details": {
      "payment_method": "olapostpaid"
    }
  }
]
```


## PGEligibilityFetchPaymentMethods

> PGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Eligible Payment Methods ([Docs](https://docs.cashfree.com/reference/pgeligibilityfetchpaymentmethods))



### Example

```php
$x_api_version = "2022-09-01";
$payment_methods_queries = new \Cashfree\Model\PaymentMethodsQueries();
$payment_methods_queries->setAmount(10);
$eligibility_fetch_payment_methods_request = new \Cashfree\Model\EligibilityFetchPaymentMethodsRequest();
$eligibility_fetch_payment_methods_request->setQueries($payment_methods_queries);
try {
  $result = $cashfree->PGEligibilityFetchPaymentMethods($x_api_version, $eligibility_fetch_payment_methods_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGEligibilityFetchPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**eligibilityFetchPaymentMethodsRequest** | [**EligibilityFetchPaymentMethodsRequest***](EligibilityFetchPaymentMethodsRequest.md) | Request Body to get eligible payment methods for an account and order | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 

### Response
```json
[
  {
    "eligibility": true,
    "entity_type": "payment_methods",
    "entity_value": "netbanking",
    "entity_details": {
      "payment_method_details": [
        {
          "nick": "motak_kahindra_bank",
          "display": "Motak Kahindra Bank",
          "eligibility": true,
          "code": 3032
        },
        {
          "nick": "bank_of_india",
          "display": "Bank Of India",
          "eligibility": true,
          "code": 3031
        }
      ]
    }
  }
]
```