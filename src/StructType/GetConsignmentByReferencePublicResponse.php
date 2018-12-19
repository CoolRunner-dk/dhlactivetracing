<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentByReferencePublicResponse StructType
 * @subpackage Structs
 */
class GetConsignmentByReferencePublicResponse extends AbstractStructBase
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
     * The consignmentPublic
     * @var \DHLTracking\StructType\ConsignmentPublicType
     */
    public $consignmentPublic;
    /**
     * Constructor method for GetConsignmentByReferencePublicResponse
     * @uses GetConsignmentByReferencePublicResponse::setReferenceData()
     * @uses GetConsignmentByReferencePublicResponse::setReferenceSearchZipCodes()
     * @uses GetConsignmentByReferencePublicResponse::setConsignmentPublic()
     * @param \DHLTracking\StructType\ReferenceDataType $referenceData
     * @param \DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes
     * @param \DHLTracking\StructType\ConsignmentPublicType $consignmentPublic
     */
    public function __construct(\DHLTracking\StructType\ReferenceDataType $referenceData = null, \DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null, \DHLTracking\StructType\ConsignmentPublicType $consignmentPublic = null)
    {
        $this
            ->setReferenceData($referenceData)
            ->setReferenceSearchZipCodes($referenceSearchZipCodes)
            ->setConsignmentPublic($consignmentPublic);
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse
     */
    public function setReferenceSearchZipCodes(\DHLTracking\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null)
    {
        $this->referenceSearchZipCodes = $referenceSearchZipCodes;
        return $this;
    }
    /**
     * Get consignmentPublic value
     * @return \DHLTracking\StructType\ConsignmentPublicType|null
     */
    public function getConsignmentPublic()
    {
        return $this->consignmentPublic;
    }
    /**
     * Set consignmentPublic value
     * @param \DHLTracking\StructType\ConsignmentPublicType $consignmentPublic
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse
     */
    public function setConsignmentPublic(\DHLTracking\StructType\ConsignmentPublicType $consignmentPublic = null)
    {
        $this->consignmentPublic = $consignmentPublic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse
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
