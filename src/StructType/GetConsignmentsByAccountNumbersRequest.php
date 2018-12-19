<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByAccountNumbersRequest StructType
 * @subpackage Structs
 */
class GetConsignmentsByAccountNumbersRequest extends AbstractStructBase
{
    /**
     * The accountNumberData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \DHLTracking\StructType\AccountNumberDataType[]
     */
    public $accountNumberData;
    /**
     * The actUserId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $actUserId;
    /**
     * The referenceData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The consignmentIdentification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsignmentIdentificationType
     */
    public $consignmentIdentification;
    /**
     * The originCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $originCountry;
    /**
     * The destinationCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $destinationCountry;
    /**
     * The destinationCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $destinationCity;
    /**
     * The destinationZip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $destinationZip;
    /**
     * The eventKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\EventKeyType
     */
    public $eventKey;
    /**
     * The eventDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $eventDateRange;
    /**
     * The pickupDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $pickupDateRange;
    /**
     * The updateDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\DateRangeType
     */
    public $updateDateRange;
    /**
     * The eventHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\EventHistoryRequestType
     */
    public $eventHistory;
    /**
     * The productCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $productCode;
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
     * Constructor method for GetConsignmentsByAccountNumbersRequest
     * @uses GetConsignmentsByAccountNumbersRequest::setAccountNumberData()
     * @uses GetConsignmentsByAccountNumbersRequest::setActUserId()
     * @uses GetConsignmentsByAccountNumbersRequest::setReferenceData()
     * @uses GetConsignmentsByAccountNumbersRequest::setConsignmentIdentification()
     * @uses GetConsignmentsByAccountNumbersRequest::setOriginCountry()
     * @uses GetConsignmentsByAccountNumbersRequest::setDestinationCountry()
     * @uses GetConsignmentsByAccountNumbersRequest::setDestinationCity()
     * @uses GetConsignmentsByAccountNumbersRequest::setDestinationZip()
     * @uses GetConsignmentsByAccountNumbersRequest::setEventKey()
     * @uses GetConsignmentsByAccountNumbersRequest::setEventDateRange()
     * @uses GetConsignmentsByAccountNumbersRequest::setPickupDateRange()
     * @uses GetConsignmentsByAccountNumbersRequest::setUpdateDateRange()
     * @uses GetConsignmentsByAccountNumbersRequest::setEventHistory()
     * @uses GetConsignmentsByAccountNumbersRequest::setProductCode()
     * @uses GetConsignmentsByAccountNumbersRequest::setResponseLocale()
     * @uses GetConsignmentsByAccountNumbersRequest::setResultSize()
     * @param \DHLTracking\StructType\AccountNumberDataType[] $accountNumberData
     * @param string $actUserId
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @param \DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification
     * @param string $originCountry
     * @param string $destinationCountry
     * @param string $destinationCity
     * @param string $destinationZip
     * @param \DHLTracking\StructType\EventKeyType $eventKey
     * @param int $eventDateRange
     * @param int $pickupDateRange
     * @param \DHLTracking\StructType\DateRangeType $updateDateRange
     * @param \DHLTracking\StructType\EventHistoryRequestType $eventHistory
     * @param string $productCode
     * @param string $responseLocale
     * @param \DHLTracking\StructType\ResultSizeType $resultSize
     */
    public function __construct(array $accountNumberData = array(), $actUserId = null, \DHLTracking\StructType\ReferenceDataType $referenceData = null, \DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification = null, $originCountry = null, $destinationCountry = null, $destinationCity = null, $destinationZip = null, \DHLTracking\StructType\EventKeyType $eventKey = null, $eventDateRange = null, $pickupDateRange = null, \DHLTracking\StructType\DateRangeType $updateDateRange = null, \DHLTracking\StructType\EventHistoryRequestType $eventHistory = null, $productCode = null, $responseLocale = null, \DHLTracking\StructType\ResultSizeType $resultSize = null)
    {
        $this
            ->setAccountNumberData($accountNumberData)
            ->setActUserId($actUserId)
            ->setReferenceData($referenceData)
            ->setConsignmentIdentification($consignmentIdentification)
            ->setOriginCountry($originCountry)
            ->setDestinationCountry($destinationCountry)
            ->setDestinationCity($destinationCity)
            ->setDestinationZip($destinationZip)
            ->setEventKey($eventKey)
            ->setEventDateRange($eventDateRange)
            ->setPickupDateRange($pickupDateRange)
            ->setUpdateDateRange($updateDateRange)
            ->setEventHistory($eventHistory)
            ->setProductCode($productCode)
            ->setResponseLocale($responseLocale)
            ->setResultSize($resultSize);
    }
    /**
     * Get accountNumberData value
     * @return \DHLTracking\StructType\AccountNumberDataType[]
     */
    public function getAccountNumberData()
    {
        return $this->accountNumberData;
    }
    /**
     * Set accountNumberData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\AccountNumberDataType[] $accountNumberData
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setAccountNumberData(array $accountNumberData = array())
    {
        foreach ($accountNumberData as $getConsignmentsByAccountNumbersRequestAccountNumberDataItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByAccountNumbersRequestAccountNumberDataItem instanceof \DHLTracking\StructType\AccountNumberDataType) {
                throw new \InvalidArgumentException(sprintf('The accountNumberData property can only contain items of \DHLTracking\StructType\AccountNumberDataType, "%s" given', is_object($getConsignmentsByAccountNumbersRequestAccountNumberDataItem) ? get_class($getConsignmentsByAccountNumbersRequestAccountNumberDataItem) : gettype($getConsignmentsByAccountNumbersRequestAccountNumberDataItem)), __LINE__);
            }
        }
        $this->accountNumberData = $accountNumberData;
        return $this;
    }
    /**
     * Add item to accountNumberData value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\AccountNumberDataType $item
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function addToAccountNumberData(\DHLTracking\StructType\AccountNumberDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\AccountNumberDataType) {
            throw new \InvalidArgumentException(sprintf('The accountNumberData property can only contain items of \DHLTracking\StructType\AccountNumberDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->accountNumberData[] = $item;
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setReferenceData(\DHLTracking\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Get consignmentIdentification value
     * @return \DHLTracking\StructType\ConsignmentIdentificationType|null
     */
    public function getConsignmentIdentification()
    {
        return $this->consignmentIdentification;
    }
    /**
     * Set consignmentIdentification value
     * @param \DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setConsignmentIdentification(\DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
        return $this;
    }
    /**
     * Get originCountry value
     * @return string|null
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }
    /**
     * Set originCountry value
     * @param string $originCountry
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setOriginCountry($originCountry = null)
    {
        // validation for constraint: string
        if (!is_null($originCountry) && !is_string($originCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCountry)), __LINE__);
        }
        $this->originCountry = $originCountry;
        return $this;
    }
    /**
     * Get destinationCountry value
     * @return string|null
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }
    /**
     * Set destinationCountry value
     * @param string $destinationCountry
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setDestinationCountry($destinationCountry = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountry) && !is_string($destinationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCountry)), __LINE__);
        }
        $this->destinationCountry = $destinationCountry;
        return $this;
    }
    /**
     * Get destinationCity value
     * @return string|null
     */
    public function getDestinationCity()
    {
        return $this->destinationCity;
    }
    /**
     * Set destinationCity value
     * @param string $destinationCity
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setDestinationCity($destinationCity = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCity) && !is_string($destinationCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCity)), __LINE__);
        }
        $this->destinationCity = $destinationCity;
        return $this;
    }
    /**
     * Get destinationZip value
     * @return string|null
     */
    public function getDestinationZip()
    {
        return $this->destinationZip;
    }
    /**
     * Set destinationZip value
     * @param string $destinationZip
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setDestinationZip($destinationZip = null)
    {
        // validation for constraint: string
        if (!is_null($destinationZip) && !is_string($destinationZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationZip)), __LINE__);
        }
        $this->destinationZip = $destinationZip;
        return $this;
    }
    /**
     * Get eventKey value
     * @return \DHLTracking\StructType\EventKeyType|null
     */
    public function getEventKey()
    {
        return $this->eventKey;
    }
    /**
     * Set eventKey value
     * @param \DHLTracking\StructType\EventKeyType $eventKey
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setEventKey(\DHLTracking\StructType\EventKeyType $eventKey = null)
    {
        $this->eventKey = $eventKey;
        return $this;
    }
    /**
     * Get eventDateRange value
     * @return int|null
     */
    public function getEventDateRange()
    {
        return $this->eventDateRange;
    }
    /**
     * Set eventDateRange value
     * @param int $eventDateRange
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setEventDateRange($eventDateRange = null)
    {
        // validation for constraint: int
        if (!is_null($eventDateRange) && !is_numeric($eventDateRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eventDateRange)), __LINE__);
        }
        $this->eventDateRange = $eventDateRange;
        return $this;
    }
    /**
     * Get pickupDateRange value
     * @return int|null
     */
    public function getPickupDateRange()
    {
        return $this->pickupDateRange;
    }
    /**
     * Set pickupDateRange value
     * @param int $pickupDateRange
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setPickupDateRange($pickupDateRange = null)
    {
        // validation for constraint: int
        if (!is_null($pickupDateRange) && !is_numeric($pickupDateRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pickupDateRange)), __LINE__);
        }
        $this->pickupDateRange = $pickupDateRange;
        return $this;
    }
    /**
     * Get updateDateRange value
     * @return \DHLTracking\StructType\DateRangeType|null
     */
    public function getUpdateDateRange()
    {
        return $this->updateDateRange;
    }
    /**
     * Set updateDateRange value
     * @param \DHLTracking\StructType\DateRangeType $updateDateRange
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setUpdateDateRange(\DHLTracking\StructType\DateRangeType $updateDateRange = null)
    {
        $this->updateDateRange = $updateDateRange;
        return $this;
    }
    /**
     * Get eventHistory value
     * @return \DHLTracking\StructType\EventHistoryRequestType|null
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }
    /**
     * Set eventHistory value
     * @param \DHLTracking\StructType\EventHistoryRequestType $eventHistory
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setEventHistory(\DHLTracking\StructType\EventHistoryRequestType $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
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
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest
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
