<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentDetailsPublicResponse StructType
 * @subpackage Structs
 */
class GetConsignmentDetailsPublicResponse extends AbstractStructBase
{
    /**
     * The consignment
     * @var \StructType\ConsignmentPublicType
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentDetailsPublicResponse
     * @uses GetConsignmentDetailsPublicResponse::setConsignment()
     * @param \StructType\ConsignmentPublicType $consignment
     */
    public function __construct(\StructType\ConsignmentPublicType $consignment = null)
    {
        $this
            ->setConsignment($consignment);
    }
    /**
     * Get consignment value
     * @return \StructType\ConsignmentPublicType|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @param \StructType\ConsignmentPublicType $consignment
     * @return \StructType\GetConsignmentDetailsPublicResponse
     */
    public function setConsignment(\StructType\ConsignmentPublicType $consignment = null)
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
     * @return \StructType\GetConsignmentDetailsPublicResponse
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
