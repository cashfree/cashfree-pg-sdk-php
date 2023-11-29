# # CardEMI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel for card payments will always be \&quot;link\&quot; |
**card_number** | **string** | Customer card number. |
**card_holder_name** | **string** | Customer name mentioned on the card. | [optional]
**card_expiry_mm** | **string** | Card expiry month. |
**card_expiry_yy** | **string** | Card expiry year. |
**card_cvv** | **string** | CVV mentioned on the card. |
**card_alias** | **string** | Card alias as returned by Cashfree Vault API | [optional]
**card_bank_name** | **string** | Card bank name, required for EMI payments. This is the bank user has selected for EMI. One of [\&quot;hdfc, \&quot;kotak\&quot;, \&quot;icici\&quot;, \&quot;rbl\&quot;, \&quot;bob\&quot;, \&quot;standard chartered\&quot;, \&quot;axis\&quot;, \&quot;au\&quot;, \&quot;yes\&quot;, \&quot;sbi\&quot;, \&quot;fed\&quot;, \&quot;hsbc\&quot;, \&quot;citi\&quot;, \&quot;amex\&quot;] |
**emi_tenure** | **int** | EMI tenure selected by the user |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
