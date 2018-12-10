<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consigmentDetailAddressDataType StructType
 * @subpackage Structs
 */
class ConsigmentDetailAddressDataType extends AbstractStructBase
{
    /**
     * The accountNumberData
     * @var \StructType\AccountNumberDataType
     */
    public $accountNumberData;
    /**
     * The addressData
     * @var \StructType\AddressDataType
     */
    public $addressData;
    /**
     * Constructor method for consigmentDetailAddressDataType
     * @uses ConsigmentDetailAddressDataType::setAccountNumberData()
     * @uses ConsigmentDetailAddressDataType::setAddressData()
     * @param \StructType\AccountNumberDataType $accountNumberData
     * @param \StructType\AddressDataType $addressData
     */
    public function __construct(\StructType\AccountNumberDataType $accountNumberData = null, \StructType\AddressDataType $addressData = null)
    {
        $this
            ->setAccountNumberData($accountNumberData)
            ->setAddressData($addressData);
    }
    /**
     * Get accountNumberData value
     * @return \StructType\AccountNumberDataType|null
     */
    public function getAccountNumberData()
    {
        return $this->accountNumberData;
    }
    /**
     * Set accountNumberData value
     * @param \StructType\AccountNumberDataType $accountNumberData
     * @return \StructType\ConsigmentDetailAddressDataType
     */
    public function setAccountNumberData(\StructType\AccountNumberDataType $accountNumberData = null)
    {
        $this->accountNumberData = $accountNumberData;
        return $this;
    }
    /**
     * Get addressData value
     * @return \StructType\AddressDataType|null
     */
    public function getAddressData()
    {
        return $this->addressData;
    }
    /**
     * Set addressData value
     * @param \StructType\AddressDataType $addressData
     * @return \StructType\ConsigmentDetailAddressDataType
     */
    public function setAddressData(\StructType\AddressDataType $addressData = null)
    {
        $this->addressData = $addressData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConsigmentDetailAddressDataType
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
