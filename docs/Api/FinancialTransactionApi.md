# Swagger\Client\FinancialTransactionApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financialTransactionGetBankTransactions**](FinancialTransactionApi.md#financialTransactionGetBankTransactions) | **GET** /v1/financialTransactions | 
[**financialTransactionPostImport**](FinancialTransactionApi.md#financialTransactionPostImport) | **POST** /v1/financialTransactions/commands/import | 
[**financialTransactionPostImportFile**](FinancialTransactionApi.md#financialTransactionPostImportFile) | **POST** /v1/financialTransactions/importFile | 


# **financialTransactionGetBankTransactions**
> financialTransactionGetBankTransactions($full_text_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FinancialTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$full_text_search = "full_text_search_example"; // string | 

try {
    $apiInstance->financialTransactionGetBankTransactions($full_text_search);
} catch (Exception $e) {
    echo 'Exception when calling FinancialTransactionApi->financialTransactionGetBankTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_text_search** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialTransactionPostImport**
> financialTransactionPostImport($transactions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FinancialTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transactions = array(new \Swagger\Client\Model\Transaction()); // \Swagger\Client\Model\Transaction[] | 

try {
    $apiInstance->financialTransactionPostImport($transactions);
} catch (Exception $e) {
    echo 'Exception when calling FinancialTransactionApi->financialTransactionPostImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions** | [**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialTransactionPostImportFile**
> financialTransactionPostImportFile($import_file)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FinancialTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_file = new \Swagger\Client\Model\File(); // \Swagger\Client\Model\File | 

try {
    $apiInstance->financialTransactionPostImportFile($import_file);
} catch (Exception $e) {
    echo 'Exception when calling FinancialTransactionApi->financialTransactionPostImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_file** | [**\Swagger\Client\Model\File**](../Model/File.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

