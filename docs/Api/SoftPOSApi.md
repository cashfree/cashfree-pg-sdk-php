# Cashfree\SoftPOSApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**SposCreateTerminal()**](SoftPOSApi.md#SposCreateTerminal) | **POST** /terminal | Create Terminal |
| [**SposCreateTerminalTransaction()**](SoftPOSApi.md#SposCreateTerminalTransaction) | **POST** /terminal/transactions | Create Terminal Transaction |
| [**SposFetchTerminal()**](SoftPOSApi.md#SposFetchTerminal) | **GET** /terminal/{terminal_phone_no} | Get Terminal Status using Phone Number |
| [**SposFetchTerminalQRCodes()**](SoftPOSApi.md#SposFetchTerminalQRCodes) | **GET** /terminal/qrcodes | Fetch Terminal QR Codes |
| [**SposUpdateTerminal()**](SoftPOSApi.md#SposUpdateTerminal) | **PATCH** /terminal/{cf_terminal_id} | Update Terminal |
| [**SposUpdateTerminalStatus()**](SoftPOSApi.md#SposUpdateTerminalStatus) | **PATCH** /terminal/{cf_terminal_id}/status | Update Terminal Sttus |
| [**SposUploadTerminalDocs()**](SoftPOSApi.md#SposUploadTerminalDocs) | **POST** /terminal/{cf_terminal_id}/docs | Upload Terminal Docs |


## `SposCreateTerminal()`

```php
SposCreateTerminal($x_api_version, $create_terminal_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\TerminalEntity
```

Create Terminal

Use this API to create new terminals to use softPOS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$create_terminal_request = new \Cashfree\Model\CreateTerminalRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposCreateTerminal($x_api_version, $create_terminal_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposCreateTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **create_terminal_request** | [**\Cashfree\Model\CreateTerminalRequest**](../Model/CreateTerminalRequest.md)| Request Body to Create Terminal for SPOS | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\TerminalEntity**](../Model/TerminalEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposCreateTerminalTransaction()`

```php
SposCreateTerminalTransaction($x_api_version, $create_terminal_transaction_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\TerminalTransactionEntity
```

Create Terminal Transaction

Use this API to create a new terminal transaction. To use this API you should first create an order using the Create Order API. Also, you need to enter the terminal details while creating the order and pass the same terminal information while creating a transaction using the below mentioned API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$create_terminal_transaction_request = new \Cashfree\Model\CreateTerminalTransactionRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposCreateTerminalTransaction($x_api_version, $create_terminal_transaction_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposCreateTerminalTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **create_terminal_transaction_request** | [**\Cashfree\Model\CreateTerminalTransactionRequest**](../Model/CreateTerminalTransactionRequest.md)| Request body to create a terminal transaction | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\TerminalTransactionEntity**](../Model/TerminalTransactionEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposFetchTerminal()`

```php
SposFetchTerminal($x_api_version, $terminal_phone_no, $x_request_id, $x_idempotency_key): \Cashfree\Model\TerminalEntity
```

Get Terminal Status using Phone Number

Use this API to view all details of a terminal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$terminal_phone_no = 6309291183;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposFetchTerminal($x_api_version, $terminal_phone_no, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposFetchTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **terminal_phone_no** | **string**| The terminal for which you want to view the order details. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\TerminalEntity**](../Model/TerminalEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposFetchTerminalQRCodes()`

```php
SposFetchTerminalQRCodes($x_api_version, $terminal_phone_no, $cf_terminal_id, $x_request_id, $x_idempotency_key): \Cashfree\Model\FetchTerminalQRCodesEntity[]
```

Fetch Terminal QR Codes

You can fetch all the StaticQRs corresponding to given terminal id or phone number. Provide either the terminal_phone_no or terminal_id in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$terminal_phone_no = 9876543214;
$cf_terminal_id = 123344;
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposFetchTerminalQRCodes($x_api_version, $terminal_phone_no, $cf_terminal_id, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposFetchTerminalQRCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **terminal_phone_no** | **string**| Phone number assigned to the terminal. Required if you are not providing the cf_terminal_id in the request. | |
| **cf_terminal_id** | **string**| Cashfree terminal id for which you want to get staticQRs. Required if you are not providing the terminal_phone_number in the request. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\FetchTerminalQRCodesEntity[]**](../Model/FetchTerminalQRCodesEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposUpdateTerminal()`

```php
SposUpdateTerminal($x_api_version, $cf_terminal_id, $update_terminal_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\UpdateTerminalEntity[]
```

Update Terminal

Use this API to update the terminal details. Email, Phone Number, and Terminal Meta are updatable for \"Storefront\". Only account status change is possible in case of \"Agent\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$cf_terminal_id = 123344;
$update_terminal_request = new \Cashfree\Model\UpdateTerminalRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposUpdateTerminal($x_api_version, $cf_terminal_id, $update_terminal_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposUpdateTerminal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **cf_terminal_id** | **string**| Provide the Cashfree terminal ID for which the details have to be updated. | |
| **update_terminal_request** | [**\Cashfree\Model\UpdateTerminalRequest**](../Model/UpdateTerminalRequest.md)| Request Body to update terminal for SPOS. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\UpdateTerminalEntity[]**](../Model/UpdateTerminalEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposUpdateTerminalStatus()`

```php
SposUpdateTerminalStatus($x_api_version, $cf_terminal_id, $update_terminal_status_request, $x_request_id, $x_idempotency_key): \Cashfree\Model\UpdateTerminalEntity[]
```

Update Terminal Sttus

Use this API to update the terminal status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$cf_terminal_id = 123344;
$update_terminal_status_request = new \Cashfree\Model\UpdateTerminalStatusRequest();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposUpdateTerminalStatus($x_api_version, $cf_terminal_id, $update_terminal_status_request, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposUpdateTerminalStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **cf_terminal_id** | **string**| Provide the Cashfree terminal ID for which the details have to be updated. | |
| **update_terminal_status_request** | [**\Cashfree\Model\UpdateTerminalStatusRequest**](../Model/UpdateTerminalStatusRequest.md)| Request Body to update terminal status for SPOS. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\UpdateTerminalEntity[]**](../Model/UpdateTerminalEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `SposUploadTerminalDocs()`

```php
SposUploadTerminalDocs($x_api_version, $cf_terminal_id, $upload_terminal_docs, $x_request_id, $x_idempotency_key): \Cashfree\Model\UploadTerminalDocsEntity[]
```

Upload Terminal Docs

Use this API to upload the terminal documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2023-08-01;
$cf_terminal_id = 123344;
$upload_terminal_docs = new \Cashfree\Model\UploadTerminalDocs();
$x_request_id = 4dfb9780-46fe-11ee-be56-0242ac120002;
$x_idempotency_key = 47bf8872-46fe-11ee-be56-0242ac120002;

try {
    $result = $cashfree->SposUploadTerminalDocs($x_api_version, $cf_terminal_id, $upload_terminal_docs, $x_request_id, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftPOSApi->SposUploadTerminalDocs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2023-08-01&#39;] |
| **cf_terminal_id** | **string**| Provide the Cashfree terminal ID for which the details have to be updated. | |
| **upload_terminal_docs** | [**\Cashfree\Model\UploadTerminalDocs**](../Model/UploadTerminalDocs.md)| Request Body to update terminal documents for SPOS. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| An idempotency key is a unique identifier you include with your API call. If the request fails or times out, you can safely retry it using the same key to avoid duplicate actions. | [optional] |

### Return type

[**\Cashfree\Model\UploadTerminalDocsEntity[]**](../Model/UploadTerminalDocsEntity.md)

### Authorization

[XPartnerAPIKey](../../README.md#XPartnerAPIKey), [XClientSecret](../../README.md#XClientSecret), [XPartnerMerchantID](../../README.md#XPartnerMerchantID), [XClientID](../../README.md#XClientID), [XClientSignatureHeader](../../README.md#XClientSignatureHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
