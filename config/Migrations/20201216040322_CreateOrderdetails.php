<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateOrderdetails extends AbstractMigration
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
        $table = $this->table('orderdetails');
        
        $table->addColumn('order_id', 'integer', ['default'=>0]);
        $table->addColumn('product_id', 'integer', ['default'=>0]);
        
        $table->addColumn('DetailName', 'string', ['default' => null,'limit' => 255,'null' => true]);          
        $table->addColumn('DetailPrice', 'float', ['default' => 0]);
        $table->addColumn('DetailSKU', 'string', ['default' => null,'limit' => 50,'null' => true]);        
        $table->addColumn('DetailQuantity', 'integer', ['default'=>0,'limit' => 11]);        
        
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        
        $table->addColumn('status', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->create();
    }
}
