<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetConsignmentsByIdentifierPublicRequest' => '\\StructType\\GetConsignmentsByIdentifierPublicRequest',
            'GetConsignmentsByIdentifierPublicResponse' => '\\StructType\\GetConsignmentsByIdentifierPublicResponse',
            'GetConsignmentByReferencePublicRequest' => '\\StructType\\GetConsignmentByReferencePublicRequest',
            'GetConsignmentByReferencePublicResponse' => '\\StructType\\GetConsignmentByReferencePublicResponse',
            'GetPackageDetailsPublicRequest' => '\\StructType\\GetPackageDetailsPublicRequest',
            'GetPackageDetailsPublicResponse' => '\\StructType\\GetPackageDetailsPublicResponse',
            'GetConsignmentsByIdentifierRequest' => '\\StructType\\GetConsignmentsByIdentifierRequest',
            'GetConsignmentDetailsPublicRequest' => '\\StructType\\GetConsignmentDetailsPublicRequest',
            'GetConsignmentDetailsPublicResponse' => '\\StructType\\GetConsignmentDetailsPublicResponse',
            'GetConsignmentsByIdentifierResponse' => '\\StructType\\GetConsignmentsByIdentifierResponse',
            'GetConsignmentsByReferenceRequest' => '\\StructType\\GetConsignmentsByReferenceRequest',
            'GetConsignmentsByReferenceResponse' => '\\StructType\\GetConsignmentsByReferenceResponse',
            'GetConsignmentDetailsRequest' => '\\StructType\\GetConsignmentDetailsRequest',
            'GetConsignmentDetailsResponse' => '\\StructType\\GetConsignmentDetailsResponse',
            'GetConsignmentsByAccountNumbersRequest' => '\\StructType\\GetConsignmentsByAccountNumbersRequest',
            'GetConsignmentsByAccountNumbersResponse' => '\\StructType\\GetConsignmentsByAccountNumbersResponse',
            'GetEpodsSyncRequest' => '\\StructType\\GetEpodsSyncRequest',
            'GetEpodsSyncResponse' => '\\StructType\\GetEpodsSyncResponse',
            'consignmentIdentificationType' => '\\StructType\\ConsignmentIdentificationType',
            'consignmentIdentificationPublicType' => '\\StructType\\ConsignmentIdentificationPublicType',
            'referenceSearchZipCodesType' => '\\StructType\\ReferenceSearchZipCodesType',
            'consignmentPublicType' => '\\StructType\\ConsignmentPublicType',
            'consignmentType' => '\\StructType\\ConsignmentType',
            'domesticShipmentDataType' => '\\StructType\\DomesticShipmentDataType',
            'referenceDataType' => '\\StructType\\ReferenceDataType',
            'addressDataType' => '\\StructType\\AddressDataType',
            'addressDataPublicType' => '\\StructType\\AddressDataPublicType',
            'eventKeyType' => '\\StructType\\EventKeyType',
            'eventDataType' => '\\StructType\\EventDataType',
            'packageDataType' => '\\StructType\\PackageDataType',
            'accountNumberDataType' => '\\StructType\\AccountNumberDataType',
            'domesticShipmentDataListType' => '\\StructType\\DomesticShipmentDataListType',
            'featuresType' => '\\StructType\\FeaturesType',
            'featureType' => '\\StructType\\FeatureType',
            'referenceDataListType' => '\\StructType\\ReferenceDataListType',
            'eventHistoryRequestType' => '\\StructType\\EventHistoryRequestType',
            'eventHistoryType' => '\\StructType\\EventHistoryType',
            'packageListType' => '\\StructType\\PackageListType',
            'consigmentDetailAddressDataListType' => '\\StructType\\ConsigmentDetailAddressDataListType',
            'consigmentDetailAddressDataType' => '\\StructType\\ConsigmentDetailAddressDataType',
            'dateRangeType' => '\\StructType\\DateRangeType',
            'shipmentDateType' => '\\StructType\\ShipmentDateType',
            'ePODSearchType' => '\\StructType\\EPODSearchType',
            'ePODSearchDetailType' => '\\StructType\\EPODSearchDetailType',
            'resultSizeType' => '\\StructType\\ResultSizeType',
        );
    }
}
