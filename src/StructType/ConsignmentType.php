<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consignmentType StructType
 * @subpackage Structs
 */
class ConsignmentType extends AbstractStructBase
{
    /**
     * The actDbId
     * @var int
     */
    public $actDbId;
    /**
     * The orderCode
     * @var string
     */
    public $orderCode;
    /**
     * The domesticShipmentData
     * @var \DHLTracking\StructType\DomesticShipmentDataType
     */
    public $domesticShipmentData;
    /**
     * The consignorName
     * @var string
     */
    public $consignorName;
    /**
     * The consignorAddress
     * @var \DHLTracking\StructType\AddressDataType
     */
    public $consignorAddress;
    /**
     * The consigneeName
     * @var string
     */
    public $consigneeName;
    /**
     * The consigneeAddress
     * @var \DHLTracking\StructType\AddressDataType
     */
    public $consigneeAddress;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $weight;
    /**
     * The volume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $volume;
    /**
     * The loadingMeter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $loadingMeter;
    /**
     * The numberOfColli
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $numberOfColli;
    /**
     * The numberOfPallets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $numberOfPallets;
    /**
     * The latestEvent
     * @var \DHLTracking\StructType\EventDataType
     */
    public $latestEvent;
    /**
     * The productCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $productCode;
    /**
     * The productName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $productName;
    /**
     * The customerReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customerReference;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pickupDate;
    /**
     * The fixedDeliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $fixedDeliveryDate;
    /**
     * The committedDeliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $committedDeliveryDate;
    /**
     * The appointmentDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $appointmentDate;
    /**
     * The deliveredDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $deliveredDate;
    /**
     * The receivedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $receivedBy;
    /**
     * The receivedDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $receivedDate;
    /**
     * The receivedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $receivedTime;
    /**
     * The companyHolidayTillDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $companyHolidayTillDate;
    /**
     * The laterDeliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $laterDeliveryDate;
    /**
     * The features
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\FeaturesType
     */
    public $features;
    /**
     * The domesticShipmentDataList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\DomesticShipmentDataListType
     */
    public $domesticShipmentDataList;
    /**
     * The referenceDataList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ReferenceDataListType
     */
    public $referenceDataList;
    /**
     * The eventHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\EventHistoryType
     */
    public $eventHistory;
    /**
     * The packageList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\PackageListType
     */
    public $packageList;
    /**
     * The consigmentDetailAddressDataList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsigmentDetailAddressDataListType
     */
    public $consigmentDetailAddressDataList;
    /**
     * Constructor method for consignmentType
     * @uses ConsignmentType::setActDbId()
     * @uses ConsignmentType::setOrderCode()
     * @uses ConsignmentType::setDomesticShipmentData()
     * @uses ConsignmentType::setConsignorName()
     * @uses ConsignmentType::setConsignorAddress()
     * @uses ConsignmentType::setConsigneeName()
     * @uses ConsignmentType::setConsigneeAddress()
     * @uses ConsignmentType::setWeight()
     * @uses ConsignmentType::setVolume()
     * @uses ConsignmentType::setLoadingMeter()
     * @uses ConsignmentType::setNumberOfColli()
     * @uses ConsignmentType::setNumberOfPallets()
     * @uses ConsignmentType::setLatestEvent()
     * @uses ConsignmentType::setProductCode()
     * @uses ConsignmentType::setProductName()
     * @uses ConsignmentType::setCustomerReference()
     * @uses ConsignmentType::setPickupDate()
     * @uses ConsignmentType::setFixedDeliveryDate()
     * @uses ConsignmentType::setCommittedDeliveryDate()
     * @uses ConsignmentType::setAppointmentDate()
     * @uses ConsignmentType::setDeliveredDate()
     * @uses ConsignmentType::setReceivedBy()
     * @uses ConsignmentType::setReceivedDate()
     * @uses ConsignmentType::setReceivedTime()
     * @uses ConsignmentType::setCompanyHolidayTillDate()
     * @uses ConsignmentType::setLaterDeliveryDate()
     * @uses ConsignmentType::setFeatures()
     * @uses ConsignmentType::setDomesticShipmentDataList()
     * @uses ConsignmentType::setReferenceDataList()
     * @uses ConsignmentType::setEventHistory()
     * @uses ConsignmentType::setPackageList()
     * @uses ConsignmentType::setConsigmentDetailAddressDataList()
     * @param int $actDbId
     * @param string $orderCode
     * @param \DHLTracking\StructType\DomesticShipmentDataType $domesticShipmentData
     * @param string $consignorName
     * @param \DHLTracking\StructType\AddressDataType $consignorAddress
     * @param string $consigneeName
     * @param \DHLTracking\StructType\AddressDataType $consigneeAddress
     * @param int $weight
     * @param float $volume
     * @param float $loadingMeter
     * @param int $numberOfColli
     * @param int $numberOfPallets
     * @param \DHLTracking\StructType\EventDataType $latestEvent
     * @param string $productCode
     * @param string $productName
     * @param string $customerReference
     * @param string $pickupDate
     * @param string $fixedDeliveryDate
     * @param string $committedDeliveryDate
     * @param string $appointmentDate
     * @param string $deliveredDate
     * @param string $receivedBy
     * @param string $receivedDate
     * @param string $receivedTime
     * @param string $companyHolidayTillDate
     * @param string $laterDeliveryDate
     * @param \DHLTracking\StructType\FeaturesType $features
     * @param \DHLTracking\StructType\DomesticShipmentDataListType $domesticShipmentDataList
     * @param \DHLTracking\StructType\ReferenceDataListType $referenceDataList
     * @param \DHLTracking\StructType\EventHistoryType $eventHistory
     * @param \DHLTracking\StructType\PackageListType $packageList
     * @param \DHLTracking\StructType\ConsigmentDetailAddressDataListType $consigmentDetailAddressDataList
     */
    public function __construct($actDbId = null, $orderCode = null, \DHLTracking\StructType\DomesticShipmentDataType $domesticShipmentData = null, $consignorName = null, \DHLTracking\StructType\AddressDataType $consignorAddress = null, $consigneeName = null, \DHLTracking\StructType\AddressDataType $consigneeAddress = null, $weight = null, $volume = null, $loadingMeter = null, $numberOfColli = null, $numberOfPallets = null, \DHLTracking\StructType\EventDataType $latestEvent = null, $productCode = null, $productName = null, $customerReference = null, $pickupDate = null, $fixedDeliveryDate = null, $committedDeliveryDate = null, $appointmentDate = null, $deliveredDate = null, $receivedBy = null, $receivedDate = null, $receivedTime = null, $companyHolidayTillDate = null, $laterDeliveryDate = null, \DHLTracking\StructType\FeaturesType $features = null, \DHLTracking\StructType\DomesticShipmentDataListType $domesticShipmentDataList = null, \DHLTracking\StructType\ReferenceDataListType $referenceDataList = null, \DHLTracking\StructType\EventHistoryType $eventHistory = null, \DHLTracking\StructType\PackageListType $packageList = null, \DHLTracking\StructType\ConsigmentDetailAddressDataListType $consigmentDetailAddressDataList = null)
    {
        $this
            ->setActDbId($actDbId)
            ->setOrderCode($orderCode)
            ->setDomesticShipmentData($domesticShipmentData)
            ->setConsignorName($consignorName)
            ->setConsignorAddress($consignorAddress)
            ->setConsigneeName($consigneeName)
            ->setConsigneeAddress($consigneeAddress)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingMeter($loadingMeter)
            ->setNumberOfColli($numberOfColli)
            ->setNumberOfPallets($numberOfPallets)
            ->setLatestEvent($latestEvent)
            ->setProductCode($productCode)
            ->setProductName($productName)
            ->setCustomerReference($customerReference)
            ->setPickupDate($pickupDate)
            ->setFixedDeliveryDate($fixedDeliveryDate)
            ->setCommittedDeliveryDate($committedDeliveryDate)
            ->setAppointmentDate($appointmentDate)
            ->setDeliveredDate($deliveredDate)
            ->setReceivedBy($receivedBy)
            ->setReceivedDate($receivedDate)
            ->setReceivedTime($receivedTime)
            ->setCompanyHolidayTillDate($companyHolidayTillDate)
            ->setLaterDeliveryDate($laterDeliveryDate)
            ->setFeatures($features)
            ->setDomesticShipmentDataList($domesticShipmentDataList)
            ->setReferenceDataList($referenceDataList)
            ->setEventHistory($eventHistory)
            ->setPackageList($packageList)
            ->setConsigmentDetailAddressDataList($consigmentDetailAddressDataList);
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
     * @return \DHLTracking\StructType\ConsignmentType
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
     * Get orderCode value
     * @return string|null
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }
    /**
     * Set orderCode value
     * @param string $orderCode
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setOrderCode($orderCode = null)
    {
        // validation for constraint: string
        if (!is_null($orderCode) && !is_string($orderCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderCode)), __LINE__);
        }
        $this->orderCode = $orderCode;
        return $this;
    }
    /**
     * Get domesticShipmentData value
     * @return \DHLTracking\StructType\DomesticShipmentDataType|null
     */
    public function getDomesticShipmentData()
    {
        return $this->domesticShipmentData;
    }
    /**
     * Set domesticShipmentData value
     * @param \DHLTracking\StructType\DomesticShipmentDataType $domesticShipmentData
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setDomesticShipmentData(\DHLTracking\StructType\DomesticShipmentDataType $domesticShipmentData = null)
    {
        $this->domesticShipmentData = $domesticShipmentData;
        return $this;
    }
    /**
     * Get consignorName value
     * @return string|null
     */
    public function getConsignorName()
    {
        return $this->consignorName;
    }
    /**
     * Set consignorName value
     * @param string $consignorName
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setConsignorName($consignorName = null)
    {
        // validation for constraint: string
        if (!is_null($consignorName) && !is_string($consignorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consignorName)), __LINE__);
        }
        $this->consignorName = $consignorName;
        return $this;
    }
    /**
     * Get consignorAddress value
     * @return \DHLTracking\StructType\AddressDataType|null
     */
    public function getConsignorAddress()
    {
        return $this->consignorAddress;
    }
    /**
     * Set consignorAddress value
     * @param \DHLTracking\StructType\AddressDataType $consignorAddress
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setConsignorAddress(\DHLTracking\StructType\AddressDataType $consignorAddress = null)
    {
        $this->consignorAddress = $consignorAddress;
        return $this;
    }
    /**
     * Get consigneeName value
     * @return string|null
     */
    public function getConsigneeName()
    {
        return $this->consigneeName;
    }
    /**
     * Set consigneeName value
     * @param string $consigneeName
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setConsigneeName($consigneeName = null)
    {
        // validation for constraint: string
        if (!is_null($consigneeName) && !is_string($consigneeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consigneeName)), __LINE__);
        }
        $this->consigneeName = $consigneeName;
        return $this;
    }
    /**
     * Get consigneeAddress value
     * @return \DHLTracking\StructType\AddressDataType|null
     */
    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }
    /**
     * Set consigneeAddress value
     * @param \DHLTracking\StructType\AddressDataType $consigneeAddress
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setConsigneeAddress(\DHLTracking\StructType\AddressDataType $consigneeAddress = null)
    {
        $this->consigneeAddress = $consigneeAddress;
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param float $volume
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setVolume($volume = null)
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Get loadingMeter value
     * @return float|null
     */
    public function getLoadingMeter()
    {
        return $this->loadingMeter;
    }
    /**
     * Set loadingMeter value
     * @param float $loadingMeter
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setLoadingMeter($loadingMeter = null)
    {
        $this->loadingMeter = $loadingMeter;
        return $this;
    }
    /**
     * Get numberOfColli value
     * @return int|null
     */
    public function getNumberOfColli()
    {
        return $this->numberOfColli;
    }
    /**
     * Set numberOfColli value
     * @param int $numberOfColli
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setNumberOfColli($numberOfColli = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfColli) && !is_numeric($numberOfColli)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfColli)), __LINE__);
        }
        $this->numberOfColli = $numberOfColli;
        return $this;
    }
    /**
     * Get numberOfPallets value
     * @return int|null
     */
    public function getNumberOfPallets()
    {
        return $this->numberOfPallets;
    }
    /**
     * Set numberOfPallets value
     * @param int $numberOfPallets
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setNumberOfPallets($numberOfPallets = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPallets) && !is_numeric($numberOfPallets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPallets)), __LINE__);
        }
        $this->numberOfPallets = $numberOfPallets;
        return $this;
    }
    /**
     * Get latestEvent value
     * @return \DHLTracking\StructType\EventDataType|null
     */
    public function getLatestEvent()
    {
        return $this->latestEvent;
    }
    /**
     * Set latestEvent value
     * @param \DHLTracking\StructType\EventDataType $latestEvent
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setLatestEvent(\DHLTracking\StructType\EventDataType $latestEvent = null)
    {
        $this->latestEvent = $latestEvent;
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
     * @return \DHLTracking\StructType\ConsignmentType
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
     * Get productName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }
    /**
     * Set productName value
     * @param string $productName
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        $this->productName = $productName;
        return $this;
    }
    /**
     * Get customerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }
    /**
     * Set customerReference value
     * @param string $customerReference
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setCustomerReference($customerReference = null)
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReference)), __LINE__);
        }
        $this->customerReference = $customerReference;
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get fixedDeliveryDate value
     * @return string|null
     */
    public function getFixedDeliveryDate()
    {
        return $this->fixedDeliveryDate;
    }
    /**
     * Set fixedDeliveryDate value
     * @param string $fixedDeliveryDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setFixedDeliveryDate($fixedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($fixedDeliveryDate) && !is_string($fixedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fixedDeliveryDate)), __LINE__);
        }
        $this->fixedDeliveryDate = $fixedDeliveryDate;
        return $this;
    }
    /**
     * Get committedDeliveryDate value
     * @return string|null
     */
    public function getCommittedDeliveryDate()
    {
        return $this->committedDeliveryDate;
    }
    /**
     * Set committedDeliveryDate value
     * @param string $committedDeliveryDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setCommittedDeliveryDate($committedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($committedDeliveryDate) && !is_string($committedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($committedDeliveryDate)), __LINE__);
        }
        $this->committedDeliveryDate = $committedDeliveryDate;
        return $this;
    }
    /**
     * Get appointmentDate value
     * @return string|null
     */
    public function getAppointmentDate()
    {
        return $this->appointmentDate;
    }
    /**
     * Set appointmentDate value
     * @param string $appointmentDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setAppointmentDate($appointmentDate = null)
    {
        // validation for constraint: string
        if (!is_null($appointmentDate) && !is_string($appointmentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appointmentDate)), __LINE__);
        }
        $this->appointmentDate = $appointmentDate;
        return $this;
    }
    /**
     * Get deliveredDate value
     * @return string|null
     */
    public function getDeliveredDate()
    {
        return $this->deliveredDate;
    }
    /**
     * Set deliveredDate value
     * @param string $deliveredDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setDeliveredDate($deliveredDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveredDate) && !is_string($deliveredDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveredDate)), __LINE__);
        }
        $this->deliveredDate = $deliveredDate;
        return $this;
    }
    /**
     * Get receivedBy value
     * @return string|null
     */
    public function getReceivedBy()
    {
        return $this->receivedBy;
    }
    /**
     * Set receivedBy value
     * @param string $receivedBy
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setReceivedBy($receivedBy = null)
    {
        // validation for constraint: string
        if (!is_null($receivedBy) && !is_string($receivedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivedBy)), __LINE__);
        }
        $this->receivedBy = $receivedBy;
        return $this;
    }
    /**
     * Get receivedDate value
     * @return string|null
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }
    /**
     * Set receivedDate value
     * @param string $receivedDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setReceivedDate($receivedDate = null)
    {
        // validation for constraint: string
        if (!is_null($receivedDate) && !is_string($receivedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivedDate)), __LINE__);
        }
        $this->receivedDate = $receivedDate;
        return $this;
    }
    /**
     * Get receivedTime value
     * @return string|null
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }
    /**
     * Set receivedTime value
     * @param string $receivedTime
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setReceivedTime($receivedTime = null)
    {
        // validation for constraint: string
        if (!is_null($receivedTime) && !is_string($receivedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivedTime)), __LINE__);
        }
        $this->receivedTime = $receivedTime;
        return $this;
    }
    /**
     * Get companyHolidayTillDate value
     * @return string|null
     */
    public function getCompanyHolidayTillDate()
    {
        return $this->companyHolidayTillDate;
    }
    /**
     * Set companyHolidayTillDate value
     * @param string $companyHolidayTillDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setCompanyHolidayTillDate($companyHolidayTillDate = null)
    {
        // validation for constraint: string
        if (!is_null($companyHolidayTillDate) && !is_string($companyHolidayTillDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyHolidayTillDate)), __LINE__);
        }
        $this->companyHolidayTillDate = $companyHolidayTillDate;
        return $this;
    }
    /**
     * Get laterDeliveryDate value
     * @return string|null
     */
    public function getLaterDeliveryDate()
    {
        return $this->laterDeliveryDate;
    }
    /**
     * Set laterDeliveryDate value
     * @param string $laterDeliveryDate
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setLaterDeliveryDate($laterDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($laterDeliveryDate) && !is_string($laterDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($laterDeliveryDate)), __LINE__);
        }
        $this->laterDeliveryDate = $laterDeliveryDate;
        return $this;
    }
    /**
     * Get features value
     * @return \DHLTracking\StructType\FeaturesType|null
     */
    public function getFeatures()
    {
        return $this->features;
    }
    /**
     * Set features value
     * @param \DHLTracking\StructType\FeaturesType $features
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setFeatures(\DHLTracking\StructType\FeaturesType $features = null)
    {
        $this->features = $features;
        return $this;
    }
    /**
     * Get domesticShipmentDataList value
     * @return \DHLTracking\StructType\DomesticShipmentDataListType|null
     */
    public function getDomesticShipmentDataList()
    {
        return $this->domesticShipmentDataList;
    }
    /**
     * Set domesticShipmentDataList value
     * @param \DHLTracking\StructType\DomesticShipmentDataListType $domesticShipmentDataList
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setDomesticShipmentDataList(\DHLTracking\StructType\DomesticShipmentDataListType $domesticShipmentDataList = null)
    {
        $this->domesticShipmentDataList = $domesticShipmentDataList;
        return $this;
    }
    /**
     * Get referenceDataList value
     * @return \DHLTracking\StructType\ReferenceDataListType|null
     */
    public function getReferenceDataList()
    {
        return $this->referenceDataList;
    }
    /**
     * Set referenceDataList value
     * @param \DHLTracking\StructType\ReferenceDataListType $referenceDataList
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setReferenceDataList(\DHLTracking\StructType\ReferenceDataListType $referenceDataList = null)
    {
        $this->referenceDataList = $referenceDataList;
        return $this;
    }
    /**
     * Get eventHistory value
     * @return \DHLTracking\StructType\EventHistoryType|null
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }
    /**
     * Set eventHistory value
     * @param \DHLTracking\StructType\EventHistoryType $eventHistory
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setEventHistory(\DHLTracking\StructType\EventHistoryType $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }
    /**
     * Get packageList value
     * @return \DHLTracking\StructType\PackageListType|null
     */
    public function getPackageList()
    {
        return $this->packageList;
    }
    /**
     * Set packageList value
     * @param \DHLTracking\StructType\PackageListType $packageList
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setPackageList(\DHLTracking\StructType\PackageListType $packageList = null)
    {
        $this->packageList = $packageList;
        return $this;
    }
    /**
     * Get consigmentDetailAddressDataList value
     * @return \DHLTracking\StructType\ConsigmentDetailAddressDataListType|null
     */
    public function getConsigmentDetailAddressDataList()
    {
        return $this->consigmentDetailAddressDataList;
    }
    /**
     * Set consigmentDetailAddressDataList value
     * @param \DHLTracking\StructType\ConsigmentDetailAddressDataListType $consigmentDetailAddressDataList
     * @return \DHLTracking\StructType\ConsignmentType
     */
    public function setConsigmentDetailAddressDataList(\DHLTracking\StructType\ConsigmentDetailAddressDataListType $consigmentDetailAddressDataList = null)
    {
        $this->consigmentDetailAddressDataList = $consigmentDetailAddressDataList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\ConsignmentType
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
