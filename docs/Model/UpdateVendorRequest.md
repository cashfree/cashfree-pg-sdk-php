# # UpdateVendorRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Specify the status of vendor that should be updated. Possible value: ACTIVE. | [optional]
**name** | **string** | Specify the name of the vendor to be updated. Name should not have any special character except . / - &amp;. | [optional]
**email** | **string** | Specify the vendor email ID that should be updated. String in email ID format (Ex:johndoe_1@cashfree.com) should contain @ and dot (.). | [optional]
**phone** | **string** | Specify the beneficiaries phone number to be updated. Phone number registered in India (only digits, 8 - 12 characters after excluding +91). | [optional]
**verify_account** | **bool** | Specify if the vendor bank account details should be verified. Possible values: true or false. | [optional]
**dashboard_access** | **bool** | Update if the vendor will have dashboard access or not. Possible values are: true or false. | [optional]
**schedule_option** | **float** | Specify the settlement cycle to be updated. View the settlement cycle details from the \&quot;Settlement Cycles Supported\&quot; table. If no schedule option is configured, the settlement cycle ID \&quot;1\&quot; will be in effect. Select \&quot;8\&quot; or \&quot;9\&quot; if you want to schedule instant vendor settlements. | [optional]
**bank** | [**\OpenAPI\Client\Model\BankDetails[]**](BankDetails.md) | Specify the vendor bank account details to be updated. | [optional]
**upi** | [**\OpenAPI\Client\Model\UpiDetails[]**](UpiDetails.md) | Updated beneficiary upi vpa. Alphanumeric, dot (.), hyphen (-), at sign (@), and underscore allowed (100 character limit). Note: underscore and dot (.) gets accepted before and after @, but hyphen (-) is only accepted before @ sign. | [optional]
**kyc_details** | [**\OpenAPI\Client\Model\KycDetails[]**](KycDetails.md) | Specify the kyc details that should be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
