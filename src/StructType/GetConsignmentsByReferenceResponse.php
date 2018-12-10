<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByReferenceResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByReferenceResponse extends AbstractStructBase
{
    /**
     * The referenceData
     * @var \StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \StructType\ConsignmentType[]
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentsByReferenceResponse
     * @uses GetConsignmentsByReferenceResponse::setReferenceData()
     * @uses GetConsignmentsByReferenceResponse::setConsignment()
     * @param \StructType\ReferenceDataType $referenceData
     * @param \StructType\ConsignmentType[] $consignment
     */
    public function __construct(\StructType\ReferenceDataType $referenceData = null, array $consignment = array())
    {
        $this
            ->setReferenceData($referenceData)
            ->setConsignment($consignment);
    }
    /**
     * Get referenceData value
     * @return \StructType\ReferenceDataType|null
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }
    /**
     * Set referenceData value
     * @param \StructType\ReferenceDataType $referenceData
     * @return \StructType\GetConsignmentsByReferenceResponse
     */
    public function setReferenceData(\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Get consignment value
     * @return \StructType\ConsignmentType[]|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentType[] $consignment
     * @return \StructType\GetConsignmentsByReferenceResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByReferenceResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByReferenceResponseConsignmentItem instanceof \StructType\ConsignmentType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \StructType\ConsignmentType, "%s" given', is_object($getConsignmentsByReferenceResponseConsignmentItem) ? get_class($getConsignmentsByReferenceResponseConsignmentItem) : gettype($getConsignmentsByReferenceResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentType $item
     * @return \StructType\GetConsignmentsByReferenceResponse
     */
    public function addToConsignment(\StructType\ConsignmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConsignmentType) {
            throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \StructType\ConsignmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\GetConsignmentsByReferenceResponse
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
