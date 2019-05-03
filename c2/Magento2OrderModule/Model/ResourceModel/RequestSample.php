<?php
namespace c2\Magento2OrderModule\Model\ResourceModel;

class RequestSample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init('order_list', 'order_id');
    }
}
