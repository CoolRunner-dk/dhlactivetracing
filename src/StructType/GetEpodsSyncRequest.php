<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEpodsSyncRequest StructType
 * @subpackage Structs
 */
class GetEpodsSyncRequest extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 1
     * @var \StructType\ConsignmentIdentificationType[]
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
     * The ePodWithTrackingData
     * @var bool
     */
    public $ePodWithTrackingData;
    /**
     * The ePodConvertedToPDF
     * @var bool
     */
    public $ePodConvertedToPDF;
    /**
     * The responseLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $responseLocale;
    /**
     * Constructor method for GetEpodsSyncRequest
     * @uses GetEpodsSyncRequest::setConsignmentIdentification()
     * @uses GetEpodsSyncRequest::setActUserId()
     * @uses GetEpodsSyncRequest::setEPodWithTrackingData()
     * @uses GetEpodsSyncRequest::setEPodConvertedToPDF()
     * @uses GetEpodsSyncRequest::setResponseLocale()
     * @param \StructType\ConsignmentIdentificationType[] $consignmentIdentification
     * @param string $actUserId
     * @param bool $ePodWithTrackingData
     * @param bool $ePodConvertedToPDF
     * @param string $responseLocale
     */
    public function __construct(array $consignmentIdentification = array(), $actUserId = null, $ePodWithTrackingData = null, $ePodConvertedToPDF = null, $responseLocale = null)
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setActUserId($actUserId)
            ->setEPodWithTrackingData($ePodWithTrackingData)
            ->setEPodConvertedToPDF($ePodConvertedToPDF)
            ->setResponseLocale($responseLocale);
    }
    /**
     * Get consignmentIdentification value
     * @return \StructType\ConsignmentIdentificationType[]
     */
    public function getConsignmentIdentification()
    {
        return $this->consignmentIdentification;
    }
    /**
     * Set consignmentIdentification value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentIdentificationType[] $consignmentIdentification
     * @return \StructType\GetEpodsSyncRequest
     */
    public function setConsignmentIdentification(array $consignmentIdentification = array())
    {
        foreach ($consignmentIdentification as $getEpodsSyncRequestConsignmentIdentificationItem) {
            // validation for constraint: itemType
            if (!$getEpodsSyncRequestConsignmentIdentificationItem instanceof \StructType\ConsignmentIdentificationType) {
                throw new \InvalidArgumentException(sprintf('The consignmentIdentification property can only contain items of \StructType\ConsignmentIdentificationType, "%s" given', is_object($getEpodsSyncRequestConsignmentIdentificationItem) ? get_class($getEpodsSyncRequestConsignmentIdentificationItem) : gettype($getEpodsSyncRequestConsignmentIdentificationItem)), __LINE__);
            }
        }
        $this->consignmentIdentification = $consignmentIdentification;
        return $this;
    }
    /**
     * Add item to consignmentIdentification value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentIdentificationType $item
     * @return \StructType\GetEpodsSyncRequest
     */
    public function addToConsignmentIdentification(\StructType\ConsignmentIdentificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConsignmentIdentificationType) {
            throw new \InvalidArgumentException(sprintf('The consignmentIdentification property can only contain items of \StructType\ConsignmentIdentificationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->consignmentIdentification[] = $item;
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
     * @return \StructType\GetEpodsSyncRequest
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
     * Get ePodWithTrackingData value
     * @return bool|null
     */
    public function getEPodWithTrackingData()
    {
        return $this->ePodWithTrackingData;
    }
    /**
     * Set ePodWithTrackingData value
     * @param bool $ePodWithTrackingData
     * @return \StructType\GetEpodsSyncRequest
     */
    public function setEPodWithTrackingData($ePodWithTrackingData = null)
    {
        // validation for constraint: boolean
        if (!is_null($ePodWithTrackingData) && !is_bool($ePodWithTrackingData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ePodWithTrackingData)), __LINE__);
        }
        $this->ePodWithTrackingData = $ePodWithTrackingData;
        return $this;
    }
    /**
     * Get ePodConvertedToPDF value
     * @return bool|null
     */
    public function getEPodConvertedToPDF()
    {
        return $this->ePodConvertedToPDF;
    }
    /**
     * Set ePodConvertedToPDF value
     * @param bool $ePodConvertedToPDF
     * @return \StructType\GetEpodsSyncRequest
     */
    public function setEPodConvertedToPDF($ePodConvertedToPDF = null)
    {
        // validation for constraint: boolean
        if (!is_null($ePodConvertedToPDF) && !is_bool($ePodConvertedToPDF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ePodConvertedToPDF)), __LINE__);
        }
        $this->ePodConvertedToPDF = $ePodConvertedToPDF;
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
     * @return \StructType\GetEpodsSyncRequest
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
     * @return \StructType\GetEpodsSyncRequest
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
