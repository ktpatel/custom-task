<?php
namespace Kmagento\Govdata\Model;

use Magento\Framework\Model\AbstractModel;

class Govdata extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Kmagento\Govdata\Model\ResourceModel\Govdata');
    }
}