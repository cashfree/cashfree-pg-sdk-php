# # CFCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel for card payments will always be \&quot;link\&quot; |
**card_number** | **string** | Customer card number for plain card transactions. Token pan number for tokenized card transactions. |
**card_holder_name** | **string** | Customer name mentioned on the card. |
**card_expiry_mm** | **string** | Card expiry month for plain card transactions. Token expiry month for tokenized card transactions. |
**card_expiry_yy** | **string** | Card expiry year for plain card transactions. Token expiry year for tokenized card transactions. |
**card_cvv** | **string** | CVV mentioned on the card. |
**instrument_id** | **string** | instrument id of saved card. Required only to make payment using saved instrument. |
**cryptogram** | **string** | cryptogram received from card network. Required only for tokenized card transactions. |
**token_requestor_id** | **string** | TRID issued by card networks. Required only for tokenized card transactions. |
**card_display** | **string** | last 4 digits of original card number. Required only for tokenized card transactions. |
**card_alias** | **string** | Card alias as returned by Cashfree Vault API. |
**card_bank_name** | **string** | One of [\&quot;Kotak\&quot;, \&quot;ICICI\&quot;, \&quot;RBL\&quot;, \&quot;BOB\&quot;, \&quot;Standard Chartered\&quot;]. Card bank name, required for EMI payments. This is the bank user has selected for EMI |
**emi_tenure** | **int** | EMI tenure selected by the user |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
