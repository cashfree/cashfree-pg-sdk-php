# # SimulateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity** | **string** | Entity type should be PAYMENTS, SUBS_PAYMENTS OR VBA_TRANSFER only. |
**entity_id** | **string** | If the entity type is PAYMENTS, the entity_id will be the cf_payment_id. If the entity type is SUBS_PAYMENTS, the entity_id will be the payment_id. If the entity type is VBA_TRANSFER, the entity_id will be the vba_account_number. | [optional]
**entity_simulation** | [**\OpenAPI\Client\Model\EntitySimulationRequest**](EntitySimulationRequest.md) |  | [optional]
**vba_simulation** | [**\OpenAPI\Client\Model\VBASimulationRequest**](VBASimulationRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
