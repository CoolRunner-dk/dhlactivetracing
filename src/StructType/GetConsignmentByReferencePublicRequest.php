<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentByReferencePublicRequest StructType
 * @subpackage Structs
 */
class GetConsignmentByReferencePublicRequest extends AbstractStructBase
{
    /**
     * The referenceData
     * @var \DHLTracking\StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The referenceSearchZipCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ReferenceSearchZipCodesType
     */
    public $referenceSearchZipCodes;
    /**
     * The responseLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $responseLocale;
    /**
     * Constructor method for GetConsignmentByReferencePublicRequest
     * @uses GetConsignmentByReferencePublicRequest::setReferenceData()
     * @uses GetConsignmentByReferencePublicRequest::setReferenceSearchZipCodes()
     * @uses GetConsignmentByReferencePublicRequest::setResponseLocale()
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @param \DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes
     * @param string $responseLocale
     */
    public function __construct(\DHLTracking\StructType\ReferenceDataType $referenceData = null, \DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null, $responseLocale = null)
    {
        $this
            ->setReferenceData($referenceData)
            ->setReferenceSearchZipCodes($referenceSearchZipCodes)
            ->setResponseLocale($responseLocale);
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicRequest
     */
    public function setReferenceData(\DHLTracking\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Get referenceSearchZipCodes value
     * @return \DHLTracking\StructType\ReferenceSearchZipCodesType|null
     */
    public function getReferenceSearchZipCodes()
    {
        return $this->referenceSearchZipCodes;
    }
    /**
     * Set referenceSearchZipCodes value
     * @param \DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicRequest
     */
    public function setReferenceSearchZipCodes(\DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null)
    {
        $this->referenceSearchZipCodes = $referenceSearchZipCodes;
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicRequest
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicRequest
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
