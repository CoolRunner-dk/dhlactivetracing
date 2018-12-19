<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventHistoryRequestType StructType
 * @subpackage Structs
 */
class EventHistoryRequestType extends AbstractStructBase
{
    /**
     * The eventDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\DateRangeType
     */
    public $eventDateRange;
    /**
     * The updateDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\DateRangeType
     */
    public $updateDateRange;
    /**
     * Constructor method for eventHistoryRequestType
     * @uses EventHistoryRequestType::setEventDateRange()
     * @uses EventHistoryRequestType::setUpdateDateRange()
     * @param \DHLTracking\StructType\DateRangeType $eventDateRange
     * @param \DHLTracking\StructType\DateRangeType $updateDateRange
     */
    public function __construct(\DHLTracking\StructType\DateRangeType $eventDateRange = null, \DHLTracking\StructType\DateRangeType $updateDateRange = null)
    {
        $this
            ->setEventDateRange($eventDateRange)
            ->setUpdateDateRange($updateDateRange);
    }
    /**
     * Get eventDateRange value
     * @return \DHLTracking\StructType\DateRangeType|null
     */
    public function getEventDateRange()
    {
        return $this->eventDateRange;
    }
    /**
     * Set eventDateRange value
     * @param \DHLTracking\StructType\DateRangeType $eventDateRange
     * @return \DHLTracking\StructType\EventHistoryRequestType
     */
    public function setEventDateRange(\DHLTracking\StructType\DateRangeType $eventDateRange = null)
    {
        $this->eventDateRange = $eventDateRange;
        return $this;
    }
    /**
     * Get updateDateRange value
     * @return \DHLTracking\StructType\DateRangeType|null
     */
    public function getUpdateDateRange()
    {
        return $this->updateDateRange;
    }
    /**
     * Set updateDateRange value
     * @param \DHLTracking\StructType\DateRangeType $updateDateRange
     * @return \DHLTracking\StructType\EventHistoryRequestType
     */
    public function setUpdateDateRange(\DHLTracking\StructType\DateRangeType $updateDateRange = null)
    {
        $this->updateDateRange = $updateDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\EventHistoryRequestType
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
