# # CreateSubscriptionRequestAuthorizationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_amount** | **float** | Authorization amount for the auth payment. Please note that authorization_amount will always be 0 for ENACH. | [optional]
**authorization_amount_refund** | **bool** | Indicates whether the authorization amount should be refunded to the customer automatically. Merchants can use this field to specify if the authorized funds should be returned to the customer after authorization of the subscription. | [optional]
**payment_methods** | **string[]** | Payment methods for the subscription. enach, pnach, upi, card are possible values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
