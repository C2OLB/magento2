<?php
namespace c2\Magento2OrderModule\Plugin;

class IndexPlugin
{
    public function __construct(
        Magento\Framework\App\Request\DataPersistorInterface $dataPersistor,
    Magento\Framework\App\Action\Context $context
    ){
        $this->dataPersistor = $dataPersistor;
        $this->context = $context;
    }

    public function afterExecute(\Magento\Contact\Controller\Index\Post $subject,$result)
    {
        if (!$this->dataPersistor->get('contact_us')){
            return $this->context->getResultredirectFactory()->create()->setPath('/');
        }
        return $result;
    }
}