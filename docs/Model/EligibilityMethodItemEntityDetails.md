# # EligibilityMethodItemEntityDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_types** | **string[]** | List of account types associated with the payment method. (e.g. SAVINGS or CURRENT). | [optional]
**frequent_bank_details** | [**\OpenAPI\Client\Model\SubscriptionBankDetails[]**](SubscriptionBankDetails.md) | List of the most frequently used banks. | [optional]
**all_bank_details** | [**\OpenAPI\Client\Model\SubscriptionBankDetails[]**](SubscriptionBankDetails.md) | Details about all banks associated with the payment method. | [optional]
**available_handles** | [**\OpenAPI\Client\Model\EligibilityMethodItemEntityDetailsAvailableHandlesInner[]**](EligibilityMethodItemEntityDetailsAvailableHandlesInner.md) | List of supported VPA handles. | [optional]
**allowed_card_types** | **string[]** | List of allowed card types. (e.g. DEBIT_CARD, CREDIT_CARD). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
