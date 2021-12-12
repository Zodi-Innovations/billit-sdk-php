<?php
/**
 * BookingEntry
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
 * BookingEntry Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'booking_entry_id' => 'int',
        'order_id' => 'int',
        'account_code' => 'int',
        'amount' => 'double',
        'debet_or_credit' => 'string',
        'vat1' => 'int',
        'vat2' => 'int',
        'vat3' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'booking_entry_id' => 'int32',
        'order_id' => 'int32',
        'account_code' => 'int32',
        'amount' => 'double',
        'debet_or_credit' => null,
        'vat1' => 'int32',
        'vat2' => 'int32',
        'vat3' => 'int32'
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
        'booking_entry_id' => 'BookingEntryID',
        'order_id' => 'OrderID',
        'account_code' => 'AccountCode',
        'amount' => 'Amount',
        'debet_or_credit' => 'DebetOrCredit',
        'vat1' => 'VAT1',
        'vat2' => 'VAT2',
        'vat3' => 'VAT3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'booking_entry_id' => 'setBookingEntryId',
        'order_id' => 'setOrderId',
        'account_code' => 'setAccountCode',
        'amount' => 'setAmount',
        'debet_or_credit' => 'setDebetOrCredit',
        'vat1' => 'setVat1',
        'vat2' => 'setVat2',
        'vat3' => 'setVat3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'booking_entry_id' => 'getBookingEntryId',
        'order_id' => 'getOrderId',
        'account_code' => 'getAccountCode',
        'amount' => 'getAmount',
        'debet_or_credit' => 'getDebetOrCredit',
        'vat1' => 'getVat1',
        'vat2' => 'getVat2',
        'vat3' => 'getVat3'
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
        $this->container['booking_entry_id'] = isset($data['booking_entry_id']) ? $data['booking_entry_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['debet_or_credit'] = isset($data['debet_or_credit']) ? $data['debet_or_credit'] : null;
        $this->container['vat1'] = isset($data['vat1']) ? $data['vat1'] : null;
        $this->container['vat2'] = isset($data['vat2']) ? $data['vat2'] : null;
        $this->container['vat3'] = isset($data['vat3']) ? $data['vat3'] : null;
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
     * Gets booking_entry_id
     *
     * @return int
     */
    public function getBookingEntryId()
    {
        return $this->container['booking_entry_id'];
    }

    /**
     * Sets booking_entry_id
     *
     * @param int $booking_entry_id booking_entry_id
     *
     * @return $this
     */
    public function setBookingEntryId($booking_entry_id)
    {
        $this->container['booking_entry_id'] = $booking_entry_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets debet_or_credit
     *
     * @return string
     */
    public function getDebetOrCredit()
    {
        return $this->container['debet_or_credit'];
    }

    /**
     * Sets debet_or_credit
     *
     * @param string $debet_or_credit debet_or_credit
     *
     * @return $this
     */
    public function setDebetOrCredit($debet_or_credit)
    {
        $this->container['debet_or_credit'] = $debet_or_credit;

        return $this;
    }

    /**
     * Gets vat1
     *
     * @return int
     */
    public function getVat1()
    {
        return $this->container['vat1'];
    }

    /**
     * Sets vat1
     *
     * @param int $vat1 vat1
     *
     * @return $this
     */
    public function setVat1($vat1)
    {
        $this->container['vat1'] = $vat1;

        return $this;
    }

    /**
     * Gets vat2
     *
     * @return int
     */
    public function getVat2()
    {
        return $this->container['vat2'];
    }

    /**
     * Sets vat2
     *
     * @param int $vat2 vat2
     *
     * @return $this
     */
    public function setVat2($vat2)
    {
        $this->container['vat2'] = $vat2;

        return $this;
    }

    /**
     * Gets vat3
     *
     * @return int
     */
    public function getVat3()
    {
        return $this->container['vat3'];
    }

    /**
     * Sets vat3
     *
     * @param int $vat3 vat3
     *
     * @return $this
     */
    public function setVat3($vat3)
    {
        $this->container['vat3'] = $vat3;

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

