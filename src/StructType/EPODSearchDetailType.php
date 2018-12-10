<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ePODSearchDetailType StructType
 * @subpackage Structs
 */
class EPODSearchDetailType extends AbstractStructBase
{
    /**
     * The messageId
     * @var int
     */
    public $messageId;
    /**
     * The messageText
     * @var string
     */
    public $messageText;
    /**
     * The consigment
     * @var \StructType\ConsignmentType
     */
    public $consigment;
    /**
     * The filename
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $filename;
    /**
     * Constructor method for ePODSearchDetailType
     * @uses EPODSearchDetailType::setMessageId()
     * @uses EPODSearchDetailType::setMessageText()
     * @uses EPODSearchDetailType::setConsigment()
     * @uses EPODSearchDetailType::setFilename()
     * @param int $messageId
     * @param string $messageText
     * @param \StructType\ConsignmentType $consigment
     * @param string[] $filename
     */
    public function __construct($messageId = null, $messageText = null, \StructType\ConsignmentType $consigment = null, array $filename = array())
    {
        $this
            ->setMessageId($messageId)
            ->setMessageText($messageText)
            ->setConsigment($consigment)
            ->setFilename($filename);
    }
    /**
     * Get messageId value
     * @return int|null
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param int $messageId
     * @return \StructType\EPODSearchDetailType
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: int
        if (!is_null($messageId) && !is_numeric($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        return $this;
    }
    /**
     * Get messageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->messageText;
    }
    /**
     * Set messageText value
     * @param string $messageText
     * @return \StructType\EPODSearchDetailType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageText)), __LINE__);
        }
        $this->messageText = $messageText;
        return $this;
    }
    /**
     * Get consigment value
     * @return \StructType\ConsignmentType|null
     */
    public function getConsigment()
    {
        return $this->consigment;
    }
    /**
     * Set consigment value
     * @param \StructType\ConsignmentType $consigment
     * @return \StructType\EPODSearchDetailType
     */
    public function setConsigment(\StructType\ConsignmentType $consigment = null)
    {
        $this->consigment = $consigment;
        return $this;
    }
    /**
     * Get filename value
     * @return string[]|null
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @throws \InvalidArgumentException
     * @param string[] $filename
     * @return \StructType\EPODSearchDetailType
     */
    public function setFilename(array $filename = array())
    {
        foreach ($filename as $ePODSearchDetailTypeFilenameItem) {
            // validation for constraint: itemType
            if (!is_string($ePODSearchDetailTypeFilenameItem)) {
                throw new \InvalidArgumentException(sprintf('The filename property can only contain items of string, "%s" given', is_object($ePODSearchDetailTypeFilenameItem) ? get_class($ePODSearchDetailTypeFilenameItem) : gettype($ePODSearchDetailTypeFilenameItem)), __LINE__);
            }
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Add item to filename value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\EPODSearchDetailType
     */
    public function addToFilename($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The filename property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->filename[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EPODSearchDetailType
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
