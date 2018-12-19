<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ePODSearchType StructType
 * @subpackage Structs
 */
class EPODSearchType extends AbstractStructBase
{
    /**
     * The ePODSearchDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 1
     * @var \DHLTracking\StructType\EPODSearchDetailType[]
     */
    public $ePODSearchDetail;
    /**
     * The totalNumberOfShipmentId
     * @var int
     */
    public $totalNumberOfShipmentId;
    /**
     * The totalNumberOfShipmentIdProcessed
     * @var int
     */
    public $totalNumberOfShipmentIdProcessed;
    /**
     * The numberOfShipmentIdWithinResponse
     * @var int
     */
    public $numberOfShipmentIdWithinResponse;
    /**
     * The numberEpodAvailable
     * @var int
     */
    public $numberEpodAvailable;
    /**
     * The numberEpodNotAvailable
     * @var int
     */
    public $numberEpodNotAvailable;
    /**
     * The numberEPodFailure
     * @var int
     */
    public $numberEPodFailure;
    /**
     * The ePODZipFile
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * @var string
     */
    public $ePODZipFile;
    /**
     * Constructor method for ePODSearchType
     * @uses EPODSearchType::setEPODSearchDetail()
     * @uses EPODSearchType::setTotalNumberOfShipmentId()
     * @uses EPODSearchType::setTotalNumberOfShipmentIdProcessed()
     * @uses EPODSearchType::setNumberOfShipmentIdWithinResponse()
     * @uses EPODSearchType::setNumberEpodAvailable()
     * @uses EPODSearchType::setNumberEpodNotAvailable()
     * @uses EPODSearchType::setNumberEPodFailure()
     * @uses EPODSearchType::setEPODZipFile()
     * @param \DHLTracking\StructType\EPODSearchDetailType[] $ePODSearchDetail
     * @param int $totalNumberOfShipmentId
     * @param int $totalNumberOfShipmentIdProcessed
     * @param int $numberOfShipmentIdWithinResponse
     * @param int $numberEpodAvailable
     * @param int $numberEpodNotAvailable
     * @param int $numberEPodFailure
     * @param string $ePODZipFile
     */
    public function __construct(array $ePODSearchDetail = array(), $totalNumberOfShipmentId = null, $totalNumberOfShipmentIdProcessed = null, $numberOfShipmentIdWithinResponse = null, $numberEpodAvailable = null, $numberEpodNotAvailable = null, $numberEPodFailure = null, $ePODZipFile = null)
    {
        $this
            ->setEPODSearchDetail($ePODSearchDetail)
            ->setTotalNumberOfShipmentId($totalNumberOfShipmentId)
            ->setTotalNumberOfShipmentIdProcessed($totalNumberOfShipmentIdProcessed)
            ->setNumberOfShipmentIdWithinResponse($numberOfShipmentIdWithinResponse)
            ->setNumberEpodAvailable($numberEpodAvailable)
            ->setNumberEpodNotAvailable($numberEpodNotAvailable)
            ->setNumberEPodFailure($numberEPodFailure)
            ->setEPODZipFile($ePODZipFile);
    }
    /**
     * Get ePODSearchDetail value
     * @return \DHLTracking\StructType\EPODSearchDetailType[]
     */
    public function getEPODSearchDetail()
    {
        return $this->ePODSearchDetail;
    }
    /**
     * Set ePODSearchDetail value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\EPODSearchDetailType[] $ePODSearchDetail
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setEPODSearchDetail(array $ePODSearchDetail = array())
    {
        foreach ($ePODSearchDetail as $ePODSearchTypeEPODSearchDetailItem) {
            // validation for constraint: itemType
            if (!$ePODSearchTypeEPODSearchDetailItem instanceof \DHLTracking\StructType\EPODSearchDetailType) {
                throw new \InvalidArgumentException(sprintf('The ePODSearchDetail property can only contain items of \DHLTracking\StructType\EPODSearchDetailType, "%s" given', is_object($ePODSearchTypeEPODSearchDetailItem) ? get_class($ePODSearchTypeEPODSearchDetailItem) : gettype($ePODSearchTypeEPODSearchDetailItem)), __LINE__);
            }
        }
        $this->ePODSearchDetail = $ePODSearchDetail;
        return $this;
    }
    /**
     * Add item to ePODSearchDetail value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\EPODSearchDetailType $item
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function addToEPODSearchDetail(\DHLTracking\StructType\EPODSearchDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\EPODSearchDetailType) {
            throw new \InvalidArgumentException(sprintf('The ePODSearchDetail property can only contain items of \DHLTracking\StructType\EPODSearchDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ePODSearchDetail[] = $item;
        return $this;
    }
    /**
     * Get totalNumberOfShipmentId value
     * @return int|null
     */
    public function getTotalNumberOfShipmentId()
    {
        return $this->totalNumberOfShipmentId;
    }
    /**
     * Set totalNumberOfShipmentId value
     * @param int $totalNumberOfShipmentId
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setTotalNumberOfShipmentId($totalNumberOfShipmentId = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfShipmentId) && !is_numeric($totalNumberOfShipmentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfShipmentId)), __LINE__);
        }
        $this->totalNumberOfShipmentId = $totalNumberOfShipmentId;
        return $this;
    }
    /**
     * Get totalNumberOfShipmentIdProcessed value
     * @return int|null
     */
    public function getTotalNumberOfShipmentIdProcessed()
    {
        return $this->totalNumberOfShipmentIdProcessed;
    }
    /**
     * Set totalNumberOfShipmentIdProcessed value
     * @param int $totalNumberOfShipmentIdProcessed
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setTotalNumberOfShipmentIdProcessed($totalNumberOfShipmentIdProcessed = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfShipmentIdProcessed) && !is_numeric($totalNumberOfShipmentIdProcessed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfShipmentIdProcessed)), __LINE__);
        }
        $this->totalNumberOfShipmentIdProcessed = $totalNumberOfShipmentIdProcessed;
        return $this;
    }
    /**
     * Get numberOfShipmentIdWithinResponse value
     * @return int|null
     */
    public function getNumberOfShipmentIdWithinResponse()
    {
        return $this->numberOfShipmentIdWithinResponse;
    }
    /**
     * Set numberOfShipmentIdWithinResponse value
     * @param int $numberOfShipmentIdWithinResponse
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setNumberOfShipmentIdWithinResponse($numberOfShipmentIdWithinResponse = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfShipmentIdWithinResponse) && !is_numeric($numberOfShipmentIdWithinResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfShipmentIdWithinResponse)), __LINE__);
        }
        $this->numberOfShipmentIdWithinResponse = $numberOfShipmentIdWithinResponse;
        return $this;
    }
    /**
     * Get numberEpodAvailable value
     * @return int|null
     */
    public function getNumberEpodAvailable()
    {
        return $this->numberEpodAvailable;
    }
    /**
     * Set numberEpodAvailable value
     * @param int $numberEpodAvailable
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setNumberEpodAvailable($numberEpodAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($numberEpodAvailable) && !is_numeric($numberEpodAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberEpodAvailable)), __LINE__);
        }
        $this->numberEpodAvailable = $numberEpodAvailable;
        return $this;
    }
    /**
     * Get numberEpodNotAvailable value
     * @return int|null
     */
    public function getNumberEpodNotAvailable()
    {
        return $this->numberEpodNotAvailable;
    }
    /**
     * Set numberEpodNotAvailable value
     * @param int $numberEpodNotAvailable
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setNumberEpodNotAvailable($numberEpodNotAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($numberEpodNotAvailable) && !is_numeric($numberEpodNotAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberEpodNotAvailable)), __LINE__);
        }
        $this->numberEpodNotAvailable = $numberEpodNotAvailable;
        return $this;
    }
    /**
     * Get numberEPodFailure value
     * @return int|null
     */
    public function getNumberEPodFailure()
    {
        return $this->numberEPodFailure;
    }
    /**
     * Set numberEPodFailure value
     * @param int $numberEPodFailure
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setNumberEPodFailure($numberEPodFailure = null)
    {
        // validation for constraint: int
        if (!is_null($numberEPodFailure) && !is_numeric($numberEPodFailure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberEPodFailure)), __LINE__);
        }
        $this->numberEPodFailure = $numberEPodFailure;
        return $this;
    }
    /**
     * Get ePODZipFile value
     * @return string|null
     */
    public function getEPODZipFile()
    {
        return $this->ePODZipFile;
    }
    /**
     * Set ePODZipFile value
     * @param string $ePODZipFile
     * @return \DHLTracking\StructType\EPODSearchType
     */
    public function setEPODZipFile($ePODZipFile = null)
    {
        // validation for constraint: string
        if (!is_null($ePODZipFile) && !is_string($ePODZipFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ePODZipFile)), __LINE__);
        }
        $this->ePODZipFile = $ePODZipFile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\EPODSearchType
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
