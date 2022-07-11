# # CFPaymentsEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cf_payment_id** | **int** |  | [optional]
**order_id** | **string** |  | [optional]
**entity** | **string** |  | [optional]
**is_captured** | **bool** |  | [optional]
**order_amount** | **float** | Order amount can be different from payment amount if you collect service fee from the customer | [optional]
**payment_group** | **string** | Type of payment group. One of [&#39;upi&#39;, &#39;card&#39;, &#39;app&#39;, &#39;netbanking&#39;, &#39;paylater&#39;, &#39;cardless_emi&#39;] | [optional]
**payment_currency** | **string** |  | [optional]
**payment_amount** | **float** |  | [optional]
**payment_time** | **string** |  | [optional]
**payment_status** | **string** | The transaction status can be one of  [\&quot;SUCCESS\&quot;, \&quot;NOT_ATTEMPTED\&quot;, \&quot;FAILED\&quot;, \&quot;USER_DROPPED\&quot;, \&quot;VOID\&quot;, \&quot;CANCELLED\&quot;, \&quot;PENDING\&quot;] | [optional]
**payment_message** | **string** |  | [optional]
**bank_reference** | **string** |  | [optional]
**auth_id** | **string** |  | [optional]
**authorization** | [**\OpenAPI\Client\Model\CFAuthorizationInPaymentsEntity**](CFAuthorizationInPaymentsEntity.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\CFPaymentsEntityPayment**](CFPaymentsEntityPayment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
