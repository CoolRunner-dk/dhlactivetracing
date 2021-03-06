<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByAccountNumbersResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByAccountNumbersResponse extends AbstractStructBase
{
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsignmentType[]
     */
    public $consignment;
    /**
     * The updateDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\DateRangeType
     */
    public $updateDateRange;
    /**
     * Constructor method for GetConsignmentsByAccountNumbersResponse
     * @uses GetConsignmentsByAccountNumbersResponse::setConsignment()
     * @uses GetConsignmentsByAccountNumbersResponse::setUpdateDateRange()
     * @param \DHLTracking\StructType\ConsignmentType[] $consignment
     * @param \DHLTracking\StructType\DateRangeType $updateDateRange
     */
    public function __construct(array $consignment = array(), \DHLTracking\StructType\DateRangeType $updateDateRange = null)
    {
        $this
            ->setConsignment($consignment)
            ->setUpdateDateRange($updateDateRange);
    }
    /**
     * Get consignment value
     * @return \DHLTracking\StructType\ConsignmentType[]|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentType[] $consignment
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByAccountNumbersResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByAccountNumbersResponseConsignmentItem instanceof \DHLTracking\StructType\ConsignmentType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentType, "%s" given', is_object($getConsignmentsByAccountNumbersResponseConsignmentItem) ? get_class($getConsignmentsByAccountNumbersResponseConsignmentItem) : gettype($getConsignmentsByAccountNumbersResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentType $item
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse
     */
    public function addToConsignment(\DHLTracking\StructType\ConsignmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\ConsignmentType) {
            throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->consignment[] = $item;
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse
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
