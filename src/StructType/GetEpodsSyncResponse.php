<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEpodsSyncResponse StructType
 * @subpackage Structs
 */
class GetEpodsSyncResponse extends AbstractStructBase
{
    /**
     * The ePodSearch
     * @var \StructType\EPODSearchType
     */
    public $ePodSearch;
    /**
     * Constructor method for GetEpodsSyncResponse
     * @uses GetEpodsSyncResponse::setEPodSearch()
     * @param \StructType\EPODSearchType $ePodSearch
     */
    public function __construct(\StructType\EPODSearchType $ePodSearch = null)
    {
        $this
            ->setEPodSearch($ePodSearch);
    }
    /**
     * Get ePodSearch value
     * @return \StructType\EPODSearchType|null
     */
    public function getEPodSearch()
    {
        return $this->ePodSearch;
    }
    /**
     * Set ePodSearch value
     * @param \StructType\EPODSearchType $ePodSearch
     * @return \StructType\GetEpodsSyncResponse
     */
    public function setEPodSearch(\StructType\EPODSearchType $ePodSearch = null)
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
     * @return \StructType\GetEpodsSyncResponse
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
