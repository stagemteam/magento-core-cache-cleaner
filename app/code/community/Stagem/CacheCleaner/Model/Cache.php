<?php

class Stagem_CacheCleaner_Model_Cache
{
    public function run()
    {
        /** @var Mage_Core_Model_Cache $model */
        $model = Mage::getModel('core/cache');
        /** @var Magento_Db_Adapter_Pdo_Mysql $connection */
        $connection = $model->getDbAdapter();
        $table = Mage::getSingleton('core/resource')->getTableName('core/cache');
        $connection->truncateTable($table);
        $connection->changeTableAutoIncrement($table, 1);
    }
}