# # CFOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order identifier present in your system. Alphanumeric and only - and _ allowed. | [optional]
**order_amount** | **double** | Bill amount for the order. Provide upto two decimals. 10.15 means Rs 10 and 15 paisa |
**order_currency** | **string** | Currency for the order. INR if left empty. Contact care@cashfree.com to enable new currencies. |
**customer_details** | [**\OpenAPI\Client\Model\CFCustomerDetails**](CFCustomerDetails.md) |  |
**order_meta** | [**\OpenAPI\Client\Model\CFOrderMeta**](CFOrderMeta.md) |  | [optional]
**order_expiry_time** | **string** | Time after which the order expires. Customers will not be able to make the payment beyond the time specified here. We store timestamps in IST, but you can provide them in a valid ISO 8601 time format. | [optional]
**order_note** | **string** | Order note for reference. | [optional]
**order_tags** | **array<string,string>** | Custom Tags which can be passed for an order. A maximum of 6 tags can be added | [optional]
**order_splits** | [**\OpenAPI\Client\Model\CFVendorSplit[]**](CFVendorSplit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
