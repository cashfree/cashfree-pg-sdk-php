# # CreateLinkPlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_id** | **string** | Unique ID to identify the plan. Only alpha-numerics, dot, hyphen and underscore allowed. |
**plan_name** | **string** | Name of the plan. |
**plan_type** | **string** | Type of the plan. Possible values - PERIODIC, ON_DEMAND. |
**plan_currency** | **string** | Currency of the plan. | [optional]
**plan_amount** | **float** | The amount to be charged for PERIODIC plan. This is a conditional parameter, only required for PERIODIC plans. | [optional]
**plan_max_amount** | **float** | Maximum amount for the plan. |
**plan_max_cycles** | **int** | Maximum number of payment cycles for the plan. | [optional]
**plan_intervals** | **int** | Number of billing cycles between charges. | [optional]
**plan_interval_type** | **string** | Interval type for the plan. Possible values - DAY, WEEK, MONTH, YEAR. | [optional]
**plan_note** | **string** | Note for the plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
