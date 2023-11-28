# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel for card payments can be \&quot;link\&quot; or \&quot;post\&quot;. Post is used for seamless OTP payments where merchant captures OTP on their own page. |
**card_number** | **string** | Customer card number for plain card transactions. Token pan number for tokenized card transactions. | [optional]
**card_holder_name** | **string** | Customer name mentioned on the card. | [optional]
**card_expiry_mm** | **string** | Card expiry month for plain card transactions. Token expiry month for tokenized card transactions. | [optional]
**card_expiry_yy** | **string** | Card expiry year for plain card transactions. Token expiry year for tokenized card transactions. | [optional]
**card_cvv** | **string** | CVV mentioned on the card. | [optional]
**instrument_id** | **string** | instrument id of saved card. Required only to make payment using saved instrument. | [optional]
**cryptogram** | **string** | cryptogram received from card network. Required only for tokenized card transactions. | [optional]
**token_requestor_id** | **string** | TRID issued by card networks. Required only for tokenized card transactions. | [optional]
**token_type** | **string** |  | [optional]
**card_display** | **string** | last 4 digits of original card number. Required only for tokenized card transactions. | [optional]
**card_alias** | **string** | Card alias as returned by Cashfree Vault API. | [optional]
**card_bank_name** | **string** | One of [\&quot;Kotak\&quot;, \&quot;ICICI\&quot;, \&quot;RBL\&quot;, \&quot;BOB\&quot;, \&quot;Standard Chartered\&quot;]. Card bank name, required for EMI payments. This is the bank user has selected for EMI | [optional]
**emi_tenure** | **int** | EMI tenure selected by the user | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
