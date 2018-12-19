<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByReferenceRequest StructType
 * @subpackage Structs
 */
class GetConsignmentsByReferenceRequest extends AbstractStructBase
{
    /**
     * The referenceData
     * @var \DHLTracking\StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The actUserId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $actUserId;
    /**
     * The responseLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $responseLocale;
    /**
     * The resultSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ResultSizeType
     */
    public $resultSize;
    /**
     * Constructor method for GetConsignmentsByReferenceRequest
     * @uses GetConsignmentsByReferenceRequest::setReferenceData()
     * @uses GetConsignmentsByReferenceRequest::setActUserId()
     * @uses GetConsignmentsByReferenceRequest::setResponseLocale()
     * @uses GetConsignmentsByReferenceRequest::setResultSize()
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @param string $actUserId
     * @param string $responseLocale
     * @param \DHLTracking\StructType\ResultSizeType $resultSize
     */
    public function __construct(\DHLTracking\StructType\ReferenceDataType $referenceData = null, $actUserId = null, $responseLocale = null, \DHLTracking\StructType\ResultSizeType $resultSize = null)
    {
        $this
            ->setReferenceData($referenceData)
            ->setActUserId($actUserId)
            ->setResponseLocale($responseLocale)
            ->setResultSize($resultSize);
    }
    /**
     * Get referenceData value
     * @return \DHLTracking\StructType\ReferenceDataType|null
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }
    /**
     * Set referenceData value
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceRequest
     */
    public function setReferenceData(\DHLTracking\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Get actUserId value
     * @return string|null
     */
    public function getActUserId()
    {
        return $this->actUserId;
    }
    /**
     * Set actUserId value
     * @param string $actUserId
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceRequest
     */
    public function setActUserId($actUserId = null)
    {
        // validation for constraint: string
        if (!is_null($actUserId) && !is_string($actUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actUserId)), __LINE__);
        }
        $this->actUserId = $actUserId;
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
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceRequest
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
     * Get resultSize value
     * @return \DHLTracking\StructType\ResultSizeType|null
     */
    public function getResultSize()
    {
        return $this->resultSize;
    }
    /**
     * Set resultSize value
     * @param \DHLTracking\StructType\ResultSizeType $resultSize
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceRequest
     */
    public function setResultSize(\DHLTracking\StructType\ResultSizeType $resultSize = null)
    {
        $this->resultSize = $resultSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceRequest
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
