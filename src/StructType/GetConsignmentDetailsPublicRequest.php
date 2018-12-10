<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentDetailsPublicRequest StructType
 * @subpackage Structs
 */
class GetConsignmentDetailsPublicRequest extends AbstractStructBase
{
    /**
     * The actDbId
     * @var int
     */
    public $actDbId;
    /**
     * The responseLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $responseLocale;
    /**
     * The updateDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DateRangeType
     */
    public $updateDateRange;
    /**
     * Constructor method for GetConsignmentDetailsPublicRequest
     * @uses GetConsignmentDetailsPublicRequest::setActDbId()
     * @uses GetConsignmentDetailsPublicRequest::setResponseLocale()
     * @uses GetConsignmentDetailsPublicRequest::setUpdateDateRange()
     * @param int $actDbId
     * @param string $responseLocale
     * @param \StructType\DateRangeType $updateDateRange
     */
    public function __construct($actDbId = null, $responseLocale = null, \StructType\DateRangeType $updateDateRange = null)
    {
        $this
            ->setActDbId($actDbId)
            ->setResponseLocale($responseLocale)
            ->setUpdateDateRange($updateDateRange);
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
     * @return \StructType\GetConsignmentDetailsPublicRequest
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
     * @return \StructType\GetConsignmentDetailsPublicRequest
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
     * Get updateDateRange value
     * @return \StructType\DateRangeType|null
     */
    public function getUpdateDateRange()
    {
        return $this->updateDateRange;
    }
    /**
     * Set updateDateRange value
     * @param \StructType\DateRangeType $updateDateRange
     * @return \StructType\GetConsignmentDetailsPublicRequest
     */
    public function setUpdateDateRange(\StructType\DateRangeType $updateDateRange = null)
    {
        $this->updateDateRange = $updateDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetConsignmentDetailsPublicRequest
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
