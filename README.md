# Cashfree PG PHP SDK
![GitHub](https://img.shields.io/github/license/cashfree/cashfree-pg-sdk-php) ![Discord](https://img.shields.io/discord/931125665669972018?label=discord) ![GitHub last commit (branch)](https://img.shields.io/github/last-commit/cashfree/cashfree-pg-sdk-php/master) ![GitHub release (with filter)](https://img.shields.io/github/v/release/cashfree/cashfree-pg-sdk-php?label=latest) ![GitHub forks](https://img.shields.io/github/forks/cashfree/cashfree-pg-sdk-php)

The Cashfree PG PHP SDK offers a convenient solution to access [Cashfree PG APIs](https://docs.cashfree.com/reference/pg-new-apis-endpoint) from a server-side Go  applications. 



## Documentation

Cashfree's PG API Documentation - https://docs.cashfree.com/reference/pg-new-apis-endpoint

Learn and understand payment gateway workflows at Cashfree Payments [here](https://docs.cashfree.com/docs/payment-gateway)

Try out our interactive guides at [Cashfree Dev Studio](https://www.cashfree.com/devstudio) !

## Getting Started

`Note:` This README is for the current branch and not necessarily what's released in `Composer`

### Installation
```bash
composer require cashfree/cashfree-pg
```
### Configuration

```php
\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;
```

Generate your API keys (x-client-id , x-client-secret) from [Cashfree Merchant Dashboard](https://merchant.cashfree.com/merchants/login)

### Basic Usage
Create Order
```php
$cashfree = new \Cashfree\Cashfree();

$x_api_version = "2022-09-01";
$create_orders_request = new \Cashfree\Model\CreateOrderRequest();
$create_orders_request->setOrderAmount(1.0);
$create_orders_request->setOrderCurrency("INR");
$customer_details = new \Cashfree\Model\CustomerDetails();
$customer_details->setCustomerId("walterwNrcMi");
$customer_details->setCustomerPhone("9999999999");
$create_orders_request->setCustomerDetails($customer_details);

try {
    $result = $cashfree->PGCreateOrder($x_api_version, $create_orders_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PGCreateOrder: ', $e->getMessage(), PHP_EOL;
}
```

Get Order
```php
$x_api_version = "2022-09-01";
try {
    $response = $cashfree->PGFetchOrder($x_api_version, "<order_id>");
    print_r($response);
} catch (Exception $e) {
    echo 'Exception when calling PGFetchOrder: ', $e->getMessage(), PHP_EOL;
}
```

## Supported Resources

- [Order](docs/Orders.md)

- [Payment](docs/Payments.md)

- [Refund](docs/Refunds.md)

- [Token Vault](docs/TokenVault.md)

- [Eligiblity](docs/Eligibility.md)

- [PaymentLink](docs/PaymentLink.md)

- [Settlements](docs/Settlements.md)

- [Reconciliation](docs/Reconciliation.md)

- [Webhook](docs/Webhook.md)

## Licence

Apache Licensed. See [LICENSE.md](LICENSE.md) for more details
