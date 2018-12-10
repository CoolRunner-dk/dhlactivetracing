<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentDetailsResponse StructType
 * @subpackage Structs
 */
class GetConsignmentDetailsResponse extends AbstractStructBase
{
    /**
     * The consignment
     * @var \StructType\ConsignmentType
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentDetailsResponse
     * @uses GetConsignmentDetailsResponse::setConsignment()
     * @param \StructType\ConsignmentType $consignment
     */
    public function __construct(\StructType\ConsignmentType $consignment = null)
    {
        $this
            ->setConsignment($consignment);
    }
    /**
     * Get consignment value
     * @return \StructType\ConsignmentType|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @param \StructType\ConsignmentType $consignment
     * @return \StructType\GetConsignmentDetailsResponse
     */
    public function setConsignment(\StructType\ConsignmentType $consignment = null)
    {
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetConsignmentDetailsResponse
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
