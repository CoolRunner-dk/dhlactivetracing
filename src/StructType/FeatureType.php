<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for featureType StructType
 * @subpackage Structs
 */
class FeatureType extends AbstractStructBase
{
    /**
     * The featureCode
     * @var string
     */
    public $featureCode;
    /**
     * The featureName
     * @var string
     */
    public $featureName;
    /**
     * Constructor method for featureType
     * @uses FeatureType::setFeatureCode()
     * @uses FeatureType::setFeatureName()
     * @param string $featureCode
     * @param string $featureName
     */
    public function __construct($featureCode = null, $featureName = null)
    {
        $this
            ->setFeatureCode($featureCode)
            ->setFeatureName($featureName);
    }
    /**
     * Get featureCode value
     * @return string|null
     */
    public function getFeatureCode()
    {
        return $this->featureCode;
    }
    /**
     * Set featureCode value
     * @param string $featureCode
     * @return \StructType\FeatureType
     */
    public function setFeatureCode($featureCode = null)
    {
        // validation for constraint: string
        if (!is_null($featureCode) && !is_string($featureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($featureCode)), __LINE__);
        }
        $this->featureCode = $featureCode;
        return $this;
    }
    /**
     * Get featureName value
     * @return string|null
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }
    /**
     * Set featureName value
     * @param string $featureName
     * @return \StructType\FeatureType
     */
    public function setFeatureName($featureName = null)
    {
        // validation for constraint: string
        if (!is_null($featureName) && !is_string($featureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($featureName)), __LINE__);
        }
        $this->featureName = $featureName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FeatureType
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
