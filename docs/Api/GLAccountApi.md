# Swagger\Client\GLAccountApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLAccountPostGLAccount**](GLAccountApi.md#gLAccountPostGLAccount) | **POST** /v1/glaccounts | 
[**gLAccountPostGLAccount_0**](GLAccountApi.md#gLAccountPostGLAccount_0) | **POST** /v1/glaccounts/commands/import | 


# **gLAccountPostGLAccount**
> int gLAccountPostGLAccount($account)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GLAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Swagger\Client\Model\GLAccount(); // \Swagger\Client\Model\GLAccount | 

try {
    $result = $apiInstance->gLAccountPostGLAccount($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountApi->gLAccountPostGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**\Swagger\Client\Model\GLAccount**](../Model/GLAccount.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLAccountPostGLAccount_0**
> int gLAccountPostGLAccount_0($accounts)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GLAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accounts = array(new \Swagger\Client\Model\GLAccount()); // \Swagger\Client\Model\GLAccount[] | 

try {
    $result = $apiInstance->gLAccountPostGLAccount_0($accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountApi->gLAccountPostGLAccount_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounts** | [**\Swagger\Client\Model\GLAccount[]**](../Model/GLAccount.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

