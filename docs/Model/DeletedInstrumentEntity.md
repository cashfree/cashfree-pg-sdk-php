# # DeletedInstrumentEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | Customer ID against which the card is saved. | [optional]
**afa_reference** | **string** | cf_payment_id of the successful transaction done while saving instrument. | [optional]
**instrument_id** | **string** | Identifier for the card saved at Cashfree, which was requested to be deleted. | [optional]
**instrument_type** | **string** | Type of the saved instrument. | [optional]
**instrument_uid** | **string** | Unique identifier for the saved card, used to identify a specific card. | [optional]
**instrument_display** | **string** | Last four digits of actual card number. | [optional]
**instrument_status** | **string** | Status of the saved instrument. This would be &#x60;INACTIVE&#x60; when the instrument is successfully deleted. | [optional]
**created_at** | **string** | Timestamp at which instrument was saved. | [optional]
**instrument_meta** | [**\OpenAPI\Client\Model\SavedInstrumentMeta**](SavedInstrumentMeta.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
