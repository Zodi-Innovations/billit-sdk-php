# Swagger\Client\FileApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileGetOrders**](FileApi.md#fileGetOrders) | **GET** /v1/files/{fileID} | 


# **fileGetOrders**
> \Swagger\Client\Model\File fileGetOrders($file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = "file_id_example"; // string | 

try {
    $result = $apiInstance->fileGetOrders($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileGetOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\File**](../Model/File.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

