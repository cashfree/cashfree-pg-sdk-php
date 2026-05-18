# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **string** | A unique ID for the subscription. It can include alphanumeric characters, underscore, dot, hyphen, and space. Maximum characters allowed is 250. |
**customer_details** | [**\OpenAPI\Client\Model\SubscriptionCustomerDetails**](SubscriptionCustomerDetails.md) |  |
**plan_details** | [**\OpenAPI\Client\Model\CreateSubscriptionRequestPlanDetails**](CreateSubscriptionRequestPlanDetails.md) |  |
**authorization_details** | [**\OpenAPI\Client\Model\CreateSubscriptionRequestAuthorizationDetails**](CreateSubscriptionRequestAuthorizationDetails.md) |  | [optional]
**subscription_meta** | [**\OpenAPI\Client\Model\CreateSubscriptionRequestSubscriptionMeta**](CreateSubscriptionRequestSubscriptionMeta.md) |  | [optional]
**subscription_expiry_time** | **string** | Expiry date for the subscription. Cashfree stores timestamps in IST, but you can provide them in a valid ISO 8601 time format.  For IST this &#x60;2025-06-01T10:20:12+05:30&#x60; translates to &#x60;2025-06-01 10:20:12&#x60;    For UTC this &#x60;2025-06-01T10:20:12Z&#x60; translates to &#x60;2025-06-01 15:50:12+05:30&#x60;. | [optional]
**subscription_first_charge_time** | **string** | Time at which the first charge will be made for the subscription after authorization. Applicable only for PERIODIC plans. Cashfree stores timestamps in IST, but you can provide them in a valid ISO 8601 time format.  For IST this &#x60;2025-06-01T10:20:12+05:30&#x60; translates to &#x60;2025-06-01 10:20:12&#x60;    For UTC this &#x60;2025-06-01T10:20:12Z&#x60; translates to &#x60;2025-06-01 15:50:12+05:30&#x60;. | [optional]
**subscription_tags** | **object** | Custom tags for this subscription. You can include up to 10 entries as string key-value pairs. Use any key names that suit your integration. A commonly used key is psp_note, which sets the note displayed to the customer in their payment service provider (PSP) app or on their statement. When using psp_note, the value must be between 1 and 255 characters. | [optional]
**subscription_payment_splits** | [**\OpenAPI\Client\Model\SubscriptionPaymentSplitItem[]**](SubscriptionPaymentSplitItem.md) | Payment splits for the subscription. | [optional]
**cf_order_id** | **string** | Cashfree order ID for the subscription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
