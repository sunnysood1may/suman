<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter; 

class CreateImages extends AbstractMigration
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
        $table = $this->table('images');
        
        $table->addColumn('product_id', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->addColumn('category_id', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->addColumn('fullname', 'string', ['default' => null,'limit' => 255,'null' => true,]);
        
        $table->addColumn('display_order', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);        
        
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('status', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        
        $table->create();
    }
}
