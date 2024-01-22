# # CreateLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link_id** | **string** | Unique Identifier (provided by merchant) for the Link. Alphanumeric and only - and _ allowed (50 character limit). Use this for other link-related APIs. |
**link_amount** | **float** | Amount to be collected using this link. Provide upto two decimals for paise. |
**link_currency** | **string** | Currency for the payment link. Default is INR. Contact care@cashfree.com to enable new currencies. |
**link_purpose** | **string** | A brief description for which payment must be collected. This is shown to the customer. |
**customer_details** | [**\Cashfree\Model\LinkCustomerDetailsEntity**](LinkCustomerDetailsEntity.md) |  |
**link_partial_payments** | **bool** | If \&quot;true\&quot;, customer can make partial payments for the link. | [optional]
**link_minimum_partial_amount** | **float** | Minimum amount in first installment that needs to be paid by the customer if partial payments are enabled. This should be less than the link_amount. | [optional]
**link_expiry_time** | **string** | Time after which the link expires. Customers will not be able to make the payment beyond the time specified here. You can provide them in a valid ISO 8601 time format. Default is 30 days. | [optional]
**link_notify** | [**\Cashfree\Model\LinkNotifyEntity**](LinkNotifyEntity.md) |  | [optional]
**link_auto_reminders** | **bool** | If \&quot;true\&quot;, reminders will be sent to customers for collecting payments. | [optional]
**link_notes** | **array<string,string>** | Key-value pair that can be used to store additional information about the entity. Maximum 5 key-value pairs | [optional]
**link_meta** | [**\Cashfree\Model\LinkMetaResponseEntity**](LinkMetaResponseEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
