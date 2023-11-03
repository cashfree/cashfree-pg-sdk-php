# # CreateTerminalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | merchant’s internal terminal id |
**terminal_phone_no** | **string** | phone number assigned to the terminal |
**terminal_name** | **string** | terminal name to be assigned by merchants |
**terminal_address** | **string** | address of the terminal. required for STOREFRONT | [optional]
**terminal_email** | **string** | terminal email ID of the AGENT/STOREFRONT assigned by merchants. |
**terminal_note** | **string** | additional note for terminal | [optional]
**terminal_type** | **string** | mention the terminal type. possible values - AGENT, STOREFRONT. |
**terminal_meta** | [**\Cashfree\Model\CreateTerminalRequestTerminalMeta**](CreateTerminalRequestTerminalMeta.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
