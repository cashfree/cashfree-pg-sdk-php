# Webhook


## PGVerifyWebhookSignature

> PGVerifyWebhookSignature($signature, $rawBody, $timestamp)

Verify Webhook Signatures ([Docs](https://docs.cashfree.com/reference/pg-webhook))

### Example

```php
$signature = "signature";
$raw_body = "raw_body";
$timestamp = "timestamp";
try {
  $result = $cashfree->PGVerifyWebhookSignature($signature, $raw_body, $timestamp);
} catch (Exception $e) {
  echo 'Exception when calling PGVerifyWebhookSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**signature** | **string** | The "x-webhook-signature" present in the headers received | 
**rawBody** | **string** | The request body received in the request in string format |
**timestamp** | **string** | The "x-webhook-timestamp" present in the headers received | 


### Response

```json
{
    "type": "PAYMENT_SUCCESS_WEBHOOK",
    "rawBody":"{\"type\":\"PAYMENT_SUCCESS_WEBHOOK\",\"data\":{}}",
    "object": {
        "type": "PAYMENT_SUCCESS_WEBHOOK",
        "data": {
            
        }
    }
}
```

`Note:` The `object` in the response is returned as a JSON object. But it can be of any of the following types:
- [Payment Webhook](https://docs.cashfree.com/docs/payment-webhooks)
- [Refund Webhook](https://docs.cashfree.com/docs/refunds-webhook)
- [Settlement Webhook](https://docs.cashfree.com/docs/settlements-webhook)
- [Instrument Webhook](https://docs.cashfree.com/docs/instrument-webhook)