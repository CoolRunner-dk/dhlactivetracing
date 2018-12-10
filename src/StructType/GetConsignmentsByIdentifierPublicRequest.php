<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByIdentifierPublicRequest StructType
 * @subpackage Structs
 */
class GetConsignmentsByIdentifierPublicRequest extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * @var \StructType\ConsignmentIdentificationPublicType
     */
    public $consignmentIdentification;
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
     * @var \StructType\ResultSizeType
     */
    public $resultSize;
    /**
     * Constructor method for GetConsignmentsByIdentifierPublicRequest
     * @uses GetConsignmentsByIdentifierPublicRequest::setConsignmentIdentification()
     * @uses GetConsignmentsByIdentifierPublicRequest::setResponseLocale()
     * @uses GetConsignmentsByIdentifierPublicRequest::setResultSize()
     * @param \StructType\ConsignmentIdentificationPublicType $consignmentIdentification
     * @param string $responseLocale
     * @param \StructType\ResultSizeType $resultSize
     */
    public function __construct(\StructType\ConsignmentIdentificationPublicType $consignmentIdentification = null, $responseLocale = null, \StructType\ResultSizeType $resultSize = null)
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setResponseLocale($responseLocale)
            ->setResultSize($resultSize);
    }
    /**
     * Get consignmentIdentification value
     * @return \StructType\ConsignmentIdentificationPublicType|null
     */
    public function getConsignmentIdentification()
    {
        return $this->consignmentIdentification;
    }
    /**
     * Set consignmentIdentification value
     * @param \StructType\ConsignmentIdentificationPublicType $consignmentIdentification
     * @return \StructType\GetConsignmentsByIdentifierPublicRequest
     */
    public function setConsignmentIdentification(\StructType\ConsignmentIdentificationPublicType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
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
     * @return \StructType\GetConsignmentsByIdentifierPublicRequest
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
     * @return \StructType\ResultSizeType|null
     */
    public function getResultSize()
    {
        return $this->resultSize;
    }
    /**
     * Set resultSize value
     * @param \StructType\ResultSizeType $resultSize
     * @return \StructType\GetConsignmentsByIdentifierPublicRequest
     */
    public function setResultSize(\StructType\ResultSizeType $resultSize = null)
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
     * @return \StructType\GetConsignmentsByIdentifierPublicRequest
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
