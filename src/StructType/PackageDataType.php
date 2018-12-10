<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packageDataType StructType
 * @subpackage Structs
 */
class PackageDataType extends AbstractStructBase
{
    /**
     * The packageId
     * @var string
     */
    public $packageId;
    /**
     * The packageHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EventHistoryType
     */
    public $packageHistory;
    /**
     * Constructor method for packageDataType
     * @uses PackageDataType::setPackageId()
     * @uses PackageDataType::setPackageHistory()
     * @param string $packageId
     * @param \StructType\EventHistoryType $packageHistory
     */
    public function __construct($packageId = null, \StructType\EventHistoryType $packageHistory = null)
    {
        $this
            ->setPackageId($packageId)
            ->setPackageHistory($packageHistory);
    }
    /**
     * Get packageId value
     * @return string|null
     */
    public function getPackageId()
    {
        return $this->packageId;
    }
    /**
     * Set packageId value
     * @param string $packageId
     * @return \StructType\PackageDataType
     */
    public function setPackageId($packageId = null)
    {
        // validation for constraint: string
        if (!is_null($packageId) && !is_string($packageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageId)), __LINE__);
        }
        $this->packageId = $packageId;
        return $this;
    }
    /**
     * Get packageHistory value
     * @return \StructType\EventHistoryType|null
     */
    public function getPackageHistory()
    {
        return $this->packageHistory;
    }
    /**
     * Set packageHistory value
     * @param \StructType\EventHistoryType $packageHistory
     * @return \StructType\PackageDataType
     */
    public function setPackageHistory(\StructType\EventHistoryType $packageHistory = null)
    {
        $this->packageHistory = $packageHistory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PackageDataType
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
