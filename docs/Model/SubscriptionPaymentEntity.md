# # SubscriptionPaymentEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_details** | [**\OpenAPI\Client\Model\AuthorizationDetails**](AuthorizationDetails.md) |  | [optional]
**cf_payment_id** | **string** | Cashfree subscription payment reference number. | [optional]
**cf_subscription_id** | **string** | Cashfree subscription reference number. | [optional]
**cf_txn_id** | **string** | Cashfree subscription payment transaction ID. | [optional]
**cf_order_id** | **string** | Cashfree subscription payment order ID. | [optional]
**failure_details** | [**\OpenAPI\Client\Model\SubscriptionPaymentEntityFailureDetails**](SubscriptionPaymentEntityFailureDetails.md) |  | [optional]
**payment_amount** | **float** | The charge amount of the payment. | [optional]
**payment_id** | **string** | A unique ID passed by merchant for identifying the transaction. | [optional]
**payment_initiated_date** | **string** | The date on which the payment was initiated. Cashfree stores timestamps in IST. | [optional]
**payment_remarks** | **string** | Payment remarks. | [optional]
**payment_schedule_date** | **string** | The date on which the payment is scheduled to be processed. Cashfree stores timestamps in IST, but you can provide them in a valid ISO 8601 time format.  For IST this &#x60;2025-06-01T10:20:12+05:30&#x60; translates to &#x60;2025-06-01 10:20:12&#x60;    For UTC this &#x60;2025-06-01T10:20:12Z&#x60; translates to &#x60;2025-06-01 15:50:12+05:30&#x60;. | [optional]
**payment_status** | **string** | Status of the payment. | [optional]
**payment_type** | **string** | Payment type. Can be AUTH or CHARGE. | [optional]
**retry_attempts** | **int** | Retry attempts. | [optional]
**subscription_id** | **string** | A unique ID passed by merchant for identifying the subscription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
