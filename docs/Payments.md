# Payments

Method | HTTP request | Description
------------- | ------------- | -------------
[**PGOrderFetchPayment**](Payments.md#PGOrderFetchPayment) | **Get** /orders/{order_id}/payments/{cf_payment_id} | Get Payment by ID
[**PGOrderFetchPayments**](Payments.md#PGOrderFetchPayments) | **Get** /orders/{order_id}/payments | Get Payments for an Order
[**PGPayOrder**](Payments.md#PGPayOrder) | **Post** /orders/sessions | Order Pay
[**PGAuthorizeOrder**](Payments.md#PGAuthorizeOrder) | **Post** /orders/{order_id}/authorization | Preauthorization
[**PGOrderAuthenticatePayment**](Payments.md#PGOrderAuthenticatePayment) | **Post** /orders/pay/authenticate/{cf_payment_id} | Submit or Resend OTP


## PGOrderFetchPayment

> PGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Payment by ID ([Docs](https://docs.cashfree.com/reference/pgorderfetchpayment))



### Example

```php
$order_id = "order_id";
$cf_payment_id = "cf_payment_id";
try {
  $result = $cashfree->PGOrderFetchPayment($x_api_version, $order_id, $cf_payment_id, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderFetchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**orderId** | **string*** | The id which uniquely identifies your order | 
**cfPaymentId** | **string*** | The Cashfree payment or transaction ID. | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
{
  "cf_payment_id": 12376123,
  "order_id": "order_8123",
  "entity": "payment",
  "payment_currency": "INR",
  "error_details": null,
  "order_amount": 10.01,
  "is_captured": true,
  "payment_group": "upi",
  "authorization": {
    "action": "CAPTURE",
    "status": "PENDING",
    "captured_amount": 100,
    "start_time": "2022-02-09T18:04:34+05:30",
    "end_time": "2022-02-19T18:04:34+05:30",
    "approve_by": "2022-02-09T18:04:34+05:30",
    "action_reference": "6595231908096894505959",
    "action_time": "2022-08-03T16:09:51"
  },
  "payment_method": {
    "upi": {
      "channel": "collect",
      "upi_id": "rohit@xcxcx"
    }
  },
  "payment_amount": 10.01,
  "payment_time": "2021-07-23T12:15:06+05:30",
  "payment_completion_time": "2021-07-23T12:18:59+05:30",
  "payment_status": "SUCCESS",
  "payment_message": "Transaction successful",
  "bank_reference": "P78112898712",
  "auth_id": "A898101"
}
```



## PGOrderFetchPayments

> PGOrderFetchPayments($x_api_version, $order_id, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Payments for an Order ([Docs](https://docs.cashfree.com/reference/pgorderfetchpayments))



### Example

```php
$order_id = "order00002";
try {
  $result = $cashfree->PGOrderFetchPayments($x_api_version, $order_id, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderFetchPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**orderId** | **string*** | The id which uniquely identifies your order | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
[
  {
    "cf_payment_id": 12376123,
    "order_id": "order_8123",
    "entity": "payment",
    "payment_currency": "INR",
    "error_details": null,
    "order_amount": 10.01,
    "is_captured": true,
    "payment_group": "upi",
    "authorization": {
      "action": "CAPTURE",
      "status": "PENDING",
      "captured_amount": 100,
      "start_time": "2022-02-09T18:04:34+05:30",
      "end_time": "2022-02-19T18:04:34+05:30",
      "approve_by": "2022-02-09T18:04:34+05:30",
      "action_reference": "6595231908096894505959",
      "action_time": "2022-08-03T16:09:51"
    },
    "payment_method": {
      "upi": {
        "channel": "collect",
        "upi_id": "rohit@xcxcx"
      }
    },
    "payment_amount": 10.01,
    "payment_time": "2021-07-23T12:15:06+05:30",
    "payment_completion_time": "2021-07-23T12:18:59+05:30",
    "payment_status": "SUCCESS",
    "payment_message": "Transaction successful",
    "bank_reference": "P78112898712",
    "auth_id": "A898101"
  },
  {
    "cf_payment_id": 12376124,
    "order_id": "order_8123",
    "entity": "payment",
    "payment_currency": "INR",
    "error_details": {
      "error_code": "TRANSACTION_DECLINED",
      "error_description": "issuer bank or payment service provider declined the transaction",
      "error_reason": "auth_declined",
      "error_source": "customer"
    },
    "order_amount": 10.01,
    "is_captured": true,
    "payment_group": "credit_card",
    "authorization": null,
    "payment_method": {
      "card": {
        "channel": "link",
        "card_number": "xxxxxx1111"
      }
    },
    "payment_amount": 10.01,
    "payment_time": "2021-07-23T12:15:06+05:30",
    "payment_completion_time": "2021-07-23T12:18:59+05:30",
    "payment_status": "FAILED",
    "payment_message": "Transaction failed",
    "bank_reference": "P78112898712",
    "auth_id": "A898101"
  }
]
```

## PGPayOrder

> PGPayOrder($x_api_version, $pay_order_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Order Pay ([Docs](https://docs.cashfree.com/reference/pgpayorder))

## Example
#### Card
```php
$card_detail = new \Cashfree\Model\Card();
$card_detail->setChannel("link");
$card_detail->setCardHolderName("Test");
$card_detail->setCardNumber("4111111111111111");
$card_detail->setCardExpiryMm("12");
$card_detail->setCardExpiryYy("30");
$card_detail->setCardCvv("123");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($card_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
try {
  $result = $cashfree->PGPayOrder($x_api_version, $pay_order_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGPayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payOrderRequest** | **PayOrderRequest*** | Request body to create a transaction at cashfree using &#x60;payment_session_id&#x60; | 
 **xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
 **xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 
 

#### Netbanking
```php
$net_banking_detail = new \Cashfree\Model\Netbanking();
$net_banking_detail->setChannel("link");
$net_banking_detail->setNetbankingBankCode(3021);
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($net_banking_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### UPI
```php
$upi_detail = new \Cashfree\Model\Upi();
$upi_detail->setChannel("collect");
$upi_detail->setUpiId("testsuccess@gocash");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($upi_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### UPI
```php
$upi_detail = new \Cashfree\Model\Upi();
$upi_detail->setChannel("link");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($upi_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### QR
```php
$upi_detail = new \Cashfree\Model\Upi();
$upi_detail->setChannel("qrcode");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($upi_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### Wallet
```php
$app_detail = new \Cashfree\Model\App();
$app_detail->setChannel("link");
$app_detail->setProvider("phonepe");
$app_detail->setPhone("8474090589");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($app_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### Card (with saving it)
```php
$card_detail = new \Cashfree\Model\Card();
$card_detail->setChannel("link");
$card_detail->setCardHolderName("Test");
$card_detail->setCardNumber("4111111111111111");
$card_detail->setCardExpiryMm("12");
$card_detail->setCardExpiryYy("30");
$card_detail->setCardCvv("123");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($card_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
$pay_order_request->setSaveInstrument(true);
```

#### Card with saved instrument
```php
$card_detail = new \Cashfree\Model\Card();
$card_detail->setChannel("link");
$card_detail->setInstrumentId("54deabb4-ba45-4a60-9e6a-9c016fe7ab10");
$card_detail->setCardCvv("123");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($card_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### Card (with native otp)
```php
$card_detail = new \Cashfree\Model\Card();
$card_detail->setChannel("post");
$card_detail->setCardHolderName("Test");
$card_detail->setCardNumber("4111111111111111");
$card_detail->setCardExpiryMm("12");
$card_detail->setCardExpiryYy("30");
$card_detail->setCardCvv("123");
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($card_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

#### EMI
```php
$card_emi_detail = new \Cashfree\Model\CardEMI();
$card_emi_detail->setChannel("link");
$card_emi_detail->setCardHolderName("Test");
$card_emi_detail->setCardNumber("4111111111111111");
$card_emi_detail->setCardExpiryMm("12");
$card_emi_detail->setCardExpiryYy("30");
$card_emi_detail->setCardCvv("123");
$card_emi_detail->setCardBankName("ICICI");
$card_emi_detail->setEmiTenure(3);
$payment_method_detail = new \Cashfree\Model\PayOrderRequestPaymentMethod();
$payment_method_detail->setCard($card_emi_detail);
$pay_order_request = new \Cashfree\Model\PayOrderRequest();
$pay_order_request->setPaymentSessionId("session_z7NWGEFJ9iW3au9z8AaEwPWhH_sloNFZnDDZ-Sif9J7WeN3WNCAs363gyzoDwMyhlID0VitGkCPjl37Wmzis6UZzLECYWpClQsv7x0lm--Iw");
$pay_order_request->setPaymentMethod($payment_method_detail);
```

### Response
```json
{
  "payment_method": "card",
  "channel": "link",
  "action": "link",
  "cf_payment_id": 91235,
  "payment_amount": 22.42,
  "data": {
    "url": "https://sandbox.cashfree.com/pg/view/gateway/FHsuvhayLM5mmhINoqri7ba296e2ebca8b98e6119f6223021a13",
    "payload": {
      "name": "card"
    },
    "content_type": "application/x-www-form-urlencoded",
    "method": "post"
  }
}
```

## PGAuthorizeOrder

> PGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Preauthorization ([Docs](https://docs.cashfree.com/reference/pgauthorizeorder))

### Example

```php
$authorize_order_request = new \Cashfree\Model\AuthorizeOrderRequest();
$authorize_order_request->setAction("CAPTURE");
$authorize_order_request->setAmount(1);
$order_id = "order_342WhBoQTXIsQsc75BGEAVKY5QLWF";
try {
  $result = $cashfree->PGAuthorizeOrder($x_api_version, $order_id, $authorize_order_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGAuthorizeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string*** | The id which uniquely identifies your order | 
 **authorizeOrderRequest** | **AuthorizeOrderRequest*** | Request to Capture or Void Transactions |
 **xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
 **xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 
 

### Response
```json
{
  "cf_payment_id": 12376123,
  "order_id": "order_8123",
  "entity": "payment",
  "payment_currency": "INR",
  "error_details": null,
  "order_amount": 10.01,
  "is_captured": true,
  "payment_group": "upi",
  "authorization": {
    "action": "CAPTURE",
    "status": "PENDING",
    "captured_amount": 100,
    "start_time": "2022-02-09T18:04:34+05:30",
    "end_time": "2022-02-19T18:04:34+05:30",
    "approve_by": "2022-02-09T18:04:34+05:30",
    "action_reference": "6595231908096894505959",
    "action_time": "2022-08-03T16:09:51"
  },
  "payment_method": {
    "upi": {
      "channel": "collect",
      "upi_id": "rohit@xcxcx"
    }
  },
  "payment_amount": 10.01,
  "payment_time": "2021-07-23T12:15:06+05:30",
  "payment_completion_time": "2021-07-23T12:18:59+05:30",
  "payment_status": "SUCCESS",
  "payment_message": "Transaction successful",
  "bank_reference": "P78112898712",
  "auth_id": "A898101"
}
```


## PGOrderAuthenticatePayment

> PGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Submit or Resend OTP ([Docs](https://docs.cashfree.com/reference/pgorderauthenticatepayment))

### Example

```php
$order_authenticate_payment_request = new \Cashfree\Model\OrderAuthenticatePaymentRequest();
$order_authenticate_payment_request->setOtp("111000");
$order_authenticate_payment_request->setAction("SUBMIT_OTP"); // or RESEND_OTP
$cf_payment_id = "cf_payment_id";
try {
  $result = $cashfree->PGOrderAuthenticatePayment($x_api_version, $cf_payment_id, $order_authenticate_payment_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderAuthenticatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cfPaymentId** | **string*** | The Cashfree payment or transaction ID. | 
**xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**orderAuthenticatePaymentRequest** | **OrderAuthenticatePaymentRequest*** | Request body to submit/resend headless OTP. To use this API make sure you have headless OTP enabled for your account | 
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
{
  "cf_payment_id": 975654863,
  "authenticate_status": "FAILED",
  "action": "SUBMIT_OTP",
  "payment_message": "otp is invalid"
}
```