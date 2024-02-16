# Offers

Method | HTTP request | Description
------------- | ------------- | -------------
[**PGCreateOffer**](Offers.md#PGCreateOffer) | **Post** /offers | Create Offer
[**PGFetchOffer**](Offers.md#PGFetchOffer) | **Get** /offers/{offer_id} | Get Offer by ID



## PGCreateOffer

> PGCreateOffer($x_api_version, $create_offer_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Create Offer ([Docs](https://docs.cashfree.com/reference/pgcreateoffer))



### Example

```php
$x_api_version = "2022-09-01";
$offer_meta = new \Cashfree\Model\OfferMeta();
$offer_meta->setOfferTitle("Test Offer");
$offer_meta->setOfferDescription("Offer Description");
$offer_meta->setOfferCode("CFTESTOFFER");
$offer_meta->setOfferStartTime("2023-03-21T08:09:51Z");
$offer_meta->setOfferEndTime("2024-03-21T08:09:51Z");
$offer_tnc = new \Cashfree\Model\OfferTnc();
$offer_tnc->setOfferTncType("text");
$offer_tnc->setOfferTncValue("Terms and Condition of the Offer");
$discount_details = new \Cashfree\Model\DiscountDetails();
$discount_details->setDiscountType("flat");
$discount_details->setDiscountValue("10");
$discount_details->setMaxDiscountAmount("10");
$cashback_details = new \Cashfree\Model\CashbackDetails();
$cashback_details->setCashbackType("percentage");
$cashback_details->setCashbackValue("10");
$cashback_details->setMaxCashbackAmount("10");
$offer_detail = new \Cashfree\Model\OfferDetails();
$offer_detail->setOfferType("DISCOUNT_AND_CASHBACK");
$offer_detail->setDiscountDetails($discount_details);
$offer_detail->setCashbackDetails($cashback_details);
$card_offer = new \Cashfree\Model\CardOffer();
$card_offer->setType(["cc"]);
$card_offer->setBankName("hdfc bank");
$card_offer->setSchemeName(["visa"]);
$payment_method = new \Cashfree\Model\CardPaymentMethod();
$payment_method->setCard($card_offer);
$offer_validations = new \Cashfree\Model\OfferValidations();
$offer_validations->setMinAmount(15);
$offer_validations->setMaxAllowed(100);
$offer_validations->setPaymentMethod($payment_method);
$create_offer_request = new \Cashfree\Model\CreateOfferRequest();
$create_offer_request->setOfferMeta($offer_meta);
$create_offer_request->setOfferTnc($offer_tnc);
$create_offer_request->setOfferDetails($offer_detail);
$create_offer_request->setOfferValidations($offer_validations);

try {
  $result = $cashfree->PGCreateOffer($x_api_version, $create_offer_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGCreateOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**createOfferRequest** | **CreateOfferRequest*** | Request body to create an offer at Cashfree | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
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
```


## PGFetchOffer

> PGFetchOffer($x_api_version, $offer_id, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Offer by ID ([Docs](https://docs.cashfree.com/reference/pgfetchoffer))



### Example

```php
$offer_id = "8a9e4cbe-7453-4f7b-903e-c8d0d097ed7c";
try {
  $result = $cashfree->PGFetchOffer($x_api_version, $offer_id, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGFetchOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**offerId** | **string** | The offer ID for which you want to view the offer details. | 
**xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
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
```