<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domesticShipmentDataType StructType
 * @subpackage Structs
 */
class DomesticShipmentDataType extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The originSystemCode
     * @var string
     */
    public $originSystemCode;
    /**
     * The originCountryCode
     * @var string
     */
    public $originCountryCode;
    /**
     * Constructor method for domesticShipmentDataType
     * @uses DomesticShipmentDataType::setId()
     * @uses DomesticShipmentDataType::setOriginSystemCode()
     * @uses DomesticShipmentDataType::setOriginCountryCode()
     * @param string $id
     * @param string $originSystemCode
     * @param string $originCountryCode
     */
    public function __construct($id = null, $originSystemCode = null, $originCountryCode = null)
    {
        $this
            ->setId($id)
            ->setOriginSystemCode($originSystemCode)
            ->setOriginCountryCode($originCountryCode);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\DomesticShipmentDataType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get originSystemCode value
     * @return string|null
     */
    public function getOriginSystemCode()
    {
        return $this->originSystemCode;
    }
    /**
     * Set originSystemCode value
     * @param string $originSystemCode
     * @return \StructType\DomesticShipmentDataType
     */
    public function setOriginSystemCode($originSystemCode = null)
    {
        // validation for constraint: string
        if (!is_null($originSystemCode) && !is_string($originSystemCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originSystemCode)), __LINE__);
        }
        $this->originSystemCode = $originSystemCode;
        return $this;
    }
    /**
     * Get originCountryCode value
     * @return string|null
     */
    public function getOriginCountryCode()
    {
        return $this->originCountryCode;
    }
    /**
     * Set originCountryCode value
     * @param string $originCountryCode
     * @return \StructType\DomesticShipmentDataType
     */
    public function setOriginCountryCode($originCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($originCountryCode) && !is_string($originCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCountryCode)), __LINE__);
        }
        $this->originCountryCode = $originCountryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DomesticShipmentDataType
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
