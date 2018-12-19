<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsignmentsByIdentifierPublicResponse StructType
 * @subpackage Structs
 */
class GetConsignmentsByIdentifierPublicResponse extends AbstractStructBase
{
    /**
     * The consignmentIdentification
     * @var \DHLTracking\StructType\ConsignmentIdentificationPublicType
     */
    public $consignmentIdentification;
    /**
     * The consignment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ConsignmentPublicType[]
     */
    public $consignment;
    /**
     * Constructor method for GetConsignmentsByIdentifierPublicResponse
     * @uses GetConsignmentsByIdentifierPublicResponse::setConsignmentIdentification()
     * @uses GetConsignmentsByIdentifierPublicResponse::setConsignment()
     * @param \DHLTracking\StructType\ConsignmentIdentificationPublicType $consignmentIdentification
     * @param \DHLTracking\StructType\ConsignmentPublicType[] $consignment
     */
    public function __construct(\DHLTracking\StructType\ConsignmentIdentificationPublicType $consignmentIdentification = null, array $consignment = array())
    {
        $this
            ->setConsignmentIdentification($consignmentIdentification)
            ->setConsignment($consignment);
    }
    /**
     * Get consignmentIdentification value
     * @return \DHLTracking\StructType\ConsignmentIdentificationPublicType|null
     */
    public function getConsignmentIdentification()
    {
        return $this->consignmentIdentification;
    }
    /**
     * Set consignmentIdentification value
     * @param \DHLTracking\StructType\ConsignmentIdentificationPublicType $consignmentIdentification
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse
     */
    public function setConsignmentIdentification(\DHLTracking\StructType\ConsignmentIdentificationPublicType $consignmentIdentification = null)
    {
        $this->consignmentIdentification = $consignmentIdentification;
        return $this;
    }
    /**
     * Get consignment value
     * @return \DHLTracking\StructType\ConsignmentPublicType[]|null
     */
    public function getConsignment()
    {
        return $this->consignment;
    }
    /**
     * Set consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentPublicType[] $consignment
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse
     */
    public function setConsignment(array $consignment = array())
    {
        foreach ($consignment as $getConsignmentsByIdentifierPublicResponseConsignmentItem) {
            // validation for constraint: itemType
            if (!$getConsignmentsByIdentifierPublicResponseConsignmentItem instanceof \DHLTracking\StructType\ConsignmentPublicType) {
                throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentPublicType, "%s" given', is_object($getConsignmentsByIdentifierPublicResponseConsignmentItem) ? get_class($getConsignmentsByIdentifierPublicResponseConsignmentItem) : gettype($getConsignmentsByIdentifierPublicResponseConsignmentItem)), __LINE__);
            }
        }
        $this->consignment = $consignment;
        return $this;
    }
    /**
     * Add item to consignment value
     * @throws \InvalidArgumentException
     * @param \DHLTracking\StructType\ConsignmentPublicType $item
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse
     */
    public function addToConsignment(\DHLTracking\StructType\ConsignmentPublicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLTracking\StructType\ConsignmentPublicType) {
            throw new \InvalidArgumentException(sprintf('The consignment property can only contain items of \DHLTracking\StructType\ConsignmentPublicType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse
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
