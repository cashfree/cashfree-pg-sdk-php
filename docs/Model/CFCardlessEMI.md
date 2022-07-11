# # CFCardlessEMI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel for cardless EMI is always &#x60;link&#x60; |
**provider** | **string** | One of [\&quot;flexmoney\&quot;, \&quot;zestmoney\&quot;] |
**phone** | **string** | Customers phone number for this payment instrument. If the customer is not eligible you will receive a 400 error with type as &#39;invalid_request_error&#39; and code as &#39;invalid_request_error&#39; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
