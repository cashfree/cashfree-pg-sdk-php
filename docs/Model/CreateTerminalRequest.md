# # CreateTerminalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | merchant’s internal terminal id. |
**terminal_phone_no** | **string** | phone number assigned to the terminal. |
**terminal_name** | **string** | terminal name to be assigned by merchants. |
**terminal_address** | **string** | address of the terminal. required for STOREFRONT. | [optional]
**terminal_email** | **string** | terminal email ID of the AGENT/STOREFRONT assigned by merchants. |
**terminal_note** | **string** | additional note for terminal. | [optional]
**terminal_type** | **string** | mention the terminal type. possible values - AGENT, STOREFRONT. |
**terminal_meta** | [**\OpenAPI\Client\Model\CreateTerminalRequestTerminalMeta**](CreateTerminalRequestTerminalMeta.md) |  | [optional]
**terminal_vpa_prefix** | **string** | Merchant&#39;s vpa prefix for the terminal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
