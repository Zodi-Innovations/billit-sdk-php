# Swagger\Client\JournalApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalPostGLAccount**](JournalApi.md#journalPostGLAccount) | **POST** /v1/journals/commands/import | 


# **journalPostGLAccount**
> int journalPostGLAccount($journals)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\JournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$journals = array(new \Swagger\Client\Model\Journal()); // \Swagger\Client\Model\Journal[] | 

try {
    $result = $apiInstance->journalPostGLAccount($journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalApi->journalPostGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journals** | [**\Swagger\Client\Model\Journal[]**](../Model/Journal.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

