<?php
/**
 * OrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billit.API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'double',
        'unit_price_excl' => 'double',
        'account_code' => 'int',
        'reference' => 'string',
        'description' => 'string',
        'total_excl' => 'double',
        'total_vat' => 'double',
        'vat_percentage' => 'double',
        'ventilation_code' => 'string',
        'product_id' => 'int',
        'unit' => 'string',
        'custom_fields' => 'map[string,string]',
        'external_provider_references' => '\Swagger\Client\Model\ExternalProviderReference[]',
        'incl_leading' => 'bool',
        'unit_price_incl' => 'double',
        'total_incl' => 'double',
        'analytic_cost_bearer' => 'string',
        'analytic_cost_center' => 'string',
        'reduction_percentage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => 'double',
        'unit_price_excl' => 'double',
        'account_code' => 'int32',
        'reference' => null,
        'description' => null,
        'total_excl' => 'double',
        'total_vat' => 'double',
        'vat_percentage' => 'double',
        'ventilation_code' => null,
        'product_id' => 'int32',
        'unit' => null,
        'custom_fields' => null,
        'external_provider_references' => null,
        'incl_leading' => null,
        'unit_price_incl' => 'double',
        'total_incl' => 'double',
        'analytic_cost_bearer' => null,
        'analytic_cost_center' => null,
        'reduction_percentage' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'Quantity',
        'unit_price_excl' => 'UnitPriceExcl',
        'account_code' => 'AccountCode',
        'reference' => 'Reference',
        'description' => 'Description',
        'total_excl' => 'TotalExcl',
        'total_vat' => 'TotalVAT',
        'vat_percentage' => 'VATPercentage',
        'ventilation_code' => 'VentilationCode',
        'product_id' => 'ProductID',
        'unit' => 'Unit',
        'custom_fields' => 'CustomFields',
        'external_provider_references' => 'ExternalProviderReferences',
        'incl_leading' => 'InclLeading',
        'unit_price_incl' => 'UnitPriceIncl',
        'total_incl' => 'TotalIncl',
        'analytic_cost_bearer' => 'AnalyticCostBearer',
        'analytic_cost_center' => 'AnalyticCostCenter',
        'reduction_percentage' => 'ReductionPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'unit_price_excl' => 'setUnitPriceExcl',
        'account_code' => 'setAccountCode',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'total_excl' => 'setTotalExcl',
        'total_vat' => 'setTotalVat',
        'vat_percentage' => 'setVatPercentage',
        'ventilation_code' => 'setVentilationCode',
        'product_id' => 'setProductId',
        'unit' => 'setUnit',
        'custom_fields' => 'setCustomFields',
        'external_provider_references' => 'setExternalProviderReferences',
        'incl_leading' => 'setInclLeading',
        'unit_price_incl' => 'setUnitPriceIncl',
        'total_incl' => 'setTotalIncl',
        'analytic_cost_bearer' => 'setAnalyticCostBearer',
        'analytic_cost_center' => 'setAnalyticCostCenter',
        'reduction_percentage' => 'setReductionPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'unit_price_excl' => 'getUnitPriceExcl',
        'account_code' => 'getAccountCode',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'total_excl' => 'getTotalExcl',
        'total_vat' => 'getTotalVat',
        'vat_percentage' => 'getVatPercentage',
        'ventilation_code' => 'getVentilationCode',
        'product_id' => 'getProductId',
        'unit' => 'getUnit',
        'custom_fields' => 'getCustomFields',
        'external_provider_references' => 'getExternalProviderReferences',
        'incl_leading' => 'getInclLeading',
        'unit_price_incl' => 'getUnitPriceIncl',
        'total_incl' => 'getTotalIncl',
        'analytic_cost_bearer' => 'getAnalyticCostBearer',
        'analytic_cost_center' => 'getAnalyticCostCenter',
        'reduction_percentage' => 'getReductionPercentage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price_excl'] = isset($data['unit_price_excl']) ? $data['unit_price_excl'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['total_excl'] = isset($data['total_excl']) ? $data['total_excl'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['vat_percentage'] = isset($data['vat_percentage']) ? $data['vat_percentage'] : null;
        $this->container['ventilation_code'] = isset($data['ventilation_code']) ? $data['ventilation_code'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['external_provider_references'] = isset($data['external_provider_references']) ? $data['external_provider_references'] : null;
        $this->container['incl_leading'] = isset($data['incl_leading']) ? $data['incl_leading'] : null;
        $this->container['unit_price_incl'] = isset($data['unit_price_incl']) ? $data['unit_price_incl'] : null;
        $this->container['total_incl'] = isset($data['total_incl']) ? $data['total_incl'] : null;
        $this->container['analytic_cost_bearer'] = isset($data['analytic_cost_bearer']) ? $data['analytic_cost_bearer'] : null;
        $this->container['analytic_cost_center'] = isset($data['analytic_cost_center']) ? $data['analytic_cost_center'] : null;
        $this->container['reduction_percentage'] = isset($data['reduction_percentage']) ? $data['reduction_percentage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price_excl
     *
     * @return double
     */
    public function getUnitPriceExcl()
    {
        return $this->container['unit_price_excl'];
    }

    /**
     * Sets unit_price_excl
     *
     * @param double $unit_price_excl unit_price_excl
     *
     * @return $this
     */
    public function setUnitPriceExcl($unit_price_excl)
    {
        $this->container['unit_price_excl'] = $unit_price_excl;

        return $this;
    }

    /**
     * Gets account_code
     *
     * @return int
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param int $account_code account_code
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->container['account_code'] = $account_code;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets total_excl
     *
     * @return double
     */
    public function getTotalExcl()
    {
        return $this->container['total_excl'];
    }

    /**
     * Sets total_excl
     *
     * @param double $total_excl total_excl
     *
     * @return $this
     */
    public function setTotalExcl($total_excl)
    {
        $this->container['total_excl'] = $total_excl;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return double
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param double $total_vat total_vat
     *
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return double
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param double $vat_percentage vat_percentage
     *
     * @return $this
     */
    public function setVatPercentage($vat_percentage)
    {
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets ventilation_code
     *
     * @return string
     */
    public function getVentilationCode()
    {
        return $this->container['ventilation_code'];
    }

    /**
     * Sets ventilation_code
     *
     * @param string $ventilation_code ventilation_code
     *
     * @return $this
     */
    public function setVentilationCode($ventilation_code)
    {
        $this->container['ventilation_code'] = $ventilation_code;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,string]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,string] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets external_provider_references
     *
     * @return \Swagger\Client\Model\ExternalProviderReference[]
     */
    public function getExternalProviderReferences()
    {
        return $this->container['external_provider_references'];
    }

    /**
     * Sets external_provider_references
     *
     * @param \Swagger\Client\Model\ExternalProviderReference[] $external_provider_references external_provider_references
     *
     * @return $this
     */
    public function setExternalProviderReferences($external_provider_references)
    {
        $this->container['external_provider_references'] = $external_provider_references;

        return $this;
    }

    /**
     * Gets incl_leading
     *
     * @return bool
     */
    public function getInclLeading()
    {
        return $this->container['incl_leading'];
    }

    /**
     * Sets incl_leading
     *
     * @param bool $incl_leading incl_leading
     *
     * @return $this
     */
    public function setInclLeading($incl_leading)
    {
        $this->container['incl_leading'] = $incl_leading;

        return $this;
    }

    /**
     * Gets unit_price_incl
     *
     * @return double
     */
    public function getUnitPriceIncl()
    {
        return $this->container['unit_price_incl'];
    }

    /**
     * Sets unit_price_incl
     *
     * @param double $unit_price_incl unit_price_incl
     *
     * @return $this
     */
    public function setUnitPriceIncl($unit_price_incl)
    {
        $this->container['unit_price_incl'] = $unit_price_incl;

        return $this;
    }

    /**
     * Gets total_incl
     *
     * @return double
     */
    public function getTotalIncl()
    {
        return $this->container['total_incl'];
    }

    /**
     * Sets total_incl
     *
     * @param double $total_incl total_incl
     *
     * @return $this
     */
    public function setTotalIncl($total_incl)
    {
        $this->container['total_incl'] = $total_incl;

        return $this;
    }

    /**
     * Gets analytic_cost_bearer
     *
     * @return string
     */
    public function getAnalyticCostBearer()
    {
        return $this->container['analytic_cost_bearer'];
    }

    /**
     * Sets analytic_cost_bearer
     *
     * @param string $analytic_cost_bearer analytic_cost_bearer
     *
     * @return $this
     */
    public function setAnalyticCostBearer($analytic_cost_bearer)
    {
        $this->container['analytic_cost_bearer'] = $analytic_cost_bearer;

        return $this;
    }

    /**
     * Gets analytic_cost_center
     *
     * @return string
     */
    public function getAnalyticCostCenter()
    {
        return $this->container['analytic_cost_center'];
    }

    /**
     * Sets analytic_cost_center
     *
     * @param string $analytic_cost_center analytic_cost_center
     *
     * @return $this
     */
    public function setAnalyticCostCenter($analytic_cost_center)
    {
        $this->container['analytic_cost_center'] = $analytic_cost_center;

        return $this;
    }

    /**
     * Gets reduction_percentage
     *
     * @return double
     */
    public function getReductionPercentage()
    {
        return $this->container['reduction_percentage'];
    }

    /**
     * Sets reduction_percentage
     *
     * @param double $reduction_percentage reduction_percentage
     *
     * @return $this
     */
    public function setReductionPercentage($reduction_percentage)
    {
        $this->container['reduction_percentage'] = $reduction_percentage;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


