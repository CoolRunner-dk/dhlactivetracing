<?php

namespace DHLTracking;

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
            'GetConsignmentsByIdentifierPublicRequest' => '\\DHLTracking\\StructType\\GetConsignmentsByIdentifierPublicRequest',
            'GetConsignmentsByIdentifierPublicResponse' => '\\DHLTracking\\StructType\\GetConsignmentsByIdentifierPublicResponse',
            'GetConsignmentByReferencePublicRequest' => '\\DHLTracking\\StructType\\GetConsignmentByReferencePublicRequest',
            'GetConsignmentByReferencePublicResponse' => '\\DHLTracking\\StructType\\GetConsignmentByReferencePublicResponse',
            'GetPackageDetailsPublicRequest' => '\\DHLTracking\\StructType\\GetPackageDetailsPublicRequest',
            'GetPackageDetailsPublicResponse' => '\\DHLTracking\\StructType\\GetPackageDetailsPublicResponse',
            'GetConsignmentsByIdentifierRequest' => '\\DHLTracking\\StructType\\GetConsignmentsByIdentifierRequest',
            'GetConsignmentDetailsPublicRequest' => '\\DHLTracking\\StructType\\GetConsignmentDetailsPublicRequest',
            'GetConsignmentDetailsPublicResponse' => '\\DHLTracking\\StructType\\GetConsignmentDetailsPublicResponse',
            'GetConsignmentsByIdentifierResponse' => '\\DHLTracking\\StructType\\GetConsignmentsByIdentifierResponse',
            'GetConsignmentsByReferenceRequest' => '\\DHLTracking\\StructType\\GetConsignmentsByReferenceRequest',
            'GetConsignmentsByReferenceResponse' => '\\DHLTracking\\StructType\\GetConsignmentsByReferenceResponse',
            'GetConsignmentDetailsRequest' => '\\DHLTracking\\StructType\\GetConsignmentDetailsRequest',
            'GetConsignmentDetailsResponse' => '\\DHLTracking\\StructType\\GetConsignmentDetailsResponse',
            'GetConsignmentsByAccountNumbersRequest' => '\\DHLTracking\\StructType\\GetConsignmentsByAccountNumbersRequest',
            'GetConsignmentsByAccountNumbersResponse' => '\\DHLTracking\\StructType\\GetConsignmentsByAccountNumbersResponse',
            'GetEpodsSyncRequest' => '\\DHLTracking\\StructType\\GetEpodsSyncRequest',
            'GetEpodsSyncResponse' => '\\DHLTracking\\StructType\\GetEpodsSyncResponse',
            'consignmentIdentificationType' => '\\DHLTracking\\StructType\\ConsignmentIdentificationType',
            'consignmentIdentificationPublicType' => '\\DHLTracking\\StructType\\ConsignmentIdentificationPublicType',
            'referenceSearchZipCodesType' => '\\DHLTracking\\StructType\\ReferenceSearchZipCodesType',
            'consignmentPublicType' => '\\DHLTracking\\StructType\\ConsignmentPublicType',
            'consignmentType' => '\\DHLTracking\\StructType\\ConsignmentType',
            'domesticShipmentDataType' => '\\DHLTracking\\StructType\\DomesticShipmentDataType',
            'referenceDataType' => '\\DHLTracking\\StructType\\ReferenceDataType',
            'addressDataType' => '\\DHLTracking\\StructType\\AddressDataType',
            'addressDataPublicType' => '\\DHLTracking\\StructType\\AddressDataPublicType',
            'eventKeyType' => '\\DHLTracking\\StructType\\EventKeyType',
            'eventDataType' => '\\DHLTracking\\StructType\\EventDataType',
            'packageDataType' => '\\DHLTracking\\StructType\\PackageDataType',
            'accountNumberDataType' => '\\DHLTracking\\StructType\\AccountNumberDataType',
            'domesticShipmentDataListType' => '\\DHLTracking\\StructType\\DomesticShipmentDataListType',
            'featuresType' => '\\DHLTracking\\StructType\\FeaturesType',
            'featureType' => '\\DHLTracking\\StructType\\FeatureType',
            'referenceDataListType' => '\\DHLTracking\\StructType\\ReferenceDataListType',
            'eventHistoryRequestType' => '\\DHLTracking\\StructType\\EventHistoryRequestType',
            'eventHistoryType' => '\\DHLTracking\\StructType\\EventHistoryType',
            'packageListType' => '\\DHLTracking\\StructType\\PackageListType',
            'consigmentDetailAddressDataListType' => '\\DHLTracking\\StructType\\ConsigmentDetailAddressDataListType',
            'consigmentDetailAddressDataType' => '\\DHLTracking\\StructType\\ConsigmentDetailAddressDataType',
            'dateRangeType' => '\\DHLTracking\\StructType\\DateRangeType',
            'shipmentDateType' => '\\DHLTracking\\StructType\\ShipmentDateType',
            'ePODSearchType' => '\\DHLTracking\\StructType\\EPODSearchType',
            'ePODSearchDetailType' => '\\DHLTracking\\StructType\\EPODSearchDetailType',
            'resultSizeType' => '\\DHLTracking\\StructType\\ResultSizeType',
        );
    }
}
