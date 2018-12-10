<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://actws.dhl.com/shipmentTrackingWsV4/services/shipmentTrackingWsV4?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://actws.dhl.com/shipmentTrackingWsV4/services/shipmentTrackingWsV4?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetConsignmentsByIdentifier operation/method
 */
if ($get->GetConsignmentsByIdentifier(new \StructType\GetConsignmentsByIdentifierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentsByIdentifierPublic operation/method
 */
if ($get->GetConsignmentsByIdentifierPublic(new \StructType\GetConsignmentsByIdentifierPublicRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentsByReference operation/method
 */
if ($get->GetConsignmentsByReference(new \StructType\GetConsignmentsByReferenceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentByReferencePublic operation/method
 */
if ($get->GetConsignmentByReferencePublic(new \StructType\GetConsignmentByReferencePublicRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentDetails operation/method
 */
if ($get->GetConsignmentDetails(new \StructType\GetConsignmentDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentDetailsPublic operation/method
 */
if ($get->GetConsignmentDetailsPublic(new \StructType\GetConsignmentDetailsPublicRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPackageDetailsPublic operation/method
 */
if ($get->GetPackageDetailsPublic(new \StructType\GetPackageDetailsPublicRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConsignmentsByAccountNumbers operation/method
 */
if ($get->GetConsignmentsByAccountNumbers(new \StructType\GetConsignmentsByAccountNumbersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEpodsSync operation/method
 */
if ($get->GetEpodsSync(new \StructType\GetEpodsSyncRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
