<?php

namespace c2\Magento2OrderModule\Model;

class RequestSample extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('c2\Magento2OrderModule\Model\ResourceModel\RequestSample');
        // $this->_init(RequestSampleResource::class);
    }
}
