# # CFRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_amount** | **double** | Amount to be refunded. Should be lesser than or equal to the transaction amount. (Decimals allowed) |
**refund_id** | **string** | An unique ID to associate the refund with. Provie alphanumeric values |
**refund_note** | **string** | A refund note for your reference. | [optional]
**refund_splits** | [**\OpenAPI\Client\Model\CFVendorSplit[]**](CFVendorSplit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
