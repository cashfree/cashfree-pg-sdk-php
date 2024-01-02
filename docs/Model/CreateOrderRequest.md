# # CreateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order identifier present in your system. Alphanumeric, &#39;_&#39; and &#39;-&#39; only | [optional]
**order_amount** | **float** | Bill amount for the order. Provide upto two decimals. 10.15 means Rs 10 and 15 paisa |
**order_currency** | **string** | Currency for the order. INR if left empty. Contact care@cashfree.com to enable new currencies. |
**customer_details** | [**\Cashfree\Model\CustomerDetails**](CustomerDetails.md) |  |
**terminal** | [**\Cashfree\Model\TerminalDetails**](TerminalDetails.md) |  | [optional]
**order_meta** | [**\Cashfree\Model\OrderMeta**](OrderMeta.md) |  | [optional]
**order_expiry_time** | **string** | Time after which the order expires. Customers will not be able to make the payment beyond the time specified here. We store timestamps in IST, but you can provide them in a valid ISO 8601 time format. Example 2021-07-02T10:20:12+05:30 for IST, 2021-07-02T10:20:12Z for UTC | [optional]
**order_note** | **string** | Order note for reference. | [optional]
**order_tags** | **array<string,string>** | Custom Tags in thr form of {\&quot;key\&quot;:\&quot;value\&quot;} which can be passed for an order. A maximum of 10 tags can be added | [optional]
**order_splits** | [**\Cashfree\Model\VendorSplit[]**](VendorSplit.md) | If you have Easy split enabled in your Cashfree account then you can use this option to split the order amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
