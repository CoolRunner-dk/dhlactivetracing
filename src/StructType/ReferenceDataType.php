<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for referenceDataType StructType
 * @subpackage Structs
 */
class ReferenceDataType extends AbstractStructBase
{
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * The referenceType
     * @var string
     */
    public $referenceType;
    /**
     * Constructor method for referenceDataType
     * @uses ReferenceDataType::setReference()
     * @uses ReferenceDataType::setReferenceType()
     * @param string $reference
     * @param string $referenceType
     */
    public function __construct($reference = null, $referenceType = null)
    {
        $this
            ->setReference($reference)
            ->setReferenceType($referenceType);
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \StructType\ReferenceDataType
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get referenceType value
     * @return string|null
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }
    /**
     * Set referenceType value
     * @uses \EnumType\ReferenceType::valueIsValid()
     * @uses \EnumType\ReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $referenceType
     * @return \StructType\ReferenceDataType
     */
    public function setReferenceType($referenceType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReferenceType::valueIsValid($referenceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceType, implode(', ', \EnumType\ReferenceType::getValidValues())), __LINE__);
        }
        $this->referenceType = $referenceType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReferenceDataType
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
