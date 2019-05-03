<?php

namespace c2\Magento2OrderModule\Model\ResourceModel\RequestSample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(
            '\c2\Magento2OrderModule\Model\RequestSample',
            '\c2\Magento2OrderModule\Model\ResourceModel\RequestSample'
        );
    }
}
