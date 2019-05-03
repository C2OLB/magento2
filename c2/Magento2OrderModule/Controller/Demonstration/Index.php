<?php

namespace c2\Magento2OrderModule\Controller\Demonstration;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_objectManager;

    public function __construct(Context $context, \Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $post = $this->getRequest()->getParams();
        $model = $this->_objectManager->create('c2\Magento2OrderModule\Model\RequestSample');
        $model->setData('order_name', $post['order_name']);
        $model->save();

        $this->messageManager->addSuccessMessage("DONE");
    }
}
