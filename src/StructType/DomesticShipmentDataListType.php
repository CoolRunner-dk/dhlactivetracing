<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domesticShipmentDataListType StructType
 * @subpackage Structs
 */
class DomesticShipmentDataListType extends AbstractStructBase
{
    /**
     * The domesticShipmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DomesticShipmentDataType[]
     */
    public $domesticShipmentData;
    /**
     * Constructor method for domesticShipmentDataListType
     * @uses DomesticShipmentDataListType::setDomesticShipmentData()
     * @param \StructType\DomesticShipmentDataType[] $domesticShipmentData
     */
    public function __construct(array $domesticShipmentData = array())
    {
        $this
            ->setDomesticShipmentData($domesticShipmentData);
    }
    /**
     * Get domesticShipmentData value
     * @return \StructType\DomesticShipmentDataType[]|null
     */
    public function getDomesticShipmentData()
    {
        return $this->domesticShipmentData;
    }
    /**
     * Set domesticShipmentData value
     * @throws \InvalidArgumentException
     * @param \StructType\DomesticShipmentDataType[] $domesticShipmentData
     * @return \StructType\DomesticShipmentDataListType
     */
    public function setDomesticShipmentData(array $domesticShipmentData = array())
    {
        foreach ($domesticShipmentData as $domesticShipmentDataListTypeDomesticShipmentDataItem) {
            // validation for constraint: itemType
            if (!$domesticShipmentDataListTypeDomesticShipmentDataItem instanceof \StructType\DomesticShipmentDataType) {
                throw new \InvalidArgumentException(sprintf('The domesticShipmentData property can only contain items of \StructType\DomesticShipmentDataType, "%s" given', is_object($domesticShipmentDataListTypeDomesticShipmentDataItem) ? get_class($domesticShipmentDataListTypeDomesticShipmentDataItem) : gettype($domesticShipmentDataListTypeDomesticShipmentDataItem)), __LINE__);
            }
        }
        $this->domesticShipmentData = $domesticShipmentData;
        return $this;
    }
    /**
     * Add item to domesticShipmentData value
     * @throws \InvalidArgumentException
     * @param \StructType\DomesticShipmentDataType $item
     * @return \StructType\DomesticShipmentDataListType
     */
    public function addToDomesticShipmentData(\StructType\DomesticShipmentDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DomesticShipmentDataType) {
            throw new \InvalidArgumentException(sprintf('The domesticShipmentData property can only contain items of \StructType\DomesticShipmentDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->domesticShipmentData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DomesticShipmentDataListType
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
