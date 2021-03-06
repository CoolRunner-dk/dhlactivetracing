<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventHistoryType StructType
 * @subpackage Structs
 */
class EventHistoryType extends AbstractStructBase
{
    /**
     * The eventData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \DHLTracking\StructType\EventDataType[]
     */
    public $eventData;
    /**
     * Constructor method for eventHistoryType
     * @uses EventHistoryType::setEventData()
     * @param \DHLTracking\StructType\EventDataType[] $eventData
     */
    public function __construct(array $eventData = array())
    {
        $this
            ->setEventData($eventData);
    }
    /**
     * Get eventData value
     * @return \DHLTracking\StructType\EventDataType[]|null
     */
    public function getEventData()
    {
        return $this->eventData;
    }
    /**
     * Set eventData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\EventDataType[] $eventData
     * @return \DHLTracking\StructType\EventHistoryType
     */
    public function setEventData(array $eventData = array())
    {
        foreach ($eventData as $eventHistoryTypeEventDataItem) {
            // validation for constraint: itemType
            if (!$eventHistoryTypeEventDataItem instanceof \DHLTracking\StructType\EventDataType) {
                throw new \InvalidArgumentException(sprintf('The eventData property can only contain items of \DHLTracking\StructType\EventDataType, "%s" given', is_object($eventHistoryTypeEventDataItem) ? get_class($eventHistoryTypeEventDataItem) : gettype($eventHistoryTypeEventDataItem)), __LINE__);
            }
        }
        $this->eventData = $eventData;
        return $this;
    }
    /**
     * Add item to eventData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\EventDataType $item
     * @return \DHLTracking\StructType\EventHistoryType
     */
    public function addToEventData(\DHLTracking\StructType\EventDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\EventDataType) {
            throw new \InvalidArgumentException(sprintf('The eventData property can only contain items of \DHLTracking\StructType\EventDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->eventData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\EventHistoryType
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
