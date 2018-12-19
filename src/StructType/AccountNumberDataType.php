<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountNumberDataType StructType
 * @subpackage Structs
 */
class AccountNumberDataType extends AbstractStructBase
{
    /**
     * The systemCode
     * @var string
     */
    public $systemCode;
    /**
     * The countryCode
     * @var string
     */
    public $countryCode;
    /**
     * The accountNumber
     * @var string
     */
    public $accountNumber;
    /**
     * The accountType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $accountType;
    /**
     * Constructor method for accountNumberDataType
     * @uses AccountNumberDataType::setSystemCode()
     * @uses AccountNumberDataType::setCountryCode()
     * @uses AccountNumberDataType::setAccountNumber()
     * @uses AccountNumberDataType::setAccountType()
     * @param string $systemCode
     * @param string $countryCode
     * @param string $accountNumber
     * @param string[] $accountType
     */
    public function __construct($systemCode = null, $countryCode = null, $accountNumber = null, array $accountType = array())
    {
        $this
            ->setSystemCode($systemCode)
            ->setCountryCode($countryCode)
            ->setAccountNumber($accountNumber)
            ->setAccountType($accountType);
    }
    /**
     * Get systemCode value
     * @return string|null
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }
    /**
     * Set systemCode value
     * @param string $systemCode
     * @return \DHLTracking\StructType\AccountNumberDataType
     */
    public function setSystemCode($systemCode = null)
    {
        // validation for constraint: string
        if (!is_null($systemCode) && !is_string($systemCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($systemCode)), __LINE__);
        }
        $this->systemCode = $systemCode;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \DHLTracking\StructType\AccountNumberDataType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \DHLTracking\StructType\AccountNumberDataType
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get accountType value
     * @return string[]|null
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @uses \DHLTracking\EnumType\AccountType::valueIsValid()
     * @uses \DHLTracking\EnumType\AccountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $accountType
     * @return \DHLTracking\StructType\AccountNumberDataType
     */
    public function setAccountType(array $accountType = array())
    {
        $invalidValues = array();
        foreach ($accountType as $accountNumberDataTypeAccountTypeItem) {
            if (!\DHLTracking\EnumType\AccountType::valueIsValid($accountNumberDataTypeAccountTypeItem)) {
                $invalidValues[] = var_export($accountNumberDataTypeAccountTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \DHLTracking\EnumType\AccountType::getValidValues())), __LINE__);
        }
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Add item to accountType value
     * @uses \DHLTracking\EnumType\AccountType::valueIsValid()
     * @uses \DHLTracking\EnumType\AccountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \DHLTracking\StructType\AccountNumberDataType
     */
    public function addToAccountType($item)
    {
        // validation for constraint: enumeration
        if (!\DHLTracking\EnumType\AccountType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \DHLTracking\EnumType\AccountType::getValidValues())), __LINE__);
        }
        $this->accountType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\AccountNumberDataType
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
