<?php
namespace c2\Magento2OrderModule\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement install() method.

        $table = $setup->getConnection()
            ->newTable($setup->getTable('order_list'))
            ->addColumn(
                'order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' =>true],
                'Order_ID'

            )
            ->addColumn(
                'added_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' =>false, 'default' => ''],
                'Added At'
            )
            ->addColumn(
                'order_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                225,
                ['nullable' => false, 'default' => ''],
                'Order Name'

            )->setComment("Order List table");
        $setup->getConnection()->createTable($table);
    }
}
