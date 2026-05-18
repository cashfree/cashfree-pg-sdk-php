# # SubscriptionEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorisation_details** | [**\OpenAPI\Client\Model\AuthorizationDetails**](AuthorizationDetails.md) |  | [optional]
**cf_subscription_id** | **string** | Cashfree subscription reference number. | [optional]
**customer_details** | [**\OpenAPI\Client\Model\SubscriptionCustomerDetails**](SubscriptionCustomerDetails.md) |  | [optional]
**plan_details** | [**\OpenAPI\Client\Model\PlanEntity**](PlanEntity.md) |  | [optional]
**subscription_expiry_time** | **string** | Time at which the subscription will expire. We store timestamps in IST. | [optional]
**subscription_first_charge_time** | **string** | Time at which the first charge will be made for the subscription. Applicable only for PERIODIC plans. Cashfree stores timestamps in IST. | [optional]
**subscription_id** | **string** | A unique ID passed by merchant for identifying the subscription. | [optional]
**subscription_meta** | [**\OpenAPI\Client\Model\SubscriptionEntitySubscriptionMeta**](SubscriptionEntitySubscriptionMeta.md) |  | [optional]
**subscription_note** | **string** | Note for the subscription. | [optional]
**subscription_session_id** | **string** | Subscription Session Id. | [optional]
**subscription_payment_splits** | [**\OpenAPI\Client\Model\SubscriptionPaymentSplitItem[]**](SubscriptionPaymentSplitItem.md) | Payment splits for the subscription. | [optional]
**subscription_status** | **string** | Status of the subscription. For more details, see [Subscription Lifecycle](https://www.cashfree.com/docs/payments/subscription/create#subscription-lifecycle). | [optional]
**subscription_tags** | **object** | Tags for the subscription. | [optional]
**next_schedule_date** | **string** | The date on which the next payment is scheduled to be processed. Cashfree stores timestamps in IST. For ON_DEMAND plans this will be null . | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
