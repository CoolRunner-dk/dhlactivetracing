<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByIdentifierResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByIdentifierResponse extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * @var \StructType\ConsignmentIdentificationType
     */
    public $consignmentIdentification;
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \StructType\ConsignmentType[]
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentsByIdentifierResponse
     * @uses GetConsignmentsByIdentifierResponse::setConsignmentIdentification()
     * @uses GetConsignmentsByIdentifierResponse::setConsignment()
     * @param \StructType\ConsignmentIdentificationType $consignmentIdentification
     * @param \StructType\ConsignmentType[] $consignment
     */
    public function __construct(\StructType\ConsignmentIdentificationType $consignmentIdentification = null, array $consignment = array())
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setConsignment($consignment);
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
     * @return \StructType\GetConsignmentsByIdentifierResponse
     */
    public function setConsignmentIdentification(\StructType\ConsignmentIdentificationType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
        return $this;
    }
    /**
     * Get consignment value
     * @return \StructType\ConsignmentType[]|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentType[] $consignment
     * @return \StructType\GetConsignmentsByIdentifierResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByIdentifierResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByIdentifierResponseConsignmentItem instanceof \StructType\ConsignmentType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \StructType\ConsignmentType, "%s" given', is_object($getConsignmentsByIdentifierResponseConsignmentItem) ? get_class($getConsignmentsByIdentifierResponseConsignmentItem) : gettype($getConsignmentsByIdentifierResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \StructType\ConsignmentType $item
     * @return \StructType\GetConsignmentsByIdentifierResponse
     */
    public function addToConsignment(\StructType\ConsignmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConsignmentType) {
            throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \StructType\ConsignmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->consignment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetConsignmentsByIdentifierResponse
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
