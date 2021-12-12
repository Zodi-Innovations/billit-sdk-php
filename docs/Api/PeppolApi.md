# Swagger\Client\PeppolApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**peppolDeleteParticipant**](PeppolApi.md#peppolDeleteParticipant) | **DELETE** /v1/peppol/participants | 
[**peppolGetInbox**](PeppolApi.md#peppolGetInbox) | **GET** /v1/peppol/inbox | 
[**peppolGetParticipantInformation**](PeppolApi.md#peppolGetParticipantInformation) | **GET** /v1/peppol/participantInformation/{VATorCBE} | 
[**peppolInboxItemConfirm**](PeppolApi.md#peppolInboxItemConfirm) | **POST** /v1/peppol/inbox/{inboxItemId}/confirm | 
[**peppolPostParticipant**](PeppolApi.md#peppolPostParticipant) | **POST** /v1/peppol/participants | 
[**peppolPostSendOrder**](PeppolApi.md#peppolPostSendOrder) | **POST** /v1/peppol/sendOrder | 


# **peppolDeleteParticipant**
> int peppolDeleteParticipant($register_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_request = new \Swagger\Client\Model\DeleteParticipantRequest(); // \Swagger\Client\Model\DeleteParticipantRequest | 

try {
    $result = $apiInstance->peppolDeleteParticipant($register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolDeleteParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\Swagger\Client\Model\DeleteParticipantRequest**](../Model/DeleteParticipantRequest.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peppolGetInbox**
> \Swagger\Client\Model\InboxGetResult peppolGetInbox($receiver_company_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiver_company_id = "receiver_company_id_example"; // string | 

try {
    $result = $apiInstance->peppolGetInbox($receiver_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolGetInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiver_company_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InboxGetResult**](../Model/InboxGetResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peppolGetParticipantInformation**
> \Swagger\Client\Model\ParticipantInformationResponse peppolGetParticipantInformation($va_tor_cbe)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$va_tor_cbe = "va_tor_cbe_example"; // string | 

try {
    $result = $apiInstance->peppolGetParticipantInformation($va_tor_cbe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolGetParticipantInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **va_tor_cbe** | **string**|  |

### Return type

[**\Swagger\Client\Model\ParticipantInformationResponse**](../Model/ParticipantInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peppolInboxItemConfirm**
> int peppolInboxItemConfirm($inbox_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbox_item_id = 56; // int | 

try {
    $result = $apiInstance->peppolInboxItemConfirm($inbox_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolInboxItemConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_item_id** | **int**|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peppolPostParticipant**
> int peppolPostParticipant($register_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_request = new \Swagger\Client\Model\RegisterParticipantRequest(); // \Swagger\Client\Model\RegisterParticipantRequest | 

try {
    $result = $apiInstance->peppolPostParticipant($register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolPostParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\Swagger\Client\Model\RegisterParticipantRequest**](../Model/RegisterParticipantRequest.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peppolPostSendOrder**
> int peppolPostSendOrder($order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order = new \Swagger\Client\Model\Order(); // \Swagger\Client\Model\Order | 

try {
    $result = $apiInstance->peppolPostSendOrder($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->peppolPostSendOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Swagger\Client\Model\Order**](../Model/Order.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

