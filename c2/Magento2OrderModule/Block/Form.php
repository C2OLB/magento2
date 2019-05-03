<?php

namespace c2\Magento2OrderModule\Block;

use Magento\Framework\Data\Form\FormKey;

class Form extends \Magento\Framework\View\Element\Template
{
    protected $formKey;

    /**
     * Form constructor.
     * @param FormKey $formKey
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        FormKey $formKey,
        \Magento\Backend\Block\Template\Context $context,
                                array $data = []
    ) {
        $this->formKey = $formKey;
        parent::__construct($context, $data);
    }

    public function getFormKey()
    {
        return $this->formKey;
    }
}
