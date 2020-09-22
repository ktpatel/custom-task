<?php
namespace Kmagento\Govdata\Model\ResourceModel;

class Govdata extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('pincode_data', 'govdata_id');   //here "pincode_data" is table name and "govdata_id" is the primary key of custom table
    }
}