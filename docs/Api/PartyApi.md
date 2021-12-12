# Swagger\Client\PartyApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partyGetParties**](PartyApi.md#partyGetParties) | **GET** /v1/parties | 
[**partyGetParty**](PartyApi.md#partyGetParty) | **GET** /v1/parties/{partyID} | 
[**partyPatchParties**](PartyApi.md#partyPatchParties) | **PATCH** /v1/parties/{partyID} | 
[**partyPostParty**](PartyApi.md#partyPostParty) | **POST** /v1/parties | 


# **partyGetParties**
> \Swagger\Client\Model\Party[] partyGetParties($full_text_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$full_text_search = "full_text_search_example"; // string | 

try {
    $result = $apiInstance->partyGetParties($full_text_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->partyGetParties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_text_search** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Party[]**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partyGetParty**
> \Swagger\Client\Model\Party partyGetParty($party_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int | 

try {
    $result = $apiInstance->partyGetParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->partyGetParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Party**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partyPatchParties**
> partyPatchParties($party_id, $delta)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int | 
$delta = new \stdClass; // object | 

try {
    $apiInstance->partyPatchParties($party_id, $delta);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->partyPatchParties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**|  |
 **delta** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partyPostParty**
> int partyPostParty($party)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party = new \Swagger\Client\Model\Party(); // \Swagger\Client\Model\Party | 

try {
    $result = $apiInstance->partyPostParty($party);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->partyPostParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party** | [**\Swagger\Client\Model\Party**](../Model/Party.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

