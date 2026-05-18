# # CreateSubscriptionPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_payment_id** | **string** | Cashfree subscription payment reference number. | [optional]
**failure_details** | [**\OpenAPI\Client\Model\SubscriptionPaymentEntityFailureDetails**](SubscriptionPaymentEntityFailureDetails.md) |  | [optional]
**payment_amount** | **float** | The charge amount of the payment. | [optional]
**payment_id** | **string** | A unique ID passed by merchant for identifying the transaction. | [optional]
**payment_initiated_date** | **string** | The date on which the payment was initiated. We store timestamps in IST. | [optional]
**payment_status** | **string** | Status of the payment. | [optional]
**payment_type** | **string** | Payment type. Can be AUTH or CHARGE. | [optional]
**subscription_id** | **string** | A unique ID passed by merchant for identifying the subscription. | [optional]
**data** | **object** | Contains a payload for auth app links in case of AUTH. For charge, the payload is empty. | [optional]
**payment_method** | **string** | Payment method used for the authorisation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
