# # AuthorizationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_amount** | **float** | Authorization amount for the auth payment. Please note that authorization_amount will always be 0 for ENACH. | [optional]
**authorization_amount_refund** | **bool** | Indicates whether the authorization amount should be refunded to the customer automatically. Merchants can use this field to specify if the authorized funds should be returned to the customer after authorization of the subscription. | [optional]
**authorization_reference** | **string** | Authorization reference. UMN for UPI, UMRN for EMandate/Physical Mandate and Enrollment ID for cards. | [optional]
**authorization_time** | **string** | Authorization time. Cashfree stores timestamps in IST. | [optional]
**authorization_status** | **string** | Status of the authorization. | [optional]
**payment_id** | **string** | A unique ID passed by merchant for identifying the transaction. | [optional]
**payment_group** | **string** | Payment group used for the authorization. | [optional]
**payment_method** | [**\OpenAPI\Client\Model\AuthorizationDetailsPaymentMethod**](AuthorizationDetailsPaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
