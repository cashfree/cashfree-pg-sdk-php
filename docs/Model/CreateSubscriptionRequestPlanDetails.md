# # CreateSubscriptionRequestPlanDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_id** | **string** | The unique identifier used to create plan. You only need to pass this field if you had already created plan. Otherwise use the other fields here to define the plan. | [optional]
**plan_name** | **string** | Specify plan name for easy reference. | [optional]
**plan_type** | **string** | Possible values ON_DEMAND or PERIODIC. PERIODIC - Payments are triggered automatically at fixed intervals defined by the merchant. ON_DEMAND - Merchant needs to trigger/charge the customer explicitly with the required amount. | [optional]
**plan_currency** | **string** | INR by default. For subscriptions in non-INR currency, please refer to [supported currencies](https://www.cashfree.com/docs/payments/international-payments/ipg/currencies-supported#full-currency-list). | [optional]
**plan_amount** | **float** | The amount to be charged for PERIODIC plan. This is a conditional parameter, only required for PERIODIC plans. | [optional]
**plan_max_amount** | **float** | This is the maximum amount that can be charged on a subscription. | [optional]
**plan_max_cycles** | **int** | Maximum number of debits set for the plan. The subscription will automatically change to COMPLETED status once this limit is reached. | [optional]
**plan_intervals** | **int** | Number of intervals of intervalType between every subscription payment. For example, to charge a customer bi-weekly use intervalType as “week” and intervals as 2. Required for PERIODIC plan. The default value is 1. | [optional]
**plan_interval_type** | **string** | The type of interval for a PERIODIC plan like DAY, WEEK, MONTH, or YEAR. This is a conditional parameter only applicable for PERIODIC plans. | [optional]
**plan_note** | **string** | Note for the plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
