<?php

namespace DHLTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEpodsSyncResponse StructType
 * @subpackage Structs
 */
class GetEpodsSyncResponse extends AbstractStructBase
{
    /**
     * The ePodSearch
     * @var \DHLTracking\StructType\EPODSearchType
     */
    public $ePodSearch;
    /**
     * Constructor method for GetEpodsSyncResponse
     * @uses GetEpodsSyncResponse::setEPodSearch()
     * @param \DHLTracking\StructType\EPODSearchType $ePodSearch
     */
    public function __construct(\DHLTracking\StructType\EPODSearchType $ePodSearch = null)
    {
        $this
            ->setEPodSearch($ePodSearch);
    }
    /**
     * Get ePodSearch value
     * @return \DHLTracking\StructType\EPODSearchType|null
     */
    public function getEPodSearch()
    {
        return $this->ePodSearch;
    }
    /**
     * Set ePodSearch value
     * @param \DHLTracking\StructType\EPODSearchType $ePodSearch
     * @return \DHLTracking\StructType\GetEpodsSyncResponse
     */
    public function setEPodSearch(\DHLTracking\StructType\EPODSearchType $ePodSearch = null)
    {
        $this->ePodSearch = $ePodSearch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLTracking\StructType\GetEpodsSyncResponse
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
