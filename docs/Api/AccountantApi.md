# Swagger\Client\AccountantApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountantDeleteFeeds**](AccountantApi.md#accountantDeleteFeeds) | **DELETE** /v1/accountant/feeds/{feedName} | Delete the feed
[**accountantGetFeeds**](AccountantApi.md#accountantGetFeeds) | **GET** /v1/accountant/feeds | 
[**accountantGetIndex**](AccountantApi.md#accountantGetIndex) | **GET** /v1/accountant/feeds/{feedName} | Get A list of all feeds to download. Only query this once per minute
[**accountantPostConfirm**](AccountantApi.md#accountantPostConfirm) | **POST** /v1/accountant/feeds/{feedName}/{feedItemID}/confirm | Confirm each succesfully downloaded feed item to remove it from the feedlist
[**accountantPostFeeds**](AccountantApi.md#accountantPostFeeds) | **POST** /v1/accountant/feeds | Register a new feed. All newly exported orders or documents will be available in this new feed.


# **accountantDeleteFeeds**
> accountantDeleteFeeds($feed_name)

Delete the feed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feed_name = "feed_name_example"; // string | 

try {
    $apiInstance->accountantDeleteFeeds($feed_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountantApi->accountantDeleteFeeds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountantGetFeeds**
> \Swagger\Client\Model\Feed[] accountantGetFeeds()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountantGetFeeds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountantApi->accountantGetFeeds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Feed[]**](../Model/Feed.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountantGetIndex**
> \Swagger\Client\Model\FeedItem[] accountantGetIndex($feed_name)

Get A list of all feeds to download. Only query this once per minute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feed_name = "feed_name_example"; // string | 

try {
    $result = $apiInstance->accountantGetIndex($feed_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountantApi->accountantGetIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\FeedItem[]**](../Model/FeedItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountantPostConfirm**
> object accountantPostConfirm($feed_name, $feed_item_id, $confirm_request)

Confirm each succesfully downloaded feed item to remove it from the feedlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feed_name = "feed_name_example"; // string | 
$feed_item_id = 56; // int | 
$confirm_request = new \Swagger\Client\Model\ConfirmRequest(); // \Swagger\Client\Model\ConfirmRequest | 

try {
    $result = $apiInstance->accountantPostConfirm($feed_name, $feed_item_id, $confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountantApi->accountantPostConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_name** | **string**|  |
 **feed_item_id** | **int**|  |
 **confirm_request** | [**\Swagger\Client\Model\ConfirmRequest**](../Model/ConfirmRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountantPostFeeds**
> accountantPostFeeds($feed)

Register a new feed. All newly exported orders or documents will be available in this new feed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feed = new \Swagger\Client\Model\Feed(); // \Swagger\Client\Model\Feed | 

try {
    $apiInstance->accountantPostFeeds($feed);
} catch (Exception $e) {
    echo 'Exception when calling AccountantApi->accountantPostFeeds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed** | [**\Swagger\Client\Model\Feed**](../Model/Feed.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

