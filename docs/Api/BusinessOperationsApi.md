# Dhl\Rest\Auth\BusinessOperationsApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/account/auth/ropc/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hello()**](BusinessOperationsApi.md#hello) | **GET** /hello | This allows testing of the token and also alternative authentication methods. |


## `hello()`

```php
hello(): \Dhl\Rest\Auth\Model\TokenResponse
```

This allows testing of the token and also alternative authentication methods.

Makes a  token-based authentication request to a test resource. <p><h3>Usage</h3>  <h4>Bearer Token</h4>  Provide the token which you have obtained above in the HTTP header 'Authorization' as 'Bearer HereGoesMyToken'. On success, some information on the token is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Apigee) authorization: bearerAuth
$config = Dhl\Rest\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Dhl\Rest\Auth\Api\BusinessOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->hello();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOperationsApi->hello: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dhl\Rest\Auth\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
