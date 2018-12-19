<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventDataType StructType
 * @subpackage Structs
 */
class EventDataType extends AbstractStructBase
{
    /**
     * The eventKey
     * @var \DHLTracking\StructType\EventKeyType
     */
    public $eventKey;
    /**
     * The eventDescription
     * @var string
     */
    public $eventDescription;
    /**
     * The eventDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $eventDate;
    /**
     * The eventTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $eventTime;
    /**
     * The terminalCode
     * @var string
     */
    public $terminalCode;
    /**
     * The terminalName
     * @var string
     */
    public $terminalName;
    /**
     * The terminalCountry
     * @var string
     */
    public $terminalCountry;
    /**
     * Constructor method for eventDataType
     * @uses EventDataType::setEventKey()
     * @uses EventDataType::setEventDescription()
     * @uses EventDataType::setEventDate()
     * @uses EventDataType::setEventTime()
     * @uses EventDataType::setTerminalCode()
     * @uses EventDataType::setTerminalName()
     * @uses EventDataType::setTerminalCountry()
     * @param \DHLTracking\StructType\EventKeyType $eventKey
     * @param string $eventDescription
     * @param string $eventDate
     * @param string $eventTime
     * @param string $terminalCode
     * @param string $terminalName
     * @param string $terminalCountry
     */
    public function __construct(\DHLTracking\StructType\EventKeyType $eventKey = null, $eventDescription = null, $eventDate = null, $eventTime = null, $terminalCode = null, $terminalName = null, $terminalCountry = null)
    {
        $this
            ->setEventKey($eventKey)
            ->setEventDescription($eventDescription)
            ->setEventDate($eventDate)
            ->setEventTime($eventTime)
            ->setTerminalCode($terminalCode)
            ->setTerminalName($terminalName)
            ->setTerminalCountry($terminalCountry);
    }
    /**
     * Get eventKey value
     * @return \DHLTracking\StructType\EventKeyType|null
     */
    public function getEventKey()
    {
        return $this->eventKey;
    }
    /**
     * Set eventKey value
     * @param \DHLTracking\StructType\EventKeyType $eventKey
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setEventKey(\DHLTracking\StructType\EventKeyType $eventKey = null)
    {
        $this->eventKey = $eventKey;
        return $this;
    }
    /**
     * Get eventDescription value
     * @return string|null
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }
    /**
     * Set eventDescription value
     * @param string $eventDescription
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setEventDescription($eventDescription = null)
    {
        // validation for constraint: string
        if (!is_null($eventDescription) && !is_string($eventDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDescription)), __LINE__);
        }
        $this->eventDescription = $eventDescription;
        return $this;
    }
    /**
     * Get eventDate value
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }
    /**
     * Set eventDate value
     * @param string $eventDate
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setEventDate($eventDate = null)
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;
        return $this;
    }
    /**
     * Get eventTime value
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }
    /**
     * Set eventTime value
     * @param string $eventTime
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setEventTime($eventTime = null)
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventTime)), __LINE__);
        }
        $this->eventTime = $eventTime;
        return $this;
    }
    /**
     * Get terminalCode value
     * @return string|null
     */
    public function getTerminalCode()
    {
        return $this->terminalCode;
    }
    /**
     * Set terminalCode value
     * @param string $terminalCode
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setTerminalCode($terminalCode = null)
    {
        // validation for constraint: string
        if (!is_null($terminalCode) && !is_string($terminalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalCode)), __LINE__);
        }
        $this->terminalCode = $terminalCode;
        return $this;
    }
    /**
     * Get terminalName value
     * @return string|null
     */
    public function getTerminalName()
    {
        return $this->terminalName;
    }
    /**
     * Set terminalName value
     * @param string $terminalName
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setTerminalName($terminalName = null)
    {
        // validation for constraint: string
        if (!is_null($terminalName) && !is_string($terminalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalName)), __LINE__);
        }
        $this->terminalName = $terminalName;
        return $this;
    }
    /**
     * Get terminalCountry value
     * @return string|null
     */
    public function getTerminalCountry()
    {
        return $this->terminalCountry;
    }
    /**
     * Set terminalCountry value
     * @param string $terminalCountry
     * @return \DHLTracking\StructType\EventDataType
     */
    public function setTerminalCountry($terminalCountry = null)
    {
        // validation for constraint: string
        if (!is_null($terminalCountry) && !is_string($terminalCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalCountry)), __LINE__);
        }
        $this->terminalCountry = $terminalCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\EventDataType
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
