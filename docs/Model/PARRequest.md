# # PARRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | The card number, containing 15 to 19 numeric digits without spaces or special characters. |
**card_cvv** | **string** | The Card Verification Value (CVV), a 3-digit code for most cards (Visa, Mastercard) and a 4-digit code for American Express, used for transaction authentication. |
**card_expiry_mm** | **string** | The two-digit expiry month (01-12), indicating when the card will expire. |
**card_expiry_yy** | **string** | The two-digit expiry year, representing the last two digits of the card’s expiration year. |
**card_type** | **string** | Specifies the type of card, with the only accepted value being &#x60;PLAIN_CARD&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
