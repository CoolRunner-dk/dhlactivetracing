<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentByReferencePublicResponse StructType
 * @subpackage Structs
 */
class GetConsignmentByReferencePublicResponse extends AbstractStructBase
{
    /**
     * The referenceData
     * @var \StructType\ReferenceDataType
     */
    public $referenceData;
    /**
     * The referenceSearchZipCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReferenceSearchZipCodesType
     */
    public $referenceSearchZipCodes;
    /**
     * The consignmentPublic
     * @var \StructType\ConsignmentPublicType
     */
    public $consignmentPublic;
    /**
     * Constructor method for GetConsignmentByReferencePublicResponse
     * @uses GetConsignmentByReferencePublicResponse::setReferenceData()
     * @uses GetConsignmentByReferencePublicResponse::setReferenceSearchZipCodes()
     * @uses GetConsignmentByReferencePublicResponse::setConsignmentPublic()
     * @param \StructType\ReferenceDataType $referenceData
     * @param \StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes
     * @param \StructType\ConsignmentPublicType $consignmentPublic
     */
    public function __construct(\StructType\ReferenceDataType $referenceData = null, \StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null, \StructType\ConsignmentPublicType $consignmentPublic = null)
    {
        $this
            ->setReferenceData($referenceData)
            ->setReferenceSearchZipCodes($referenceSearchZipCodes)
            ->setConsignmentPublic($consignmentPublic);
    }
    /**
     * Get referenceData value
     * @return \StructType\ReferenceDataType|null
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }
    /**
     * Set referenceData value
     * @param \StructType\ReferenceDataType $referenceData
     * @return \StructType\GetConsignmentByReferencePublicResponse
     */
    public function setReferenceData(\StructType\ReferenceDataType $referenceData = null)
    {
        $this->referenceData = $referenceData;
        return $this;
    }
    /**
     * Get referenceSearchZipCodes value
     * @return \StructType\ReferenceSearchZipCodesType|null
     */
    public function getReferenceSearchZipCodes()
    {
        return $this->referenceSearchZipCodes;
    }
    /**
     * Set referenceSearchZipCodes value
     * @param \StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes
     * @return \StructType\GetConsignmentByReferencePublicResponse
     */
    public function setReferenceSearchZipCodes(\StructType\ReferenceSearchZipCodesType $referenceSearchZipCodes = null)
    {
        $this->referenceSearchZipCodes = $referenceSearchZipCodes;
        return $this;
    }
    /**
     * Get consignmentPublic value
     * @return \StructType\ConsignmentPublicType|null
     */
    public function getConsignmentPublic()
    {
        return $this->consignmentPublic;
    }
    /**
     * Set consignmentPublic value
     * @param \StructType\ConsignmentPublicType $consignmentPublic
     * @return \StructType\GetConsignmentByReferencePublicResponse
     */
    public function setConsignmentPublic(\StructType\ConsignmentPublicType $consignmentPublic = null)
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
     * @return \StructType\GetConsignmentByReferencePublicResponse
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
