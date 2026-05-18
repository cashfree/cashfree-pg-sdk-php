# # OrderAuthenticateEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_payment_id** | **string** | Cashfree payment ID for which this request was sent. | [optional]
**action** | **string** | The action that was requested. | [optional]
**authenticate_status** | **string** | Status of this action - will be either success or failed. If the action is success, you should still call [payment status API](https://www.cashfree.com/docs/api-reference/payments/latest/payments/get) to verify the final payment status. | [optional]
**payment_message** | **string** | Human readable message which describes the status in more detail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
