# cashfree-pg-php-sdk


## Installation & Usage

### Requirements

PHP 7.3 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cashfree/cashfree-pg-php-sdk": "^2.0.1"
  }
}
```

Then run `composer install`

---

Or Simply run the below command in your project directory:

```
composer require cashfree/cashfree-pg-sdk-php
```

# Documentation

## Creating a CFConfig instance

The CFConfig type consists of properties that are necessary for every method call that is exposed by the SDK. The following code snippet can be used to create a CFSession instance :-

```
$cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
```

`Note:` CFEnvironment is an enum consisting of 2 values -> `PRODUCTION` and `SANDBOX`
`Note:` CFConfig also comes with extra options where you can set the "proxy" and "timeout" values as well.

## Create a CFHeader instance

The CFHeader type consists of properties that are sent in the headers as part of every request and they are optional values. The following code snippet can be used to create a CFHeader instance :-

```
$cfHeader = new CFHeader("x_request_id", "x_idempotency_key");
```

`Note:` These 2 values are optional.

## Create an Order with Cashfree

To process any payment on Cashfree PG, the merchant needs to create an order in the cashfree system. An order can be created using the following code snippet :

```
try {

            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $data = [
                "order_id" => "order_id"
                "order_currency" => "INR",
                "order_amount" => 1,
                "customer_details" => [
                    "customer_id" => "customer_id",
                    "customer_name" => "customer_name",
                    "customer_email" => "customer_email",
                    "customer_phone" => "customer_phone"
                ],
                "order_meta" => [
                    "notify_url" => "https://localhost",
                ],
                // order_tags" => [],
                // "order_splits" => []
                "order_note" => "some order note here"
            ];

            $cfOrderRequest = new CFOrderRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->createOrder($cfConfig, $cfHeader, $cfOrderRequest);
            print $result->getCFOrder();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

`Note:` For more information about order properties, visit [here](https://docs.cashfree.com/docs/create-order#curl-request).

## Pay Order

Once you have created the order, you can use the order to initiate payment. Order creation API returns "payment_session_id" which contains information about the order and that has to be used in payment initiation stage. Cashfree provides multiple payment methods to choose to make payments for an order, namely, UPI, Netbanking, Wallet, Card, Card EMI, Cardless EMI and Pay later.

### Card

Below is the code to initiate payment with Card

```
try {

            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $data = [
                "order_id" => "order_id"
                "order_currency" => "INR",
                "order_amount" => 1,
                "customer_details" => [
                    "customer_id" => "customer_id",
                    "customer_name" => "customer_name",
                    "customer_email" => "customer_email",
                    "customer_phone" => "customer_phone"
                ],
                "order_meta" => [
                    "notify_url" => "https://localhost",
                ],
                // order_tags" => [],
                // "order_splits" => []
                "order_note" => "some order note here"
            ];

            $cfOrderRequest = new CFOrderRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->createOrder($cfConfig, $cfHeader, $cfOrderRequest);
            
            // USE THIS TOKEN IN ORDER PAY
            $paymentSessionId = $result->getCFOrder()->getPaymentSessionId();

            $card = [
                "channel" => "link",
                "card_number" => "4111111111111111",
                "card_expiry_mm" => "12",
                "card_expiry_yy" => "23",
                "card_holder_name" => "Test",
                "card_cvv" => "123"
            ];
            $paymentMethod = [
                "card" => $card
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

`Note:` Order has to be created and then the payment_session_id has to be used to make the payments for all the other payment methods as well. This step is covered in the above example and the same step has to be followed for all other payment methods.

## UPI

Below is the code to initiate payment with UPI - `Collect`

```
try {

            $paymentSessionId = "payment_session_id";
            $upi = [
                "channel" => "collect",
                "upi_id" => "testfailure@gocash"
            ];
            $paymentMethod = [
                "upi" => $upi
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

Below is the code to initiate payment with UPI - `Intent`

```
try {

            $paymentSessionId = "payment_session_id";
            $upi = [
                "channel" => "link",
            ];
            $paymentMethod = [
                "upi" => $upi
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

Below is the code to initiate payment with UPI - `QRCode`

```
try {

            $paymentSessionId = "payment_session_id";
            $upi = [
                "channel" => "qrcode",
            ];
            $paymentMethod = [
                "upi" => $upi
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Netbanking

Below is the code to initiate payment with Netbanking

```
try {

            $paymentSessionId = "payment_session_id";
            $netbanking = [
                "channel" => "link",
                "netbanking_bank_code" => 3028
            ];
            $paymentMethod = [
                "netbanking" => $netbanking
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse()->getChannel();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

`Note:` For all bank codes, visit [here](https://docs.cashfree.com/docs/net-banking).

## App (Wallet)

Below is the code to initiate payment with App (Wallet)

```
try {
            $paymentSessionId = "payment_session_id";
            $app = [
                "channel" => "link",
                "phone" => "8908908901",
                "provider" => "phonepe"
            ];
            $paymentMethod = [
                "app" => $app
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```
`Note:` Below is the list of all values for all the wallet providers supported by Cashfree:- `phonepe paytm amazon airtel freecharge mobikwik jio ola`

## Paylater

Below is the code to initiate payment with Paylater

```
try {
            $paymentSessionId = "payment_session_id";
            $paylater = [
                "channel" => "link",
                "phone" => "8908908901",
                "provider" => "lazypay"
            ];
            $paymentMethod = [
                "paylater" => $paylater
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

`Note:` Currently we support "kotak", "flexipay", "zestmoney", "lazypay", "olapostpaid"

## EMI - Card

Below is the code to initiate payment with EMI - Card

```
try {
            $paymentSessionId = "payment_session_id"

            $emi = [
                "channel" => "link",
                "card_number" => "4111111111111111",
                "card_expiry_mm" => "12",
                "card_expiry_yy" => "23",
                "card_holder_name" => "Test",
                "card_cvv" => "123",
                "emi_tenure" => 3,
                "card_bank_name" => "ICICI"
            ];
            $paymentMethod = [
                "emi" => $emi
            ];

            $data = [
                "payment_session_id" => $paymentSessionId,
                "payment_method" => $paymentMethod
            ];


            $cfOrderPayRequest = new CFOrderPayRequest($data);

            $result = $apiInstance->orderPaySessions($cfConfig, $cfHeader, $cfOrderPayRequest);
            echo $result->getCFOrderPayResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Get Order

The details and status of the order can be fetched using this API. Below is the code snippet to retrieve order using `order_id`

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getOrder($cfConfig, $cfHeader, "ORDER_ID");
            print $result->getCFOrder()->getOrderId();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Get Payments For An Order

Once the payment process is initiated, all the payment information for a particular order can be retrieved through this API. Below is the code snippet to retrieve payments for a particular order.

```
 try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getPaymentsForOrder($cfConfig, $cfHeader, "ORDER_ID");
            echo $result->getCFPaymentsEntity();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Get Payment By CFPaymentID
 
Payment information can be retrieved using a unique ID generated by Cashfree (CFPaymentID). We can find get this ID from `getOrder` API and can be used here to fetch Payment Information. Below is the code snippet to fetch Payment Information.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");


            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getPaymentsByPaymentId($cfConfig, $cfHeader, "ORDER_ID", CF_PAYMENT_ID);
            echo $result->getCFPaymentsEntity();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Create Refund

Amount associated with a particular orderID where the transaction has gone through can be refunded using this API. Below is the code snippet to initiate the refund.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $data = [
                "refund_amount" => "1",
                "refund_id" => "refund_id_01",
                "refund_note" => "Refund data"
            ];

            $cfRefundRequest = new CFRefundRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->createRefund($cfConfig, $cfHeader, "ORDER_ID", $cfRefundRequest);
            echo $result->getCFRefund();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Fetch Refund Information

Once the refund is initiated, we can check the status of that refund using this API. Below is the code snippet to check refund information.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getRefund($cfConfig, $cfHeader, "ORDER_ID", "REFUND_ID");
            echo $result->getCFRefund();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Get Settlements

Below is the code snippet to retrieve order settlement information

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getSettlements($cfConfig, $cfHeader, "ORDER_ID");
            echo $result->getCFSettlementsEntity();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Create Payment Links

A Payment link can be created and shared with users through `email` or `sms`. Below is the code snippet to create a payment link.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");

        $data = [
            "link_id" => "link_id",
            "link_amount" => 1,
            "link_currency" => "INR",
            "link_purpose" => "Testing",
            "customer_details" => [
                "customer_phone" => "8989898989"
            ],
            "link_notify" => [
                "send_sms" => true,
                "send_email" => false,
            ]
        ];

            
            $cfLinkRequest = new CFLinkRequest($data);

            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->createPaymentLinks($cfConfig, $cfHeader, $cfLinkRequest);
            echo $result->getCFLink();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Get Payment Links By LinkID

A Payment link which was created can be retrieved using this API by specifying the `LinkID`. Below is the code snippet to get the payment link information.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");


            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->getPaymentLinkDetails($cfConfig, $cfHeader, "link_id");
            echo $result->getCFLink();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Cancel Payment Link

A created payment link can be cancelled using the below code snippet.

```
try {
            $cfConfig = new CFConfig(CFEnvironment::SANDBOX, "APP_ID", "SECRET_KEY");
            $cfHeader = new CFHeader("x_request_id");


            $apiInstance = new CFPaymentGateway();
            $result = $apiInstance->cancelPaymentLink($cfConfig, $cfHeader, "link_id");
            echo $result->getCFLinkCancelledResponse();
        } catch (ApiException $e) {
            echo $e->getResponseBody();
        }
```

## Author

nextgenapi@cashfree.com

## About this package

- API version: `2022-09-01`
