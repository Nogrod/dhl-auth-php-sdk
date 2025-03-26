# Dhl\Rest\Auth\GeneralApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/account/auth/ropc/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSemanticVersion()**](GeneralApi.md#getSemanticVersion) | **GET** / | Return API version |


## `getSemanticVersion()`

```php
getSemanticVersion(): \Dhl\Rest\Auth\Model\GetSemanticVersion200Response
```

Return API version

Returns the current version of the API as major.minor.patch. Supports content negotiation (json and html) and does __not__ require authentication. This can be used as healthcheck or to identify which version of the API is being used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Apigee) authorization: bearerAuth
$config = Dhl\Rest\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Dhl\Rest\Auth\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSemanticVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getSemanticVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dhl\Rest\Auth\Model\GetSemanticVersion200Response**](../Model/GetSemanticVersion200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
