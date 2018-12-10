<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageDetailsPublicRequest StructType
 * @subpackage Structs
 */
class GetPackageDetailsPublicRequest extends AbstractStructBase
{
    /**
     * The actDbId
     * @var int
     */
    public $actDbId;
    /**
     * The packageId
     * @var string
     */
    public $packageId;
    /**
     * The responseLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $responseLocale;
    /**
     * Constructor method for GetPackageDetailsPublicRequest
     * @uses GetPackageDetailsPublicRequest::setActDbId()
     * @uses GetPackageDetailsPublicRequest::setPackageId()
     * @uses GetPackageDetailsPublicRequest::setResponseLocale()
     * @param int $actDbId
     * @param string $packageId
     * @param string $responseLocale
     */
    public function __construct($actDbId = null, $packageId = null, $responseLocale = null)
    {
        $this
            ->setActDbId($actDbId)
            ->setPackageId($packageId)
            ->setResponseLocale($responseLocale);
    }
    /**
     * Get actDbId value
     * @return int|null
     */
    public function getActDbId()
    {
        return $this->actDbId;
    }
    /**
     * Set actDbId value
     * @param int $actDbId
     * @return \StructType\GetPackageDetailsPublicRequest
     */
    public function setActDbId($actDbId = null)
    {
        // validation for constraint: int
        if (!is_null($actDbId) && !is_numeric($actDbId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($actDbId)), __LINE__);
        }
        $this->actDbId = $actDbId;
        return $this;
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
     * @return \StructType\GetPackageDetailsPublicRequest
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
     * Get responseLocale value
     * @return string|null
     */
    public function getResponseLocale()
    {
        return $this->responseLocale;
    }
    /**
     * Set responseLocale value
     * @param string $responseLocale
     * @return \StructType\GetPackageDetailsPublicRequest
     */
    public function setResponseLocale($responseLocale = null)
    {
        // validation for constraint: string
        if (!is_null($responseLocale) && !is_string($responseLocale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseLocale)), __LINE__);
        }
        $this->responseLocale = $responseLocale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetPackageDetailsPublicRequest
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
