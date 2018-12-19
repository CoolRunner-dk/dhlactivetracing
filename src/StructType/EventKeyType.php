<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventKeyType StructType
 * @subpackage Structs
 */
class EventKeyType extends AbstractStructBase
{
    /**
     * The eventCode
     * @var string
     */
    public $eventCode;
    /**
     * The reasonCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reasonCode;
    /**
     * Constructor method for eventKeyType
     * @uses EventKeyType::setEventCode()
     * @uses EventKeyType::setReasonCode()
     * @param string $eventCode
     * @param string $reasonCode
     */
    public function __construct($eventCode = null, $reasonCode = null)
    {
        $this
            ->setEventCode($eventCode)
            ->setReasonCode($reasonCode);
    }
    /**
     * Get eventCode value
     * @return string|null
     */
    public function getEventCode()
    {
        return $this->eventCode;
    }
    /**
     * Set eventCode value
     * @param string $eventCode
     * @return \DHLTracking\StructType\EventKeyType
     */
    public function setEventCode($eventCode = null)
    {
        // validation for constraint: string
        if (!is_null($eventCode) && !is_string($eventCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventCode)), __LINE__);
        }
        $this->eventCode = $eventCode;
        return $this;
    }
    /**
     * Get reasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }
    /**
     * Set reasonCode value
     * @param string $reasonCode
     * @return \DHLTracking\StructType\EventKeyType
     */
    public function setReasonCode($reasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonCode)), __LINE__);
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\EventKeyType
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
