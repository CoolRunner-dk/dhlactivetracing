<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consigmentDetailAddressDataListType StructType
 * @subpackage Structs
 */
class ConsigmentDetailAddressDataListType extends AbstractStructBase
{
    /**
     * The consigmentDetailAddressData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConsigmentDetailAddressDataType[]
     */
    public $consigmentDetailAddressData;
    /**
     * Constructor method for consigmentDetailAddressDataListType
     * @uses ConsigmentDetailAddressDataListType::setConsigmentDetailAddressData()
     * @param \StructType\ConsigmentDetailAddressDataType[] $consigmentDetailAddressData
     */
    public function __construct(array $consigmentDetailAddressData = array())
    {
        $this
            ->setConsigmentDetailAddressData($consigmentDetailAddressData);
    }
    /**
     * Get consigmentDetailAddressData value
     * @return \StructType\ConsigmentDetailAddressDataType[]|null
     */
    public function getConsigmentDetailAddressData()
    {
        return $this->consigmentDetailAddressData;
    }
    /**
     * Set consigmentDetailAddressData value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsigmentDetailAddressDataType[] $consigmentDetailAddressData
     * @return \StructType\ConsigmentDetailAddressDataListType
     */
    public function setConsigmentDetailAddressData(array $consigmentDetailAddressData = array())
    {
        foreach ($consigmentDetailAddressData as $consigmentDetailAddressDataListTypeConsigmentDetailAddressDataItem) {
            // validation for constraint: itemType
            if (!$consigmentDetailAddressDataListTypeConsigmentDetailAddressDataItem instanceof \StructType\ConsigmentDetailAddressDataType) {
                throw new \InvalidArgumentException(sprintf('The consigmentDetailAddressData property can only contain items of \StructType\ConsigmentDetailAddressDataType, "%s" given', is_object($consigmentDetailAddressDataListTypeConsigmentDetailAddressDataItem) ? get_class($consigmentDetailAddressDataListTypeConsigmentDetailAddressDataItem) : gettype($consigmentDetailAddressDataListTypeConsigmentDetailAddressDataItem)), __LINE__);
            }
        }
        $this->consigmentDetailAddressData = $consigmentDetailAddressData;
        return $this;
    }
    /**
     * Add item to consigmentDetailAddressData value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsigmentDetailAddressDataType $item
     * @return \StructType\ConsigmentDetailAddressDataListType
     */
    public function addToConsigmentDetailAddressData(\StructType\ConsigmentDetailAddressDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConsigmentDetailAddressDataType) {
            throw new \InvalidArgumentException(sprintf('The consigmentDetailAddressData property can only contain items of \StructType\ConsigmentDetailAddressDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->consigmentDetailAddressData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConsigmentDetailAddressDataListType
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
