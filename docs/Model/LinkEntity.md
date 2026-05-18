# # LinkEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_link_id** | **string** |  | [optional]
**link_id** | **string** |  | [optional]
**link_status** | **string** |  | [optional]
**link_currency** | **string** |  | [optional]
**link_amount** | **float** |  | [optional]
**link_amount_paid** | **float** |  | [optional]
**link_partial_payments** | **bool** |  | [optional]
**link_minimum_partial_amount** | **float** |  | [optional]
**link_purpose** | **string** |  | [optional]
**link_created_at** | **string** |  | [optional]
**customer_details** | [**\OpenAPI\Client\Model\LinkCustomerDetailsEntity**](LinkCustomerDetailsEntity.md) |  | [optional]
**link_meta** | [**\OpenAPI\Client\Model\LinkMetaResponseEntity**](LinkMetaResponseEntity.md) |  | [optional]
**link_url** | **string** |  | [optional]
**link_expiry_time** | **string** |  | [optional]
**link_notes** | **array<string,string>** | Key-value pair that can be used to store additional information about the entity. Maximum 5 key-value pairs. | [optional]
**link_auto_reminders** | **bool** |  | [optional]
**link_notify** | [**\OpenAPI\Client\Model\LinkNotifyEntity**](LinkNotifyEntity.md) |  | [optional]
**link_qrcode** | **string** | Base64 encoded string for payment link. You can scan with camera to open a link in the browser to complete the payment. | [optional]
**order_splits** | [**\OpenAPI\Client\Model\VendorSplit[]**](VendorSplit.md) |  | [optional]
**subscription** | [**\OpenAPI\Client\Model\LinkSubscriptionEntity**](LinkSubscriptionEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
