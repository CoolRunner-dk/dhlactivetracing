<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByIdentifierResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByIdentifierResponse extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * @var \DHLTracking\StructType\ConsignmentIdentificationType
     */
    public $consignmentIdentification;
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsignmentType[]
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentsByIdentifierResponse
     * @uses GetConsignmentsByIdentifierResponse::setConsignmentIdentification()
     * @uses GetConsignmentsByIdentifierResponse::setConsignment()
     * @param \DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification
     * @param \DHLTracking\StructType\ConsignmentType[] $consignment
     */
    public function __construct(\DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification = null, array $consignment = array())
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setConsignment($consignment);
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
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierResponse
     */
    public function setConsignmentIdentification(\DHLTracking\StructType\ConsignmentIdentificationType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
        return $this;
    }
    /**
     * Get consignment value
     * @return \DHLTracking\StructType\ConsignmentType[]|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentType[] $consignment
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByIdentifierResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByIdentifierResponseConsignmentItem instanceof \DHLTracking\StructType\ConsignmentType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentType, "%s" given', is_object($getConsignmentsByIdentifierResponseConsignmentItem) ? get_class($getConsignmentsByIdentifierResponseConsignmentItem) : gettype($getConsignmentsByIdentifierResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentType $item
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierResponse
     */
    public function addToConsignment(\DHLTracking\StructType\ConsignmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\ConsignmentType) {
            throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierResponse
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
