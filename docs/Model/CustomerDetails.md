# # CustomerDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | A unique identifier for the customer. Use alphanumeric values only. |
**customer_email** | **string** | Customer email address. | [optional]
**customer_phone** | **string** | Customer phone number. To accommodate international phone numbers, ensure the number is prefixed with a &#39;+&#39; to override the 10-digit limitation. |
**customer_name** | **string** | Name of the customer. | [optional]
**customer_bank_account_number** | **string** | Customer&#39;s bank account number. This field is required only if you want to perform a bank account check (TPV). | [optional]
**customer_bank_ifsc** | **string** | Customer&#39;s bank IFSC. Required if you want to do a bank account check (TPV). | [optional]
**customer_bank_code** | **float** | Customer&#39;s bank code. Required for net banking payments, if you want to do a bank account check (TPV). | [optional]
**customer_uid** | **string** | Customer&#39;s identifier at Cashfree. You will get this when you create/get customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
