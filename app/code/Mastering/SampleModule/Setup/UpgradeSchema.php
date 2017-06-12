<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 6/9/17
 * Time: 9:00 AM
 */

namespace Mastering\SampleModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface{

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface {$}setup
     * @param ModuleContextInterface {$}context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if(version_compare($context->getVersion(),'1.0.1','<')){
            $setup->startSetup();
            $setup->getConnection()->addColumn(
                $setup->getTable('mastering_sample_item'),
                'description',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item Description'
                ]
            );
        }


        $setup->endSetup();
    }
}