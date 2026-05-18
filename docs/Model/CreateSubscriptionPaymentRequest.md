# # CreateSubscriptionPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **string** | A unique ID passed by merchant for identifying the subscription. |
**subscription_session_id** | **string** | Session ID for the subscription. Required only for Auth. | [optional]
**payment_id** | **string** | A unique ID passed by merchant for identifying the subscription payment. |
**payment_amount** | **float** | The charge amount of the payment. Required in case of charge. | [optional]
**payment_schedule_date** | **string** | The date on which the payment is scheduled to be processed. This field is required for UPI and CARD payment modes. Cashfree stores timestamps in IST, but you can provide them in a valid ISO 8601 time format. For IST this &#x60;2025-06-01T10:20:12+05:30&#x60; translates to &#x60;2025-06-01 10:20:12&#x60;. For UTC this &#x60;2025-06-01T10:20:12Z&#x60; translates to &#x60;2025-06-01 15:50:12+05:30&#x60;.   Please note that only the date component is considered. Any time value provided will be ignored. | [optional]
**payment_remarks** | **string** | Payment remarks. | [optional]
**payment_type** | **string** | Payment type. Can be AUTH or CHARGE. |
**payment_method** | [**\OpenAPI\Client\Model\CreateSubscriptionPaymentRequestPaymentMethod**](CreateSubscriptionPaymentRequestPaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
