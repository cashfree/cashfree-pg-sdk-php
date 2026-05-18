# # OrderCreateRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_amount** | **float** | Amount to be refunded. Should be lesser than or equal to the transaction amount. (Decimals allowed). |
**refund_id** | **string** | An unique ID to associate the refund with. Provie alphanumeric values. | [optional]
**refund_note** | **string** | A refund note for your reference. To simulate refund status in Sandbox, pass SUCCESS, FAILED, PENDING, or ACTIVE in the refund_note field. This is a case-sensitive parameter. | [optional]
**refund_speed** | **string** | Speed at which the refund is processed. It&#39;s an optional field with default being STANDARD. | [optional]
**refund_splits** | [**\OpenAPI\Client\Model\OrderCreateRefundRequestRefundSplitsInner[]**](OrderCreateRefundRequestRefundSplitsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
