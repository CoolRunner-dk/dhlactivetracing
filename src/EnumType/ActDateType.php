<?php

namespace DHLTracking\EnumType;

/**
 * This class stands for actDateType EnumType
 * @subpackage Enumerations
 */
class ActDateType
{
    /**
     * Constant for value 'orderCreationDate'
     * @return string 'orderCreationDate'
     */
    const VALUE_ORDER_CREATION_DATE = 'orderCreationDate';
    /**
     * Constant for value 'pickupDate'
     * @return string 'pickupDate'
     */
    const VALUE_PICKUP_DATE = 'pickupDate';
    /**
     * Constant for value 'combinedDate'
     * @return string 'combinedDate'
     */
    const VALUE_COMBINED_DATE = 'combinedDate';
    /**
     * Constant for value 'deliveryDate'
     * @return string 'deliveryDate'
     */
    const VALUE_DELIVERY_DATE = 'deliveryDate';
    /**
     * Constant for value 'lastStatusDate'
     * @return string 'lastStatusDate'
     */
    const VALUE_LAST_STATUS_DATE = 'lastStatusDate';
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
     * @uses self::VALUE_ORDER_CREATION_DATE
     * @uses self::VALUE_PICKUP_DATE
     * @uses self::VALUE_COMBINED_DATE
     * @uses self::VALUE_DELIVERY_DATE
     * @uses self::VALUE_LAST_STATUS_DATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORDER_CREATION_DATE,
            self::VALUE_PICKUP_DATE,
            self::VALUE_COMBINED_DATE,
            self::VALUE_DELIVERY_DATE,
            self::VALUE_LAST_STATUS_DATE,
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
