<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetConsignmentsByIdentifier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentsByIdentifierRequest $parameters
     * @return \StructType\GetConsignmentsByIdentifierResponse|bool
     */
    public function GetConsignmentsByIdentifier(\StructType\GetConsignmentsByIdentifierRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentsByIdentifier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentsByIdentifierPublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentsByIdentifierPublicRequest $parameters
     * @return \StructType\GetConsignmentsByIdentifierPublicResponse|bool
     */
    public function GetConsignmentsByIdentifierPublic(\StructType\GetConsignmentsByIdentifierPublicRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentsByIdentifierPublic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentsByReference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentsByReferenceRequest $parameters
     * @return \StructType\GetConsignmentsByReferenceResponse|bool
     */
    public function GetConsignmentsByReference(\StructType\GetConsignmentsByReferenceRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentsByReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentByReferencePublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentByReferencePublicRequest $parameters
     * @return \StructType\GetConsignmentByReferencePublicResponse|bool
     */
    public function GetConsignmentByReferencePublic(\StructType\GetConsignmentByReferencePublicRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentByReferencePublic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentDetailsRequest $parameters
     * @return \StructType\GetConsignmentDetailsResponse|bool
     */
    public function GetConsignmentDetails(\StructType\GetConsignmentDetailsRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentDetailsPublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentDetailsPublicRequest $parameters
     * @return \StructType\GetConsignmentDetailsPublicResponse|bool
     */
    public function GetConsignmentDetailsPublic(\StructType\GetConsignmentDetailsPublicRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentDetailsPublic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackageDetailsPublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPackageDetailsPublicRequest $parameters
     * @return \StructType\GetPackageDetailsPublicResponse|bool
     */
    public function GetPackageDetailsPublic(\StructType\GetPackageDetailsPublicRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPackageDetailsPublic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConsignmentsByAccountNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetConsignmentsByAccountNumbersRequest $parameters
     * @return \StructType\GetConsignmentsByAccountNumbersResponse|bool
     */
    public function GetConsignmentsByAccountNumbers(\StructType\GetConsignmentsByAccountNumbersRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConsignmentsByAccountNumbers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEpodsSync
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEpodsSyncRequest $parameters
     * @return \StructType\GetEpodsSyncResponse|bool
     */
    public function GetEpodsSync(\StructType\GetEpodsSyncRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetEpodsSync($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetConsignmentByReferencePublicResponse|\StructType\GetConsignmentDetailsPublicResponse|\StructType\GetConsignmentDetailsResponse|\StructType\GetConsignmentsByAccountNumbersResponse|\StructType\GetConsignmentsByIdentifierPublicResponse|\StructType\GetConsignmentsByIdentifierResponse|\StructType\GetConsignmentsByReferenceResponse|\StructType\GetEpodsSyncResponse|\StructType\GetPackageDetailsPublicResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
