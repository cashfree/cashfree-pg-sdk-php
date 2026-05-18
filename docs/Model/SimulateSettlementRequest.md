# # SimulateSettlementRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_order_ids** | **string[]** | A list of orders for which you want to simulate settlement. | [optional]
**txn_time** | **string** | The start time (YYYY-MM-DD HH:mm:ss) from which transactions are picked for simulating settlement. You can pass a &#x60;txnTime&#x60; value for up to the last seven days. | [optional]
**status** | **string** | The simulation status. Possible values are SUCCESS, FAILED or PENDING. | [optional]
**error_reason** | **string** | Specifies the reason for settlement failure. The default value is used if this is not provided. This is required only if the status is FAILED. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
