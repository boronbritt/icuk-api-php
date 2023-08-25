# OpenAPI\Client\BroadbandStabilityApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandStabilityCurrentUsernameGet()**](BroadbandStabilityApi.md#broadbandStabilityCurrentUsernameGet) | **GET** /broadband/stability/current/{username} | Gets the current stability option of the line. The stability option will change once the order is complete |
| [**broadbandStabilityPut()**](BroadbandStabilityApi.md#broadbandStabilityPut) | **PUT** /broadband/stability | Updates the stability of the line |


## `broadbandStabilityCurrentUsernameGet()`

```php
broadbandStabilityCurrentUsernameGet($username, $api_platform): string
```

Gets the current stability option of the line. The stability option will change once the order is complete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandStabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandStabilityCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandStabilityApi->broadbandStabilityCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandStabilityPut()`

```php
broadbandStabilityPut($api_platform, $broadband_stability): \OpenAPI\Client\Model\BroadbandStabilityTermination
```

Updates the stability of the line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandStabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_stability = new \OpenAPI\Client\Model\BroadbandStability(); // \OpenAPI\Client\Model\BroadbandStability | A BroadbandStability structure

try {
    $result = $apiInstance->broadbandStabilityPut($api_platform, $broadband_stability);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandStabilityApi->broadbandStabilityPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_stability** | [**\OpenAPI\Client\Model\BroadbandStability**](../Model/BroadbandStability.md)| A BroadbandStability structure | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandStabilityTermination**](../Model/BroadbandStabilityTermination.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
