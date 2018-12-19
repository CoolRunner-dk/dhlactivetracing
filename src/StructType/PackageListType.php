<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packageListType StructType
 * @subpackage Structs
 */
class PackageListType extends AbstractStructBase
{
    /**
     * The packageData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \DHLTracking\StructType\PackageDataType[]
     */
    public $packageData;
    /**
     * Constructor method for packageListType
     * @uses PackageListType::setPackageData()
     * @param \DHLTracking\StructType\PackageDataType[] $packageData
     */
    public function __construct(array $packageData = array())
    {
        $this
            ->setPackageData($packageData);
    }
    /**
     * Get packageData value
     * @return \DHLTracking\StructType\PackageDataType[]|null
     */
    public function getPackageData()
    {
        return $this->packageData;
    }
    /**
     * Set packageData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\PackageDataType[] $packageData
     * @return \DHLTracking\StructType\PackageListType
     */
    public function setPackageData(array $packageData = array())
    {
        foreach ($packageData as $packageListTypePackageDataItem) {
            // validation for constraint: itemType
            if (!$packageListTypePackageDataItem instanceof \DHLTracking\StructType\PackageDataType) {
                throw new \InvalidArgumentException(sprintf('The packageData property can only contain items of \DHLTracking\StructType\PackageDataType, "%s" given', is_object($packageListTypePackageDataItem) ? get_class($packageListTypePackageDataItem) : gettype($packageListTypePackageDataItem)), __LINE__);
            }
        }
        $this->packageData = $packageData;
        return $this;
    }
    /**
     * Add item to packageData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\PackageDataType $item
     * @return \DHLTracking\StructType\PackageListType
     */
    public function addToPackageData(\DHLTracking\StructType\PackageDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\PackageDataType) {
            throw new \InvalidArgumentException(sprintf('The packageData property can only contain items of \DHLTracking\StructType\PackageDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packageData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\PackageListType
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
