# # PaymentEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_payment_id** | **string** | Payment entity full object. | [optional]
**order_id** | **string** |  | [optional]
**entity** | **string** |  | [optional]
**error_details** | [**\OpenAPI\Client\Model\ErrorDetailsInPaymentsEntity**](ErrorDetailsInPaymentsEntity.md) |  | [optional]
**is_captured** | **bool** |  | [optional]
**order_amount** | **float** | Order amount can be different from payment amount if you collect service fee from the customer. | [optional]
**payment_group** | **string** | Type of payment group. One of [&#39;prepaid_card&#39;, &#39;upi_ppi_offline&#39;, &#39;cash&#39;, &#39;upi_credit_card&#39;, &#39;paypal&#39;, &#39;net_banking&#39;, &#39;cardless_emi&#39;, &#39;credit_card&#39;, &#39;bank_transfer&#39;, &#39;pay_later&#39;, &#39;debit_card_emi&#39;, &#39;debit_card&#39;, &#39;wallet&#39;, &#39;upi_ppi&#39;, &#39;upi&#39;, &#39;credit_card_emi&#39;]. | [optional]
**payment_currency** | **string** |  | [optional]
**payment_amount** | **float** |  | [optional]
**payment_time** | **string** | This is the time when the payment was initiated. | [optional]
**payment_completion_time** | **string** | This is the time when the payment reaches its terminal state. | [optional]
**payment_status** | **string** | The transaction status can be one of  [\&quot;SUCCESS\&quot;, \&quot;NOT_ATTEMPTED\&quot;, \&quot;FAILED\&quot;, \&quot;USER_DROPPED\&quot;, \&quot;VOID\&quot;, \&quot;CANCELLED\&quot;, \&quot;PENDING\&quot;]. | [optional]
**payment_message** | **string** |  | [optional]
**bank_reference** | **string** | Issuing bank’s transaction reference number. | [optional]
**auth_id** | **string** | Authorisation ID provided by the issuing bank. | [optional]
**order_currency** | **string** |  | [optional]
**authorization** | [**\OpenAPI\Client\Model\AuthorizationInPaymentsEntity**](AuthorizationInPaymentsEntity.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\PaymentEntityPaymentMethod**](PaymentEntityPaymentMethod.md) |  | [optional]
**international_payment** | [**\OpenAPI\Client\Model\InternationalPaymentEntity**](InternationalPaymentEntity.md) |  | [optional]
**payment_gateway_details** | [**\OpenAPI\Client\Model\PaymentGatewayDetails**](PaymentGatewayDetails.md) |  | [optional]
**payment_surcharge** | [**\OpenAPI\Client\Model\PaymentEntityPaymentSurcharge**](PaymentEntityPaymentSurcharge.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
