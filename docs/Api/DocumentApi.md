# Swagger\Client\DocumentApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentGetDocument**](DocumentApi.md#documentGetDocument) | **GET** /v1/documents/{documentID} | 
[**documentGetDocuments**](DocumentApi.md#documentGetDocuments) | **GET** /v1/documents | 
[**documentPostDocument**](DocumentApi.md#documentPostDocument) | **POST** /v1/documents | 


# **documentGetDocument**
> \Swagger\Client\Model\DocumentAPIView documentGetDocument($document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 56; // int | 

try {
    $result = $apiInstance->documentGetDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\DocumentAPIView**](../Model/DocumentAPIView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentGetDocuments**
> \Swagger\Client\Model\DocumentAPIView[] documentGetDocuments($full_text_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$full_text_search = "full_text_search_example"; // string | 

try {
    $result = $apiInstance->documentGetDocuments($full_text_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentGetDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_text_search** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DocumentAPIView[]**](../Model/DocumentAPIView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentPostDocument**
> int documentPostDocument($document)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document = new \Swagger\Client\Model\Document(); // \Swagger\Client\Model\Document | 

try {
    $result = $apiInstance->documentPostDocument($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentPostDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | [**\Swagger\Client\Model\Document**](../Model/Document.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

