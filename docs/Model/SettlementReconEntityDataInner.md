# # SettlementReconEntityDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Unique ID associated with the event. | [optional]
**event_type** | **string** | The event type can be PAYMENT, REFUND, REFUND_REVERSAL, DISPUTE, DISPUTE_REVERSAL, CHARGEBACK, CHARGEBACK_REVERSAL, OTHER_ADJUSTMENT. | [optional]
**event_settlement_amount** | **float** | Amount that is part of the settlement corresponding to the event. | [optional]
**event_amount** | **float** | Amount corresponding to the event. Example, refund amount, dispute amount, payment amount, etc. | [optional]
**sale_type** | **string** | Indicates if it is CREDIT/DEBIT sale. | [optional]
**event_status** | **string** | Status of the event. Example - SUCCESS, FAILED, PENDING, CANCELLED. | [optional]
**entity** | **string** | Recon | [optional]
**event_time** | **string** | Time associated with the event. Example, transaction time, dispute initiation time | [optional]
**event_currency** | **string** | Curreny type - INR. | [optional]
**order_id** | **string** | Unique order ID. Alphanumeric and only &#39;-&#39; and &#39;_&#39; allowed. | [optional]
**order_amount** | **float** | The amount which was passed at the order creation time. | [optional]
**customer_phone** | **string** | Customer phone number. | [optional]
**customer_email** | **string** | Customer email. | [optional]
**customer_name** | **string** | Customer name. | [optional]
**payment_amount** | **float** | Payment amount captured. | [optional]
**payment_utr** | **string** | Unique transaction reference number of the payment. | [optional]
**payment_time** | **string** | Date and time when the payment was initiated. | [optional]
**payment_service_charge** | **float** | Service charge applicable for the payment. | [optional]
**payment_service_tax** | **float** | Service tax applicable on the payment. | [optional]
**cf_payment_id** | **string** | Cashfree Payments unique ID to identify a payment. | [optional]
**cf_settlement_id** | **string** | Unique ID to identify the settlement. | [optional]
**settlement_date** | **string** | Date and time when the settlement was processed. | [optional]
**settlement_utr** | **string** | Unique transaction reference number of the settlement. | [optional]
**split_service_charge** | **float** | Service charge that is applicable for splitting the payment. | [optional]
**split_service_tax** | **float** | Service tax applicable for splitting the amount to vendors. | [optional]
**vendor_commission** | **float** | Vendor commission applicable for this transaction. | [optional]
**closed_in_favor_of** | **string** | Specifies whether the dispute was closed in favor of the merchant or customer. Possible values - Merchant, Customer. | [optional]
**dispute_resolved_on** | **string** | Date and time when the dispute was resolved. | [optional]
**dispute_category** | **string** | Category of the dispute - Dispute code and the reason for dispute is shown. | [optional]
**dispute_note** | **string** | Note regarding the dispute. | [optional]
**refund_processed_at** | **string** | Date and time when the refund was processed. | [optional]
**refund_arn** | **string** | The bank reference number for refund. | [optional]
**refund_note** | **string** | A refund note for your reference. | [optional]
**refund_id** | **string** | An unique ID associated with the refund. | [optional]
**adjustment_remarks** | **string** | Other adjustment remarks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
