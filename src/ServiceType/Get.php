<?php

namespace DHLTracking\ServiceType;

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
     * @param \DHLTracking\StructType\GetConsignmentsByIdentifierRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierResponse|bool
     */
    public function GetConsignmentsByIdentifier(\DHLTracking\StructType\GetConsignmentsByIdentifierRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentsByIdentifierPublicRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse|bool
     */
    public function GetConsignmentsByIdentifierPublic(\DHLTracking\StructType\GetConsignmentsByIdentifierPublicRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentsByReferenceRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentsByReferenceResponse|bool
     */
    public function GetConsignmentsByReference(\DHLTracking\StructType\GetConsignmentsByReferenceRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentByReferencePublicRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse|bool
     */
    public function GetConsignmentByReferencePublic(\DHLTracking\StructType\GetConsignmentByReferencePublicRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentDetailsRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentDetailsResponse|bool
     */
    public function GetConsignmentDetails(\DHLTracking\StructType\GetConsignmentDetailsRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentDetailsPublicRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentDetailsPublicResponse|bool
     */
    public function GetConsignmentDetailsPublic(\DHLTracking\StructType\GetConsignmentDetailsPublicRequest $parameters)
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
     * @param \DHLTracking\StructType\GetPackageDetailsPublicRequest $parameters
     * @return \DHLTracking\StructType\GetPackageDetailsPublicResponse|bool
     */
    public function GetPackageDetailsPublic(\DHLTracking\StructType\GetPackageDetailsPublicRequest $parameters)
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
     * @param \DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest $parameters
     * @return \DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse|bool
     */
    public function GetConsignmentsByAccountNumbers(\DHLTracking\StructType\GetConsignmentsByAccountNumbersRequest $parameters)
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
     * @param \DHLTracking\StructType\GetEpodsSyncRequest $parameters
     * @return \DHLTracking\StructType\GetEpodsSyncResponse|bool
     */
    public function GetEpodsSync(\DHLTracking\StructType\GetEpodsSyncRequest $parameters)
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
     * @return \DHLTracking\StructType\GetConsignmentByReferencePublicResponse|\DHLTracking\StructType\GetConsignmentDetailsPublicResponse|\DHLTracking\StructType\GetConsignmentDetailsResponse|\DHLTracking\StructType\GetConsignmentsByAccountNumbersResponse|\DHLTracking\StructType\GetConsignmentsByIdentifierPublicResponse|\DHLTracking\StructType\GetConsignmentsByIdentifierResponse|\DHLTracking\StructType\GetConsignmentsByReferenceResponse|\DHLTracking\StructType\GetEpodsSyncResponse|\DHLTracking\StructType\GetPackageDetailsPublicResponse
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
