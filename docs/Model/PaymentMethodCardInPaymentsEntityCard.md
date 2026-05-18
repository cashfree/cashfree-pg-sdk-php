# # PaymentMethodCardInPaymentsEntityCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The requested channel, can be &#x60;link&#x60; or &#x60;post&#x60;. | [optional]
**card_number** | **string** | The last four digits of the customer&#39;s card number. For external token transactions or external Alt ID transactions, this value is passed only when the merchant includes &#x60;card_display&#x60; in the [Order Pay API](https://www.cashfree.com/docs/api-reference/payments/latest/payments/pay) request. | [optional]
**card_network** | **string** | The card scheme or network of the card. For example, &#x60;visa&#x60;, &#x60;mastercard&#x60;, &#x60;rupay&#x60;, &#x60;amex&#x60;, or &#x60;diners&#x60;. | [optional]
**card_type** | **string** | The type of card. For example, &#x60;credit_card&#x60;, &#x60;debit_card&#x60;, or &#x60;prepaid_card&#x60;. | [optional]
**card_sub_type** | **string** | The sub-type of card. &#x60;R&#x60; is Retail card, &#x60;P&#x60; is Premium card, &#x60;C&#x60; is Corporate card. | [optional]
**card_country** | **string** | The issuing country of the card. For example, &#x60;IN&#x60;. | [optional]
**card_bank_name** | **string** | The issuing bank of the card. For example, &#x60;HDFC BANK&#x60;, &#x60;AXIS BANK&#x60;, or &#x60;ICICI BANK&#x60;. | [optional]
**card_network_reference_id** | **string** | The authentication reference ID provided by the respective card network. | [optional]
**instrument_id** | **string** | The identifier for the card saved at Cashfree. This value is sent only for CF token transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
