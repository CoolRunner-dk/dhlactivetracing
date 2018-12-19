<?php

namespace DHLTracking\EnumType;

/**
 * This class stands for accountType EnumType
 * @subpackage Enumerations
 */
class AccountType
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'CONSIGNOR'
     * @return string 'CONSIGNOR'
     */
    const VALUE_CONSIGNOR = 'CONSIGNOR';
    /**
     * Constant for value 'CONSIGNOR_INVOICE'
     * @return string 'CONSIGNOR_INVOICE'
     */
    const VALUE_CONSIGNOR_INVOICE = 'CONSIGNOR_INVOICE';
    /**
     * Constant for value 'MAIN_CONSIGNOR'
     * @return string 'MAIN_CONSIGNOR'
     */
    const VALUE_MAIN_CONSIGNOR = 'MAIN_CONSIGNOR';
    /**
     * Constant for value 'PICKUP'
     * @return string 'PICKUP'
     */
    const VALUE_PICKUP = 'PICKUP';
    /**
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const VALUE_CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'CONSIGNEE_INVOICE'
     * @return string 'CONSIGNEE_INVOICE'
     */
    const VALUE_CONSIGNEE_INVOICE = 'CONSIGNEE_INVOICE';
    /**
     * Constant for value 'DELIVERY'
     * @return string 'DELIVERY'
     */
    const VALUE_DELIVERY = 'DELIVERY';
    /**
     * Constant for value 'INVOICE_RECIPIENT'
     * @return string 'INVOICE_RECIPIENT'
     */
    const VALUE_INVOICE_RECIPIENT = 'INVOICE_RECIPIENT';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CONSIGNOR
     * @uses self::VALUE_CONSIGNOR_INVOICE
     * @uses self::VALUE_MAIN_CONSIGNOR
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_CONSIGNEE
     * @uses self::VALUE_CONSIGNEE_INVOICE
     * @uses self::VALUE_DELIVERY
     * @uses self::VALUE_INVOICE_RECIPIENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_CONSIGNOR,
            self::VALUE_CONSIGNOR_INVOICE,
            self::VALUE_MAIN_CONSIGNOR,
            self::VALUE_PICKUP,
            self::VALUE_CONSIGNEE,
            self::VALUE_CONSIGNEE_INVOICE,
            self::VALUE_DELIVERY,
            self::VALUE_INVOICE_RECIPIENT,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
