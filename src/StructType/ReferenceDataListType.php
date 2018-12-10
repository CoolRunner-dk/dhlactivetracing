<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for referenceDataListType StructType
 * @subpackage Structs
 */
class ReferenceDataListType extends AbstractStructBase
{
    /**
     * The referenceData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ReferenceDataType[]
     */
    public $referenceData;
    /**
     * Constructor method for referenceDataListType
     * @uses ReferenceDataListType::setReferenceData()
     * @param \StructType\ReferenceDataType[] $referenceData
     */
    public function __construct(array $referenceData = array())
    {
        $this
            ->setReferenceData($referenceData);
    }
    /**
     * Get referenceData value
     * @return \StructType\ReferenceDataType[]|null
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }
    /**
     * Set referenceData value
     * @throws \InvalidArgumentException
     * @param \StructType\ReferenceDataType[] $referenceData
     * @return \StructType\ReferenceDataListType
     */
    public function setReferenceData(array $referenceData = array())
    {
        foreach ($referenceData as $referenceDataListTypeReferenceDataItem) {
            // validation for constraint: itemType
            if (!$referenceDataListTypeReferenceDataItem instanceof \StructType\ReferenceDataType) {
                throw new \InvalidArgumentException(sprintf('The referenceData property can only contain items of \StructType\ReferenceDataType, "%s" given', is_object($referenceDataListTypeReferenceDataItem) ? get_class($referenceDataListTypeReferenceDataItem) : gettype($referenceDataListTypeReferenceDataItem)), __LINE__);
            }
        }
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Add item to referenceData value
     * @throws \InvalidArgumentException
     * @param \StructType\ReferenceDataType $item
     * @return \StructType\ReferenceDataListType
     */
    public function addToReferenceData(\StructType\ReferenceDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReferenceDataType) {
            throw new \InvalidArgumentException(sprintf('The referenceData property can only contain items of \StructType\ReferenceDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->referenceData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReferenceDataListType
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
