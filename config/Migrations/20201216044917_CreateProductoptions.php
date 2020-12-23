<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateProductoptions extends AbstractMigration
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
        $table = $this->table('productoptions');
        
        $table->addColumn('product_id','integer',['default'=>0]);
        $table->addColumn('option_id','integer',['default'=>0]);
        $table->addColumn('optiongroup_id','integer',['default'=>0]);
        
        $table->addColumn('OptionPriceIncrement','float',['default'=>0]);
        
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        
        $table->addColumn('status', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->create();
    }
}
