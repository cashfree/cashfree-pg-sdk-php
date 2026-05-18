# # DisputesEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dispute_id** | **int** |  | [optional]
**dispute_type** | **string** |  | [optional]
**reason_code** | **string** |  | [optional]
**reason_description** | **string** |  | [optional]
**dispute_amount** | **float** | Dispute amount may differ from transaction amount for partial cases. | [optional]
**dispute_amount_currency** | **string** | Dispute amount currency for a dispute. | [optional]
**created_at** | **string** | This is the time when the dispute was created. | [optional]
**respond_by** | **string** | This is the time by which evidence should be submitted to contest the dispute. | [optional]
**updated_at** | **string** | This is the time when the dispute case was updated. | [optional]
**resolved_at** | **string** | This is the time when the dispute case was closed. | [optional]
**dispute_status** | **string** |  | [optional]
**cf_dispute_remarks** | **string** |  | [optional]
**preferred_evidence** | [**\OpenAPI\Client\Model\EvidencesToContestDispute[]**](EvidencesToContestDispute.md) |  | [optional]
**dispute_evidence** | [**\OpenAPI\Client\Model\Evidence[]**](Evidence.md) |  | [optional]
**order_details** | [**\OpenAPI\Client\Model\OrderDetailsInDisputesEntity**](OrderDetailsInDisputesEntity.md) |  | [optional]
**customer_details** | [**\OpenAPI\Client\Model\CustomerDetailsInDisputesEntity**](CustomerDetailsInDisputesEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
