<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consigmentDetailAddressDataType StructType
 * @subpackage Structs
 */
class ConsigmentDetailAddressDataType extends AbstractStructBase
{
    /**
     * The accountNumberData
     * @var \DHLTracking\StructType\AccountNumberDataType
     */
    public $accountNumberData;
    /**
     * The addressData
     * @var \DHLTracking\StructType\AddressDataType
     */
    public $addressData;
    /**
     * Constructor method for consigmentDetailAddressDataType
     * @uses ConsigmentDetailAddressDataType::setAccountNumberData()
     * @uses ConsigmentDetailAddressDataType::setAddressData()
     * @param \DHLTracking\StructType\AccountNumberDataType $accountNumberData
     * @param \DHLTracking\StructType\AddressDataType $addressData
     */
    public function __construct(\DHLTracking\StructType\AccountNumberDataType $accountNumberData = null, \DHLTracking\StructType\AddressDataType $addressData = null)
    {
        $this
            ->setAccountNumberData($accountNumberData)
            ->setAddressData($addressData);
    }
    /**
     * Get accountNumberData value
     * @return \DHLTracking\StructType\AccountNumberDataType|null
     */
    public function getAccountNumberData()
    {
        return $this->accountNumberData;
    }
    /**
     * Set accountNumberData value
     * @param \DHLTracking\StructType\AccountNumberDataType $accountNumberData
     * @return \DHLTracking\StructType\ConsigmentDetailAddressDataType
     */
    public function setAccountNumberData(\DHLTracking\StructType\AccountNumberDataType $accountNumberData = null)
    {
        $this->accountNumberData = $accountNumberData;
        return $this;
    }
    /**
     * Get addressData value
     * @return \DHLTracking\StructType\AddressDataType|null
     */
    public function getAddressData()
    {
        return $this->addressData;
    }
    /**
     * Set addressData value
     * @param \DHLTracking\StructType\AddressDataType $addressData
     * @return \DHLTracking\StructType\ConsigmentDetailAddressDataType
     */
    public function setAddressData(\DHLTracking\StructType\AddressDataType $addressData = null)
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
     * @return \DHLTracking\StructType\ConsigmentDetailAddressDataType
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
