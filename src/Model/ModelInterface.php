<?php

/**
 * ModelInterface
 *
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Auth\Model
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DHL Parcel Germany Account Authorization API
 *
 * This API describes how API client can obtain a token which is used to access various Parcel Germany APIs. Using this API is often the first step in making your API call. <p><h3>Preconditions</h3> You will need:  * client ID (aka \"API Key\", obtained when you create an app in developer.dhl.com) * client secret (obtained when you create an app in developer.dhl.com) * GKP user name (obtained when setting up your business account with Parcel Germany) * GKP password (obtained when setting up your business account with Parcel Germany)  <h3>Technical Information</h3> This uses an implementation of OAuth2 Password Grant (RFC 6749). After successfull usage you will:  * have an opaque access token to be used for API calls afterwards  * this token will have an expiration time
 *
 * The version of the OpenAPI document: 2.0.5
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Auth\Model;

/**
 * Interface abstracting model access.
 *
 * @package Dhl\Rest\Auth\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string;

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array;

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties(): array;

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid(): bool;

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}
