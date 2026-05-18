# # SubscriptionCustomerDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_name** | **string** | Name of the customer. | [optional]
**customer_email** | **string** | Email of the customer. |
**customer_phone** | **string** | Phone number of the customer. |
**customer_bank_account_holder_name** | **string** | Bank holder name of the customer. Account holder name is mandatory for TPV transaction. Max character allowed is 40. | [optional]
**customer_bank_account_number** | **string** | Bank account number of the customer. Conditional Parameter. Max character allowed is 35. | [optional]
**customer_bank_ifsc** | **string** | IFSC code of the customer. For a TPV transaction, send at least one out of &#x60;customer_bank_code&#x60; or &#x60;customer_bank_ifsc&#x60;. | [optional]
**customer_bank_code** | **string** | Bank code of the customer. Refer to the list of Live Banks in API E-Mandate [here](https://www.npci.org.in/product/nach/all-members). For a TPV transactions, include at least one of &#x60;customer_bank_code&#x60; or &#x60;customer_bank_ifsc&#x60;. | [optional]
**customer_bank_account_type** | **string** | Bank account type of the customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
