# Refunds

Method | HTTP request | Description
------------- | ------------- | -------------
[**PGOrderCreateRefund**](Refunds.md#PGOrderCreateRefund) | **Post** /orders/{order_id}/refunds | Create Refund
[**PGOrderFetchRefund**](Refunds.md#PGOrderFetchRefund) | **Get** /orders/{order_id}/refunds/{refund_id} | Get Refund
[**PGOrderFetchRefunds**](Refunds.md#PGOrderFetchRefunds) | **Get** /orders/{order_id}/refunds | Get All Refunds for an Order

## PGOrderCreateRefund

> PGOrderCreateRefund($x_api_version, $order_id, $order_create_refund_request, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Create Refund ([Docs](https://docs.cashfree.com/reference/pgordercreaterefund))

### Example

```php
$x_api_version = "2022-09-01";
$refund_orders_request = new \Cashfree\Model\OrderCreateRefundRequest();
$refund_orders_request->setRefundId("wcrefund012");
$refund_orders_request->setRefundAmount(1.00);
$order_id = "bbfa_101";
try {
  $result = $cashfree->PGOrderCreateRefund($x_api_version, $order_id, $refund_orders_request, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderCreateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**orderId** | **string*** | The id which uniquely identifies your order | 
 **xApiVersion** | **string*** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
 **orderCreateRefundRequest** | [**OrderCreateRefundRequest***](Refunds.md#OrderCreateRefundRequest) | Request Body to Create Refunds |
 **xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 
 
 
#### OrderCreateRefundRequest
Name | Type | Description  | Example
------------- | ------------- | ------------- | -------------
**refund_amount** | **double*** | Amount to be refunded. Should be lesser than or equal to the transaction amount. (Decimals allowed) | 1.0
**refund_id** | **string*** | An unique ID to associate the refund with. Provie alphanumeric values | refund_id_1888
**refund_note** | **string** | A refund note for your reference. | Initiating a refund from Node SDK
**refund_speed** | **string** | Speed at which the refund is processed. It's an optional field with default being STANDARD | STANDARD or INSTANT
**refund_splits** | **object[]** | If at all the refund has to be split between multiple vendors

#### RefundSplits
Name | Type | Description  | Example
------------- | ------------- | ------------- | -------------
**vendor_id** | **string** | Vendor id created in Cashfree system | vendor_01
**amount** | **double** | Amount which will be associated with this vendor | 1.0
**percentage** | **double** | Percentage of order amount which shall get added to vendor account | 25
 
### Response

```json
{
  "cf_payment_id": 2388816360,
  "cf_refund_id": "refund_40564529",
  "created_at": "2024-01-11T16:58:06+05:30",
  "entity": "refund",
  "metadata": null,
  "order_id": "order_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "processed_at": null,
  "refund_amount": 1,
  "refund_arn": null,
  "refund_charge": 0,
  "refund_currency": "INR",
  "refund_id": "refund_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "refund_mode": null,
  "refund_note": null,
  "refund_speed": {
    "requested": "STANDARD",
    "accepted": "STANDARD",
    "processed": null,
    "message": null
  },
  "refund_splits": [],
  "refund_status": "PENDING",
  "refund_type": "MERCHANT_INITIATED",
  "status_description": "In Progress"
}
```

## PGOrderFetchRefund

> PGOrderFetchRefund($x_api_version, $order_id, $refund_id, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get Refund ([Docs](https://docs.cashfree.com/reference/pgorderfetchrefund))

### Example

```php
$x_api_version = "2022-09-01";
$refund_id = "wcrefund012";
$order_id = "bbfa_101";
try {
  $result = $cashfree->PGOrderFetchRefund($x_api_version, $order_id, $refund_id, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderFetchRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**orderId** | **string** | The id which uniquely identifies your order | 
**refundId** | **string** | Refund Id of the refund you want to fetch. | 
**xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
{
  "cf_payment_id": 2388816360,
  "cf_refund_id": "refund_40564529",
  "created_at": "2024-01-11T16:58:06+05:30",
  "entity": "refund",
  "metadata": null,
  "order_id": "order_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "processed_at": null,
  "refund_amount": 1,
  "refund_arn": null,
  "refund_charge": 0,
  "refund_currency": "INR",
  "refund_id": "refund_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "refund_mode": null,
  "refund_note": null,
  "refund_speed": {
    "requested": "STANDARD",
    "accepted": "STANDARD",
    "processed": null,
    "message": null
  },
  "refund_splits": [],
  "refund_status": "PENDING",
  "refund_type": "MERCHANT_INITIATED",
  "status_description": "In Progress"
}
```

## PGOrderFetchRefunds

> PGOrderFetchRefunds($x_api_version, $order_id, $x_request_id = null, $x_idempotency_key = null, GuzzleHttp\Client $http_client = null)

Get All Refunds for an Order ([Docs](https://docs.cashfree.com/reference/pgorderfetchrefunds))



### Example

```php
$x_api_version = "2022-09-01";
$order_id = "bbfa_101";
try {
  $result = $cashfree->PGOrderFetchRefunds($x_api_version, $order_id, null, null, null);
} catch (Exception $e) {
  echo 'Exception when calling PGOrderFetchRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**orderId** | **string** | The id which uniquely identifies your order | 
**xApiVersion** | **string** | API version to be used. Format is in YYYY-MM-DD | [default to &quot;2022-09-01&quot;]
**xRequestId** | **string** | Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | 


### Response
```json
[
  {
  "cf_payment_id": 2388816360,
  "cf_refund_id": "refund_40564529",
  "created_at": "2024-01-11T16:58:06+05:30",
  "entity": "refund",
  "metadata": null,
  "order_id": "order_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "processed_at": null,
  "refund_amount": 1,
  "refund_arn": null,
  "refund_charge": 0,
  "refund_currency": "INR",
  "refund_id": "refund_145082ao5HaUJOvfXKfdQwZ3A1jy5Pq8",
  "refund_mode": null,
  "refund_note": null,
  "refund_speed": {
    "requested": "STANDARD",
    "accepted": "STANDARD",
    "processed": null,
    "message": null
  },
  "refund_splits": [],
  "refund_status": "PENDING",
  "refund_type": "MERCHANT_INITIATED",
  "status_description": "In Progress"
}
]
```