# # LinkMetaResponseEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notify_url** | **string** | Notification URL for server-server communication. It should be an https URL. | [optional]
**upi_intent** | **bool** | If \&quot;true\&quot;, link will directly open UPI Intent flow on mobile, and normal link flow elsewhere | [optional]
**return_url** | **string** | The URL to which user will be redirected to after the payment is done on the link. Maximum length: 250. | [optional]
**payment_methods** | **string** | Allowed payment modes for this link. Pass comma-separated values among following options - \&quot;cc\&quot;, \&quot;dc\&quot;, \&quot;ccc\&quot;, \&quot;ppc\&quot;, \&quot;nb\&quot;, \&quot;upi\&quot;, \&quot;paypal\&quot;, \&quot;app\&quot;. Leave it blank to show all available payment methods | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
