# Swagger\Client\ToProcessApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**toProcessDeleteToProcess**](ToProcessApi.md#toProcessDeleteToProcess) | **DELETE** /v1/toProcess/{uploadID} | 
[**toProcessPatchToProcess**](ToProcessApi.md#toProcessPatchToProcess) | **PATCH** /v1/toProcess/{uploadID} | 
[**toProcessPostToProcess**](ToProcessApi.md#toProcessPostToProcess) | **POST** /v1/toProcess | 
[**toProcessPostToProcess_0**](ToProcessApi.md#toProcessPostToProcess_0) | **POST** /v1/toProcess/{uploadID} | 


# **toProcessDeleteToProcess**
> toProcessDeleteToProcess($upload_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ToProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = 56; // int | 

try {
    $apiInstance->toProcessDeleteToProcess($upload_id);
} catch (Exception $e) {
    echo 'Exception when calling ToProcessApi->toProcessDeleteToProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toProcessPatchToProcess**
> toProcessPatchToProcess($upload_id, $meta)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ToProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = 56; // int | 
$meta = new \Swagger\Client\Model\UploadMetadata(); // \Swagger\Client\Model\UploadMetadata | 

try {
    $apiInstance->toProcessPatchToProcess($upload_id, $meta);
} catch (Exception $e) {
    echo 'Exception when calling ToProcessApi->toProcessPatchToProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**|  |
 **meta** | [**\Swagger\Client\Model\UploadMetadata**](../Model/UploadMetadata.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toProcessPostToProcess**
> int toProcessPostToProcess($to_process)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ToProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$to_process = new \Swagger\Client\Model\ToProcessSaveRequest(); // \Swagger\Client\Model\ToProcessSaveRequest | 

try {
    $result = $apiInstance->toProcessPostToProcess($to_process);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToProcessApi->toProcessPostToProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_process** | [**\Swagger\Client\Model\ToProcessSaveRequest**](../Model/ToProcessSaveRequest.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toProcessPostToProcess_0**
> toProcessPostToProcess_0($upload_id, $meta)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ToProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = 56; // int | 
$meta = new \Swagger\Client\Model\UploadMetadata(); // \Swagger\Client\Model\UploadMetadata | 

try {
    $apiInstance->toProcessPostToProcess_0($upload_id, $meta);
} catch (Exception $e) {
    echo 'Exception when calling ToProcessApi->toProcessPostToProcess_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**|  |
 **meta** | [**\Swagger\Client\Model\UploadMetadata**](../Model/UploadMetadata.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

