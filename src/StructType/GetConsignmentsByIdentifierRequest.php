<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByIdentifierRequest StructType
 * @subpackage Structs
 */
class GetConsignmentsByIdentifierRequest extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * @var \StructType\ConsignmentIdentificationType
     */
    public $consignmentIdentification;
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
     * @var \StructType\ResultSizeType
     */
    public $resultSize;
    /**
     * Constructor method for GetConsignmentsByIdentifierRequest
     * @uses GetConsignmentsByIdentifierRequest::setConsignmentIdentification()
     * @uses GetConsignmentsByIdentifierRequest::setActUserId()
     * @uses GetConsignmentsByIdentifierRequest::setResponseLocale()
     * @uses GetConsignmentsByIdentifierRequest::setResultSize()
     * @param \StructType\ConsignmentIdentificationType $consignmentIdentification
     * @param string $actUserId
     * @param string $responseLocale
     * @param \StructType\ResultSizeType $resultSize
     */
    public function __construct(\StructType\ConsignmentIdentificationType $consignmentIdentification = null, $actUserId = null, $responseLocale = null, \StructType\ResultSizeType $resultSize = null)
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setActUserId($actUserId)
            ->setResponseLocale($responseLocale)
            ->setResultSize($resultSize);
    }
    /**
     * Get consignmentIdentification value
     * @return \StructType\ConsignmentIdentificationType|null
     */
    public function getConsignmentIdentification()
    {
        return $this->consignmentIdentification;
    }
    /**
     * Set consignmentIdentification value
     * @param \StructType\ConsignmentIdentificationType $consignmentIdentification
     * @return \StructType\GetConsignmentsByIdentifierRequest
     */
    public function setConsignmentIdentification(\StructType\ConsignmentIdentificationType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
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
     * @return \StructType\GetConsignmentsByIdentifierRequest
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
     * @return \StructType\GetConsignmentsByIdentifierRequest
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
     * @return \StructType\GetConsignmentsByIdentifierRequest
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
     * @return \StructType\GetConsignmentsByIdentifierRequest
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
