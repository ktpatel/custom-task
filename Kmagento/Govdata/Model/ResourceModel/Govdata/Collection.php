<?php
namespace Kmagento\Govdata\Model\ResourceModel\Govdata;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'govdata_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Kmagento\Govdata\Model\Govdata',
            'Kmagento\Govdata\Model\ResourceModel\Govdata'
        );
    }
}