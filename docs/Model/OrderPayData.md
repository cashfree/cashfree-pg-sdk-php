# # OrderPayData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | For card payments, if the response includes &#x60;&#x60;&#x60;action:link&#x60;&#x60;&#x60;, redirect the customer to the &#x60;&#x60;&#x60;data.url&#x60;&#x60;&#x60; page. If the response includes &#x60;&#x60;&#x60;action:post&#x60;&#x60;&#x60;, display a native OTP UI to collect the OTP and submit it to &#x60;&#x60;&#x60;data.url&#x60;&#x60;&#x60;. | [optional]
**payload** | **object** | Key value pairs sent as the request body if the payment link requires a form submission instead of a redirect. | [optional]
**content_type** | **string** | Specifies the Content-Type header that should be used when submitting the payload, for example, &#x60;&#x60;&#x60;application/x-www-form-urlencoded&#x60;&#x60;&#x60;. | [optional]
**method** | **string** | The HTTP method to use when submitting the payload to the url. For example, POST. | [optional]
**redirect_to_bank** | **string** | This field is available only for card payments when &#x60;&#x60;&#x60;action:post&#x60;&#x60;&#x60; is returned. Display a native OTP UI and also provide an option for the customer to redirect to bank page. When the customer selects this option, redirect them to the &#x60;&#x60;&#x60;data.redirect_to_bank&#x60;&#x60;&#x60; URL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
