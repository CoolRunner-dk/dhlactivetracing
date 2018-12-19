<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByReferenceResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByReferenceResponse extends AbstractStructBase
{
    /**
     * The referenceData
     * @var \DHLTracking\StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsignmentType[]
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentsByReferenceResponse
     * @uses GetConsignmentsByReferenceResponse::setReferenceData()
     * @uses GetConsignmentsByReferenceResponse::setConsignment()
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @param \DHLTracking\StructType\ConsignmentType[] $consignment
     */
    public function __construct(\DHLTracking\StructType\ReferenceDataType $referenceData = null, array $consignment = array())
    {
        $this
            ->setReferenceData($referenceData)
            ->setConsignment($consignment);
    }
    /**
     * Get referenceData value
     * @return \DHLTracking\StructType\ReferenceDataType|null
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }
    /**
     * Set referenceData value
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceResponse
     */
    public function setReferenceData(\DHLTracking\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
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
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByReferenceResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByReferenceResponseConsignmentItem instanceof \DHLTracking\StructType\ConsignmentType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentType, "%s" given', is_object($getConsignmentsByReferenceResponseConsignmentItem) ? get_class($getConsignmentsByReferenceResponseConsignmentItem) : gettype($getConsignmentsByReferenceResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentType $item
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceResponse
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
