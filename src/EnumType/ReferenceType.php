<?php

namespace EnumType;

/**
 * This class stands for referenceType EnumType
 * @subpackage Enumerations
 */
class ReferenceType
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
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const VALUE_CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
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
     * @uses self::VALUE_CONSIGNEE
     * @uses self::VALUE_INVOICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_CONSIGNOR,
            self::VALUE_CONSIGNEE,
            self::VALUE_INVOICE,
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
