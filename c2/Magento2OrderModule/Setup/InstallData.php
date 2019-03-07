<?php
namespace c2\Magento2OrderModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        // TODO: Implement install() method.

        $data = [
            ['order_name' => 'Nike'],
            ['order_name' => 'Puma']
        ];

        foreach ($data as $bind) {
            $setup->getConnection()
            ->insertForce($setup->getTable('order_list'), $bind);
        }
    }

}