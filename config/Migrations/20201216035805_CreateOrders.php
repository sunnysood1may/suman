<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateOrders extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('orders');
        $table->addColumn('user_id', 'integer', ['default'=>0]);
        $table->addColumn('OrderAmount', 'float', ['default' => 0]);
        $table->addColumn('OrderShipName', 'string', ['default' => null,'limit' => 150,'null' => true]);
        $table->addColumn('OrderShipAddress', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('OrderShipAddress2', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('OrderCity', 'string', ['default' => null,'limit' => 50,'null' => true]);
        $table->addColumn('OrderState', 'string', ['default' => null,'limit' => 50,'null' => true]);
        $table->addColumn('OrderZip', 'string', ['default' => null,'limit' => 20,'null' => true]);
        $table->addColumn('OrderCountry', 'string', ['default' => null,'limit' => 20,'null' => true]);
        $table->addColumn('OrderPhone', 'string', ['default' => null,'limit' => 20,'null' => true]);
        $table->addColumn('OrderFax', 'string', ['default' => null,'limit' => 20,'null' => true]);
        
        $table->addColumn('OrderShipping', 'float', ['default' => 0]);
        $table->addColumn('OrderTax', 'float', ['default' => 0]);        
        $table->addColumn('OrderEmail', 'string', ['default' => null,'limit' => 100,'null' => true]);        
        $table->addColumn('OrderShipped', 'integer', ['limit' => MysqlAdapter::INT_TINY]);
        
        $table->addColumn('OrderTrackingNumber', 'string', ['default' => null,'limit' => 80,'null' => true]);   
        
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('status', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
                     
        $table->create();
    }
}
