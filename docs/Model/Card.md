# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel for card payments can be \&quot;link\&quot; or \&quot;post\&quot;. Use \&quot;post\&quot; to request [Native OTP](https://www.cashfree.com/docs/payments/features/native-otp) authentication, where the merchant must render the Native OTP UI to collect the OTP. Otherwise, use link for the redirection flow. |
**card_number** | **string** | Customer’s card number for plain card transactions, or token number for external token transactions, or Alt ID number for external Alt ID transactions. | [optional]
**card_holder_name** | **string** | Name on the customer’s card. Optional for external token or external Alt ID transactions. | [optional]
**card_expiry_mm** | **string** | Card expiry month for plain card transactions, or token expiry month for external token transactions, or Alt ID expiry month for external Alt ID transactions. | [optional]
**card_expiry_yy** | **string** | Card expiry year for plain card transactions, or token expiry year for external token transactions and Alt ID expiry year for external Alt ID transactions. | [optional]
**card_cvv** | **string** | CVV mentioned on the card. Mandatory for plain card and external Alt ID transactions; optional for saved card transactions. | [optional]
**instrument_id** | **string** | Instrument ID of the saved card, as received in response from [Fetch All Saved Card Instrument API](https://www.cashfree.com/docs/api-reference/payments/latest/token-vault/get-all). Required only when making payments using cards saved with Cashfree. | [optional]
**cryptogram** | **string** | Cryptogram received from the card network. Required only for external token or external Alt ID transactions; provided by the merchant’s token requestor. | [optional]
**token_requestor_id** | **string** | Token Requestor ID (TRID) issued by the respective card network. Required only for external token transactions; provided by the merchant’s token requestor. | [optional]
**token_reference_id** | **string** | Token Reference ID, required only for external Alt ID transactions for Diners; provided by the merchant’s token requestor. | [optional]
**token_type** | **string** | Token type enum. Mandatory only for external Alt ID transactions. | [optional]
**card_display** | **string** | Last 4 digits of original card number, required only for external token or external Alt ID transactions, used for bookkeeping purposes. | [optional]
**card_bank_name** | **string** | One of [\&quot;Kotak\&quot;, \&quot;ICICI\&quot;, \&quot;RBL\&quot;, \&quot;BOB\&quot;, \&quot;Standard Chartered\&quot;]. Card bank name, required for EMI payments. This is the bank user has selected for EMI. | [optional]
**address_line_one** | **string** | First line of the address. | [optional]
**address_line_two** | **string** | Second line of the address. | [optional]
**city** | **string** | City Name. | [optional]
**zip_code** | **string** | Pin Code/Zip Code. | [optional]
**country** | **string** | Country Name. | [optional]
**country_code** | **string** | Country Code. Should be in ISO 2 format (ie. US for United States). | [optional]
**state** | **string** | State Name. | [optional]
**state_code** | **string** | State Code. Should be in ISO 2 format (ie. FL for Florida). | [optional]
**emi_tenure** | **int** | EMI tenure selected by the user. | [optional]
**par** | **string** | Par received from network. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
