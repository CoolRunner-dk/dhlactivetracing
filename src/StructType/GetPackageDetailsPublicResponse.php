<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageDetailsPublicResponse StructType
 * @subpackage Structs
 */
class GetPackageDetailsPublicResponse extends AbstractStructBase
{
    /**
     * The packageData
     * @var \StructType\PackageDataType
     */
    public $packageData;
    /**
     * Constructor method for GetPackageDetailsPublicResponse
     * @uses GetPackageDetailsPublicResponse::setPackageData()
     * @param \StructType\PackageDataType $packageData
     */
    public function __construct(\StructType\PackageDataType $packageData = null)
    {
        $this
            ->setPackageData($packageData);
    }
    /**
     * Get packageData value
     * @return \StructType\PackageDataType|null
     */
    public function getPackageData()
    {
        return $this->packageData;
    }
    /**
     * Set packageData value
     * @param \StructType\PackageDataType $packageData
     * @return \StructType\GetPackageDetailsPublicResponse
     */
    public function setPackageData(\StructType\PackageDataType $packageData = null)
    {
        $this->packageData = $packageData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetPackageDetailsPublicResponse
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
