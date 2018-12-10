<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for referenceSearchZipCodesType StructType
 * @subpackage Structs
 */
class ReferenceSearchZipCodesType extends AbstractStructBase
{
    /**
     * The receiverZip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiverZip;
    /**
     * The senderZip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderZip;
    /**
     * Constructor method for referenceSearchZipCodesType
     * @uses ReferenceSearchZipCodesType::setReceiverZip()
     * @uses ReferenceSearchZipCodesType::setSenderZip()
     * @param string $receiverZip
     * @param string $senderZip
     */
    public function __construct($receiverZip = null, $senderZip = null)
    {
        $this
            ->setReceiverZip($receiverZip)
            ->setSenderZip($senderZip);
    }
    /**
     * Get receiverZip value
     * @return string|null
     */
    public function getReceiverZip()
    {
        return $this->receiverZip;
    }
    /**
     * Set receiverZip value
     * @param string $receiverZip
     * @return \StructType\ReferenceSearchZipCodesType
     */
    public function setReceiverZip($receiverZip = null)
    {
        // validation for constraint: string
        if (!is_null($receiverZip) && !is_string($receiverZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverZip)), __LINE__);
        }
        $this->receiverZip = $receiverZip;
        return $this;
    }
    /**
     * Get senderZip value
     * @return string|null
     */
    public function getSenderZip()
    {
        return $this->senderZip;
    }
    /**
     * Set senderZip value
     * @param string $senderZip
     * @return \StructType\ReferenceSearchZipCodesType
     */
    public function setSenderZip($senderZip = null)
    {
        // validation for constraint: string
        if (!is_null($senderZip) && !is_string($senderZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderZip)), __LINE__);
        }
        $this->senderZip = $senderZip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReferenceSearchZipCodesType
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
