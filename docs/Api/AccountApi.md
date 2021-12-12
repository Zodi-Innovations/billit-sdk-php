# Swagger\Client\AccountApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountGetAccountInformation**](AccountApi.md#accountGetAccountInformation) | **GET** /v1/account/accountInformation | 
[**accountGetSSOToken**](AccountApi.md#accountGetSSOToken) | **GET** /v1/account/ssoToken | 
[**accountPostSequences**](AccountApi.md#accountPostSequences) | **POST** /v1/account/sequences | 
[**accountRegisterCompany**](AccountApi.md#accountRegisterCompany) | **POST** /v1/account/registercompany | 


# **accountGetAccountInformation**
> \Swagger\Client\Model\AccountInformation accountGetAccountInformation()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountGetAccountInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetAccountInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AccountInformation**](../Model/AccountInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetSSOToken**
> object accountGetSSOToken()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountGetSSOToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetSSOToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPostSequences**
> object accountPostSequences($sequence_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence_request = new \Swagger\Client\Model\SequenceRequest(); // \Swagger\Client\Model\SequenceRequest | 

try {
    $result = $apiInstance->accountPostSequences($sequence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPostSequences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence_request** | [**\Swagger\Client\Model\SequenceRequest**](../Model/SequenceRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountRegisterCompany**
> object accountRegisterCompany($register_account_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_account_request = new \Swagger\Client\Model\RegisterAccountRequest(); // \Swagger\Client\Model\RegisterAccountRequest | 

try {
    $result = $apiInstance->accountRegisterCompany($register_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountRegisterCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_account_request** | [**\Swagger\Client\Model\RegisterAccountRequest**](../Model/RegisterAccountRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

