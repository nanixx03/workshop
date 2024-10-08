<?php
/**
 * CompanyTypeEnum
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CompanyTypeEnum Class Doc Comment
 *
 * @category Class
 * @description 10 &#x3D; PrivateWithTax 20 &#x3D; PrivateWithoutTax 30 &#x3D; Personal 40 &#x3D; PersonalWithTax 50 &#x3D; PartnershipLimitedWithTax 60 &#x3D; PartnershipLimitedWithoutTax
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompanyTypeEnum
{
    /**
     * Possible values of this enum
     */
    const NUMBER_10 = 10;

    const NUMBER_20 = 20;

    const NUMBER_30 = 30;

    const NUMBER_40 = 40;

    const NUMBER_50 = 50;

    const NUMBER_60 = 60;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_10,
            self::NUMBER_20,
            self::NUMBER_30,
            self::NUMBER_40,
            self::NUMBER_50,
            self::NUMBER_60
        ];
    }
}


