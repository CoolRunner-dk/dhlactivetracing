<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dateRangeType StructType
 * @subpackage Structs
 */
class DateRangeType extends AbstractStructBase
{
    /**
     * The dateRangeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateRangeFrom;
    /**
     * The dateRangeTill
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateRangeTill;
    /**
     * Constructor method for dateRangeType
     * @uses DateRangeType::setDateRangeFrom()
     * @uses DateRangeType::setDateRangeTill()
     * @param string $dateRangeFrom
     * @param string $dateRangeTill
     */
    public function __construct($dateRangeFrom = null, $dateRangeTill = null)
    {
        $this
            ->setDateRangeFrom($dateRangeFrom)
            ->setDateRangeTill($dateRangeTill);
    }
    /**
     * Get dateRangeFrom value
     * @return string|null
     */
    public function getDateRangeFrom()
    {
        return $this->dateRangeFrom;
    }
    /**
     * Set dateRangeFrom value
     * @param string $dateRangeFrom
     * @return \StructType\DateRangeType
     */
    public function setDateRangeFrom($dateRangeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($dateRangeFrom) && !is_string($dateRangeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateRangeFrom)), __LINE__);
        }
        $this->dateRangeFrom = $dateRangeFrom;
        return $this;
    }
    /**
     * Get dateRangeTill value
     * @return string|null
     */
    public function getDateRangeTill()
    {
        return $this->dateRangeTill;
    }
    /**
     * Set dateRangeTill value
     * @param string $dateRangeTill
     * @return \StructType\DateRangeType
     */
    public function setDateRangeTill($dateRangeTill = null)
    {
        // validation for constraint: string
        if (!is_null($dateRangeTill) && !is_string($dateRangeTill)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateRangeTill)), __LINE__);
        }
        $this->dateRangeTill = $dateRangeTill;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DateRangeType
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
