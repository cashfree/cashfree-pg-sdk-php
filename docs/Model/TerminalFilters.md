# # TerminalFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | Start date and time for transaction filtering. Use ISO8601 format  (example: 2021-07-02T10:20:12+05:30 for IST, 2021-07-02T10:20:12Z for UTC). | [optional]
**end_date** | **string** | End date and time for transaction filtering. Use ISO8601 format  (example: 2021-07-02T10:20:12+05:30 for IST, 2021-07-02T10:20:12Z for UTC). | [optional]
**cf_terminal_id** | **int** | Unique Cashfree terminal identifier. | [optional]
**terminal_vpa** | **string** | Virtual payment address (VPA) associated with the terminal. | [optional]
**terminal_phone_no** | **string** | Mobile phone number registered with the terminal. | [optional]
**payment_status** | **string** | Payment transaction status. Possible values are SUCCESS, FAILED, or PENDING. | [optional]
**payment_group** | **string** | Payment method group (for example, UPI, CARD, NET_BANKING). | [optional]
**sort_by** | **string** | Field to sort results by. Currently supports sorting by start_date. | [optional]
**sort_order** | **string** | Sort order for the results. Use ASC for ascending or DESC for descending order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
