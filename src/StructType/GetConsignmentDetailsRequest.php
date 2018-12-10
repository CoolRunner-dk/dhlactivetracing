<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentDetailsRequest StructType
 * @subpackage Structs
 */
class GetConsignmentDetailsRequest extends AbstractStructBase
{
    /**
     * The actDbId
     * @var int
     */
    public $actDbId;
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
     * The updateDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DateRangeType
     */
    public $updateDateRange;
    /**
     * The showAddressData
     * @var bool
     */
    public $showAddressData;
    /**
     * Constructor method for GetConsignmentDetailsRequest
     * @uses GetConsignmentDetailsRequest::setActDbId()
     * @uses GetConsignmentDetailsRequest::setActUserId()
     * @uses GetConsignmentDetailsRequest::setResponseLocale()
     * @uses GetConsignmentDetailsRequest::setUpdateDateRange()
     * @uses GetConsignmentDetailsRequest::setShowAddressData()
     * @param int $actDbId
     * @param string $actUserId
     * @param string $responseLocale
     * @param \StructType\DateRangeType $updateDateRange
     * @param bool $showAddressData
     */
    public function __construct($actDbId = null, $actUserId = null, $responseLocale = null, \StructType\DateRangeType $updateDateRange = null, $showAddressData = null)
    {
        $this
            ->setActDbId($actDbId)
            ->setActUserId($actUserId)
            ->setResponseLocale($responseLocale)
            ->setUpdateDateRange($updateDateRange)
            ->setShowAddressData($showAddressData);
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
     * @return \StructType\GetConsignmentDetailsRequest
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
     * @return \StructType\GetConsignmentDetailsRequest
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
     * @return \StructType\GetConsignmentDetailsRequest
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
     * @return \StructType\GetConsignmentDetailsRequest
     */
    public function setUpdateDateRange(\StructType\DateRangeType $updateDateRange = null)
    {
        $this->updateDateRange = $updateDateRange;
        return $this;
    }
    /**
     * Get showAddressData value
     * @return bool|null
     */
    public function getShowAddressData()
    {
        return $this->showAddressData;
    }
    /**
     * Set showAddressData value
     * @param bool $showAddressData
     * @return \StructType\GetConsignmentDetailsRequest
     */
    public function setShowAddressData($showAddressData = null)
    {
        // validation for constraint: boolean
        if (!is_null($showAddressData) && !is_bool($showAddressData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showAddressData)), __LINE__);
        }
        $this->showAddressData = $showAddressData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetConsignmentDetailsRequest
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
