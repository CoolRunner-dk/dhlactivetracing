<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipmentDateType StructType
 * @subpackage Structs
 */
class ShipmentDateType extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The actDate
     * @var string
     */
    public $actDate;
    /**
     * Constructor method for shipmentDateType
     * @uses ShipmentDateType::setDate()
     * @uses ShipmentDateType::setActDate()
     * @param string $date
     * @param string $actDate
     */
    public function __construct($date = null, $actDate = null)
    {
        $this
            ->setDate($date)
            ->setActDate($actDate);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \DHLTracking\StructType\ShipmentDateType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get actDate value
     * @return string|null
     */
    public function getActDate()
    {
        return $this->actDate;
    }
    /**
     * Set actDate value
     * @uses \DHLTracking\EnumType\ActDateType::valueIsValid()
     * @uses \DHLTracking\EnumType\ActDateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actDate
     * @return \DHLTracking\StructType\ShipmentDateType
     */
    public function setActDate($actDate = null)
    {
        // validation for constraint: enumeration
        if (!\DHLTracking\EnumType\ActDateType::valueIsValid($actDate)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actDate, implode(', ', \DHLTracking\EnumType\ActDateType::getValidValues())), __LINE__);
        }
        $this->actDate = $actDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\ShipmentDateType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
