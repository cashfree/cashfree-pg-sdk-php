# Cashfree\SoftPOSApi

All URIs are relative to https://sandbox.cashfree.com/pg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**SposCreateTerminal()**](SoftPOSApi.md#SposCreateTerminal) | **POST** /terminal | Create Terminal |
| [**SposCreateTerminalTransaction()**](SoftPOSApi.md#SposCreateTerminalTransaction) | **POST** /terminal/transactions | Create Terminal |
| [**SposFetchTerminal()**](SoftPOSApi.md#SposFetchTerminal) | **GET** /terminal/{terminal_phone_no} | Get terminal status using phone number |
| [**SposFetchTerminalQRCodes()**](SoftPOSApi.md#SposFetchTerminalQRCodes) | **GET** /terminal/qrcodes | Fetch Terminal QR Codes |


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

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **create_terminal_request** | [**\Cashfree\Model\CreateTerminalRequest**](../Model/CreateTerminalRequest.md)| Request Body to Create Terminal for SPOS | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

Create Terminal

Use this API to create a new terminal transaction. To use this API you should first create an order using the Create Order API. Also, you need to enter the terminal details while creating the order and pass the same terminal information while creating a transaction using the below mentioned API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **create_terminal_transaction_request** | [**\Cashfree\Model\CreateTerminalTransactionRequest**](../Model/CreateTerminalTransactionRequest.md)| Request body to create a terminal transaction | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

Get terminal status using phone number

Use this API to view all details of a terminal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$cashfree = new \Cashfree\Cashfree();

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **terminal_phone_no** | **string**| The terminal for which you want to view the order details. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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

$x_api_version = 2022-09-01;
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
| **x_api_version** | **string**| API version to be used. Format is in YYYY-MM-DD | [default to &#39;2022-09-01&#39;] |
| **terminal_phone_no** | **string**| Phone number assigned to the terminal. Required if you are not providing the cf_terminal_id in the request. | |
| **cf_terminal_id** | **string**| Cashfree terminal id for which you want to get staticQRs. Required if you are not providing the terminal_phone_number in the request. | |
| **x_request_id** | **string**| Request id for the API call. Can be used to resolve tech issues. Communicate this in your tech related queries to cashfree | [optional] |
| **x_idempotency_key** | **string**| Idempotency works by saving the resulting status code and body of the first request made for any given idempotency key, regardless of whether it succeeded or failed. Subsequent requests with the same key return the same result, including 500 errors.  Currently supported on all POST calls that uses x-client-id &amp; x-client-secret. To use enable, pass x-idempotency-key in the request header. The value of this header must be unique to each operation you are trying to do. One example can be to use the same order_id that you pass while creating orders | [optional] |

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
