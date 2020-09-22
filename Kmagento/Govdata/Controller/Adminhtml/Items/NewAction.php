<?php
namespace Kmagento\Govdata\Controller\Adminhtml\Items;

class NewAction extends \Kmagento\Govdata\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
