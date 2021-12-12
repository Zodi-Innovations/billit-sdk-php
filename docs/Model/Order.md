# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** |  | [optional] 
**company_id** | **int** |  | [optional] 
**order_pdf** | [**\Swagger\Client\Model\File**](File.md) |  | [optional] 
**attachments** | [**\Swagger\Client\Model\File[]**](File.md) |  | [optional] 
**order_number** | **string** |  | [optional] 
**customer_id** | **int** |  | [optional] 
**supplier_id** | **int** |  | [optional] 
**counter_party_id** | **int** |  | [optional] 
**customer** | [**\Swagger\Client\Model\Party**](Party.md) |  | [optional] 
**supplier** | [**\Swagger\Client\Model\Party**](Party.md) |  | [optional] 
**counter_party** | [**\Swagger\Client\Model\Party**](Party.md) |  | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_type** | **string** |  | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_direction** | **string** |  | [optional] 
**order_lines** | [**\Swagger\Client\Model\OrderLine[]**](OrderLine.md) |  | [optional] 
**booking_entries** | [**\Swagger\Client\Model\BookingEntry[]**](BookingEntry.md) |  | [optional] 
**journal** | **string** |  | [optional] 
**order_title** | **string** |  | [optional] 
**payment_discount_percentage** | **double** |  | [optional] 
**payment_discount_amount** | **double** |  | [optional] 
**payment_discount_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**vat_groups** | [**\Swagger\Client\Model\VatGroup[]**](VatGroup.md) |  | [optional] 
**ventilation_code** | **string** |  | [optional] 
**total_excl** | **double** |  | [optional] 
**total_incl** | **double** |  | [optional] 
**total_vat** | **double** |  | [optional] 
**reference** | **string** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**department_id** | **int** |  | [optional] 
**payment_reference** | **string** |  | [optional] 
**about_invoice_number** | **string** |  | [optional] 
**paid** | **bool** |  | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**external_provider_id** | **string** |  | [optional] 
**external_provider** | **string** |  | [optional] 
**external_provider_references** | [**\Swagger\Client\Model\ExternalProviderReference[]**](ExternalProviderReference.md) |  | [optional] 
**comments** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**vat_deduction** | **double** |  | [optional] 
**internal_info** | **string** |  | [optional] 
**is_sent** | **bool** |  | [optional] 
**custom_fields** | **map[string,string]** |  | [optional] 
**period_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**period_till** | [**\DateTime**](\DateTime.md) |  | [optional] 
**account_code** | **int** |  | [optional] 
**last_reminder** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reminders_sent** | **int** |  | [optional] 
**to_pay** | **double** |  | [optional] 
**order_status** | **string** |  | [optional] 
**approval_status** | **string** |  | [optional] 
**overdue** | **bool** |  | [optional] 
**days_overdue** | **int** |  | [optional] 
**fx_rate_to_foreign** | **double** |  | [optional] 
**payment_method** | **string** |  | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**exported_to_connector** | **bool** |  | [optional] 
**payment_links** | [**\Swagger\Client\Model\PaymentLink[]**](PaymentLink.md) |  | [optional] 
**template_id** | **int** |  | [optional] 
**analytic_cost_bearer** | **string** |  | [optional] 
**analytic_cost_center** | **string** |  | [optional] 
**accountant_verification_needed** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

