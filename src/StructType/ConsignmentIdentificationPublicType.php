<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consignmentIdentificationPublicType StructType
 * @subpackage Structs
 */
class ConsignmentIdentificationPublicType extends AbstractStructBase
{
    /**
     * The identification
     * @var string
     */
    public $identification;
    /**
     * The identificationType
     * @var string
     */
    public $identificationType;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \DHLTracking\StructType\ShipmentDateType
     */
    public $shipmentDate;
    /**
     * Constructor method for consignmentIdentificationPublicType
     * @uses ConsignmentIdentificationPublicType::setIdentification()
     * @uses ConsignmentIdentificationPublicType::setIdentificationType()
     * @uses ConsignmentIdentificationPublicType::setShipmentDate()
     * @param string $identification
     * @param string $identificationType
     * @param \DHLTracking\StructType\ShipmentDateType $shipmentDate
     */
    public function __construct($identification = null, $identificationType = null, \DHLTracking\StructType\ShipmentDateType $shipmentDate = null)
    {
        $this
            ->setIdentification($identification)
            ->setIdentificationType($identificationType)
            ->setShipmentDate($shipmentDate);
    }
    /**
     * Get identification value
     * @return string|null
     */
    public function getIdentification()
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param string $identification
     * @return \DHLTracking\StructType\ConsignmentIdentificationPublicType
     */
    public function setIdentification($identification = null)
    {
        // validation for constraint: string
        if (!is_null($identification) && !is_string($identification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identification)), __LINE__);
        }
        $this->identification = $identification;
        return $this;
    }
    /**
     * Get identificationType value
     * @return string|null
     */
    public function getIdentificationType()
    {
        return $this->identificationType;
    }
    /**
     * Set identificationType value
     * @uses \DHLTracking\EnumType\IdentificationPublicType::valueIsValid()
     * @uses \DHLTracking\EnumType\IdentificationPublicType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $identificationType
     * @return \DHLTracking\StructType\ConsignmentIdentificationPublicType
     */
    public function setIdentificationType($identificationType = null)
    {
        // validation for constraint: enumeration
        if (!\DHLTracking\EnumType\IdentificationPublicType::valueIsValid($identificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $identificationType, implode(', ', \DHLTracking\EnumType\IdentificationPublicType::getValidValues())), __LINE__);
        }
        $this->identificationType = $identificationType;
        return $this;
    }
    /**
     * Get shipmentDate value
     * @return \DHLTracking\StructType\ShipmentDateType|null
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }
    /**
     * Set shipmentDate value
     * @param \DHLTracking\StructType\ShipmentDateType $shipmentDate
     * @return \DHLTracking\StructType\ConsignmentIdentificationPublicType
     */
    public function setShipmentDate(\DHLTracking\StructType\ShipmentDateType $shipmentDate = null)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\ConsignmentIdentificationPublicType
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
