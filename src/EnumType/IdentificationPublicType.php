<?php

namespace EnumType;

/**
 * This class stands for identificationPublicType EnumType
 * @subpackage Enumerations
 */
class IdentificationPublicType
{
    /**
     * Constant for value 'orderCode'
     * @return string 'orderCode'
     */
    const VALUE_ORDER_CODE = 'orderCode';
    /**
     * Constant for value 'domesticShipmentId'
     * @return string 'domesticShipmentId'
     */
    const VALUE_DOMESTIC_SHIPMENT_ID = 'domesticShipmentId';
    /**
     * Constant for value 'packageId'
     * @return string 'packageId'
     */
    const VALUE_PACKAGE_ID = 'packageId';
    /**
     * Constant for value 'generic'
     * @return string 'generic'
     */
    const VALUE_GENERIC = 'generic';
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
     * @uses self::VALUE_ORDER_CODE
     * @uses self::VALUE_DOMESTIC_SHIPMENT_ID
     * @uses self::VALUE_PACKAGE_ID
     * @uses self::VALUE_GENERIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORDER_CODE,
            self::VALUE_DOMESTIC_SHIPMENT_ID,
            self::VALUE_PACKAGE_ID,
            self::VALUE_GENERIC,
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
