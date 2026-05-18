# # CreateSubscriptionRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_payment_id** | **float** | Cashfree subscription payment reference number. | [optional]
**subscription_id** | **string** | A unique ID passed by merchant for identifying the subscription. |
**payment_id** | **string** | A unique ID passed by merchant for identifying the transaction. |
**refund_id** | **string** | A unique ID passed by merchant for identifying the refund. |
**refund_amount** | **float** | The amount to be refunded. Can be partial or full amount of the payment. |
**refund_note** | **string** | Refund note for merchant reference. To simulate refund status in Sandbox, pass SUCCESS, FAILED, PENDING, or ACTIVE in the refund_note field. This is a case-sensitive parameter. | [optional]
**refund_speed** | **string** | Refund speed. Can be INSTANT or STANDARD. UPI supports only STANDARD refunds, Enach and Pnach supports only INSTANT refunds. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
