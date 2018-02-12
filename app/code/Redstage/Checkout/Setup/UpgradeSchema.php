<?php
namespace Redstage\Checkout\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $quoteTable = 'quote';
        $orderTable = 'sales_order';

        //Quote  table
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($quoteTable),
                'security_number',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'comment' =>'Security Number'
                ]
            );
        //Order  table
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'security_number',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'comment' =>'Security Number'

                ]
            );

        $setup->endSetup();
    }
}