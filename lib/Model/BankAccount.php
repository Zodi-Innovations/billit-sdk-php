<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'int',
        'bank_account_id' => 'int',
        'iban' => 'string',
        'bic' => 'string',
        'currency' => 'string',
        'verified' => 'bool',
        'name' => 'string',
        'saldo_date' => '\DateTime',
        'saldo' => 'double',
        'external_provider_id' => 'string',
        'logo_file_id' => 'string',
        'logo_file_url' => 'string',
        'country_code' => 'string',
        'coda_by_ing_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => 'int32',
        'bank_account_id' => 'int32',
        'iban' => null,
        'bic' => null,
        'currency' => null,
        'verified' => null,
        'name' => null,
        'saldo_date' => 'date-time',
        'saldo' => 'double',
        'external_provider_id' => null,
        'logo_file_id' => 'uuid',
        'logo_file_url' => null,
        'country_code' => null,
        'coda_by_ing_user' => null
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
        'company_id' => 'CompanyID',
        'bank_account_id' => 'BankAccountID',
        'iban' => 'IBAN',
        'bic' => 'BIC',
        'currency' => 'Currency',
        'verified' => 'Verified',
        'name' => 'Name',
        'saldo_date' => 'SaldoDate',
        'saldo' => 'Saldo',
        'external_provider_id' => 'ExternalProviderID',
        'logo_file_id' => 'LogoFileID',
        'logo_file_url' => 'LogoFileUrl',
        'country_code' => 'CountryCode',
        'coda_by_ing_user' => 'CodaByINGUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'bank_account_id' => 'setBankAccountId',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'currency' => 'setCurrency',
        'verified' => 'setVerified',
        'name' => 'setName',
        'saldo_date' => 'setSaldoDate',
        'saldo' => 'setSaldo',
        'external_provider_id' => 'setExternalProviderId',
        'logo_file_id' => 'setLogoFileId',
        'logo_file_url' => 'setLogoFileUrl',
        'country_code' => 'setCountryCode',
        'coda_by_ing_user' => 'setCodaByIngUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'bank_account_id' => 'getBankAccountId',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'currency' => 'getCurrency',
        'verified' => 'getVerified',
        'name' => 'getName',
        'saldo_date' => 'getSaldoDate',
        'saldo' => 'getSaldo',
        'external_provider_id' => 'getExternalProviderId',
        'logo_file_id' => 'getLogoFileId',
        'logo_file_url' => 'getLogoFileUrl',
        'country_code' => 'getCountryCode',
        'coda_by_ing_user' => 'getCodaByIngUser'
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['verified'] = isset($data['verified']) ? $data['verified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['saldo_date'] = isset($data['saldo_date']) ? $data['saldo_date'] : null;
        $this->container['saldo'] = isset($data['saldo']) ? $data['saldo'] : null;
        $this->container['external_provider_id'] = isset($data['external_provider_id']) ? $data['external_provider_id'] : null;
        $this->container['logo_file_id'] = isset($data['logo_file_id']) ? $data['logo_file_id'] : null;
        $this->container['logo_file_url'] = isset($data['logo_file_url']) ? $data['logo_file_url'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['coda_by_ing_user'] = isset($data['coda_by_ing_user']) ? $data['coda_by_ing_user'] : null;
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
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets bank_account_id
     *
     * @return int
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param int $bank_account_id bank_account_id
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool $verified verified
     *
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets saldo_date
     *
     * @return \DateTime
     */
    public function getSaldoDate()
    {
        return $this->container['saldo_date'];
    }

    /**
     * Sets saldo_date
     *
     * @param \DateTime $saldo_date saldo_date
     *
     * @return $this
     */
    public function setSaldoDate($saldo_date)
    {
        $this->container['saldo_date'] = $saldo_date;

        return $this;
    }

    /**
     * Gets saldo
     *
     * @return double
     */
    public function getSaldo()
    {
        return $this->container['saldo'];
    }

    /**
     * Sets saldo
     *
     * @param double $saldo saldo
     *
     * @return $this
     */
    public function setSaldo($saldo)
    {
        $this->container['saldo'] = $saldo;

        return $this;
    }

    /**
     * Gets external_provider_id
     *
     * @return string
     */
    public function getExternalProviderId()
    {
        return $this->container['external_provider_id'];
    }

    /**
     * Sets external_provider_id
     *
     * @param string $external_provider_id external_provider_id
     *
     * @return $this
     */
    public function setExternalProviderId($external_provider_id)
    {
        $this->container['external_provider_id'] = $external_provider_id;

        return $this;
    }

    /**
     * Gets logo_file_id
     *
     * @return string
     */
    public function getLogoFileId()
    {
        return $this->container['logo_file_id'];
    }

    /**
     * Sets logo_file_id
     *
     * @param string $logo_file_id logo_file_id
     *
     * @return $this
     */
    public function setLogoFileId($logo_file_id)
    {
        $this->container['logo_file_id'] = $logo_file_id;

        return $this;
    }

    /**
     * Gets logo_file_url
     *
     * @return string
     */
    public function getLogoFileUrl()
    {
        return $this->container['logo_file_url'];
    }

    /**
     * Sets logo_file_url
     *
     * @param string $logo_file_url logo_file_url
     *
     * @return $this
     */
    public function setLogoFileUrl($logo_file_url)
    {
        $this->container['logo_file_url'] = $logo_file_url;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets coda_by_ing_user
     *
     * @return bool
     */
    public function getCodaByIngUser()
    {
        return $this->container['coda_by_ing_user'];
    }

    /**
     * Sets coda_by_ing_user
     *
     * @param bool $coda_by_ing_user coda_by_ing_user
     *
     * @return $this
     */
    public function setCodaByIngUser($coda_by_ing_user)
    {
        $this->container['coda_by_ing_user'] = $coda_by_ing_user;

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


