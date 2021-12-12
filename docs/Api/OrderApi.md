# Swagger\Client\OrderApi

All URIs are relative to *https://api.billit.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderGetDeleted**](OrderApi.md#orderGetDeleted) | **GET** /v1/orders/deleted | 
[**orderGetOrders**](OrderApi.md#orderGetOrders) | **GET** /v1/orders | 
[**orderGetOrders_0**](OrderApi.md#orderGetOrders_0) | **GET** /v1/orders/{orderID} | 
[**orderPatchOrders**](OrderApi.md#orderPatchOrders) | **PATCH** /v1/orders/{orderID} | 
[**orderPostOrderPayment**](OrderApi.md#orderPostOrderPayment) | **POST** /v1/orders/{orderID}/payments | 
[**orderPostOrders**](OrderApi.md#orderPostOrders) | **POST** /v1/orders | 
[**orderPostSend**](OrderApi.md#orderPostSend) | **POST** /v1/orders/commands/send | 
[**orderPutOrderBookings**](OrderApi.md#orderPutOrderBookings) | **PUT** /v1/orders/{orderID}/bookingEntries | 


# **orderGetDeleted**
> orderGetDeleted()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->orderGetDeleted();
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetDeleted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrders**
> \Swagger\Client\Model\Order[] orderGetOrders($full_text_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$full_text_search = "full_text_search_example"; // string | 

try {
    $result = $apiInstance->orderGetOrders($full_text_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_text_search** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrders_0**
> \Swagger\Client\Model\Order orderGetOrders_0($order_id, $document_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 
$document_type = "document_type_example"; // string | 

try {
    $result = $apiInstance->orderGetOrders_0($order_id, $document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrders_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **document_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPatchOrders**
> orderPatchOrders($order_id, $delta)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 
$delta = new \stdClass; // object | 

try {
    $apiInstance->orderPatchOrders($order_id, $delta);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPatchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **delta** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPostOrderPayment**
> orderPostOrderPayment($order_id, $data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 
$data = new \Swagger\Client\Model\PostPaymentRequest(); // \Swagger\Client\Model\PostPaymentRequest | 

try {
    $apiInstance->orderPostOrderPayment($order_id, $data);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPostOrderPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **data** | [**\Swagger\Client\Model\PostPaymentRequest**](../Model/PostPaymentRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPostOrders**
> int orderPostOrders($order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order = new \Swagger\Client\Model\Order(); // \Swagger\Client\Model\Order | 

try {
    $result = $apiInstance->orderPostOrders($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPostOrders: ', $e->getMessage(), PHP_EOL;
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

# **orderPostSend**
> orderPostSend($send_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_request = new \Swagger\Client\Model\SendRequest(); // \Swagger\Client\Model\SendRequest | 

try {
    $apiInstance->orderPostSend($send_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPostSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_request** | [**\Swagger\Client\Model\SendRequest**](../Model/SendRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPutOrderBookings**
> orderPutOrderBookings($order_id, $booking_entries)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 
$booking_entries = array(new \Swagger\Client\Model\BookingEntry()); // \Swagger\Client\Model\BookingEntry[] | 

try {
    $apiInstance->orderPutOrderBookings($order_id, $booking_entries);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPutOrderBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **booking_entries** | [**\Swagger\Client\Model\BookingEntry[]**](../Model/BookingEntry.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

