# Swagger\Client\MiscApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**miscGetCompanySearch**](MiscApi.md#miscGetCompanySearch) | **GET** /v1/misc/companysearch/{Keywords} | 
[**miscGetTranslation**](MiscApi.md#miscGetTranslation) | **GET** /v1/misc/typecodes/{TypeCodeType}/{key} | 
[**miscGetTypeCodes**](MiscApi.md#miscGetTypeCodes) | **GET** /v1/misc/typecodes/{TypeCodeType} | 


# **miscGetCompanySearch**
> \Swagger\Client\Model\CompanySearchResult miscGetCompanySearch($keywords)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keywords = "keywords_example"; // string | 

try {
    $result = $apiInstance->miscGetCompanySearch($keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->miscGetCompanySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywords** | **string**|  |

### Return type

[**\Swagger\Client\Model\CompanySearchResult**](../Model/CompanySearchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **miscGetTranslation**
> \Swagger\Client\Model\TypeCodeResult miscGetTranslation($type_code_type, $key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_code_type = "type_code_type_example"; // string | 
$key = "key_example"; // string | 

try {
    $result = $apiInstance->miscGetTranslation($type_code_type, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->miscGetTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_code_type** | **string**|  |
 **key** | **string**|  |

### Return type

[**\Swagger\Client\Model\TypeCodeResult**](../Model/TypeCodeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **miscGetTypeCodes**
> \Swagger\Client\Model\TypeCodeResult miscGetTypeCodes($type_code_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_code_type = "type_code_type_example"; // string | 

try {
    $result = $apiInstance->miscGetTypeCodes($type_code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->miscGetTypeCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_code_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\TypeCodeResult**](../Model/TypeCodeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

