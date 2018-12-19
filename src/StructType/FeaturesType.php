<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for featuresType StructType
 * @subpackage Structs
 */
class FeaturesType extends AbstractStructBase
{
    /**
     * The feature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \DHLTracking\StructType\FeatureType[]
     */
    public $feature;
    /**
     * Constructor method for featuresType
     * @uses FeaturesType::setFeature()
     * @param \DHLTracking\StructType\FeatureType[] $feature
     */
    public function __construct(array $feature = array())
    {
        $this
            ->setFeature($feature);
    }
    /**
     * Get feature value
     * @return \DHLTracking\StructType\FeatureType[]|null
     */
    public function getFeature()
    {
        return $this->feature;
    }
    /**
     * Set feature value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\FeatureType[] $feature
     * @return \DHLTracking\StructType\FeaturesType
     */
    public function setFeature(array $feature = array())
    {
        foreach ($feature as $featuresTypeFeatureItem) {
            // validation for constraint: itemType
            if (!$featuresTypeFeatureItem instanceof \DHLTracking\StructType\FeatureType) {
                throw new \InvalidArgumentException(sprintf('The feature property can only contain items of \DHLTracking\StructType\FeatureType, "%s" given', is_object($featuresTypeFeatureItem) ? get_class($featuresTypeFeatureItem) : gettype($featuresTypeFeatureItem)), __LINE__);
            }
        }
        $this->feature = $feature;
        return $this;
    }
    /**
     * Add item to feature value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\FeatureType $item
     * @return \DHLTracking\StructType\FeaturesType
     */
    public function addToFeature(\DHLTracking\StructType\FeatureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\FeatureType) {
            throw new \InvalidArgumentException(sprintf('The feature property can only contain items of \DHLTracking\StructType\FeatureType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->feature[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\FeaturesType
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
