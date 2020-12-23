<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateProducts extends AbstractMigration
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
        $table = $this->table('products');
        
        $table->addColumn('ProductSKU', 'string', ['default' => null,'limit' => 55,'null' => true]);  
        $table->addColumn('ProductName', 'string', ['default' => null,'limit' => 255,'null' => true]); 
        $table->addColumn('ProductPrice', 'string', ['default' => null,'limit' => 55,'null' => true]);  
        $table->addColumn('ProductWeight', 'string', ['default' => null,'limit' => 55,'null' => true]); 
        $table->addColumn('ProductCartDesc', 'string', ['default' => null,'limit' => 255,'null' => true]);  
        $table->addColumn('ProductShortDesc', 'string', ['default' => null,'limit' => 255,'null' => true]);
        $table->addColumn('ProductLongDesc', 'text', ['default' => null,'null' => true]);                 
        $table->addColumn('ProductThumb', 'string', ['default' => null,'limit' => 100,'null' => true]);  
        $table->addColumn('ProductImage', 'string', ['default' => null,'limit' => 100,'null' => true]); 
        $table->addColumn('productcategory_id', 'integer', ['default'=>0]);
        $table->addColumn('ProductStock', 'string', ['default' => null,'limit' => 55,'null' => true]); 
        $table->addColumn('ProductLive', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->addColumn('ProductUnlimited', 'integer', ['default'=>1], ['limit' => MysqlAdapter::INT_TINY]);                
        $table->addColumn('ProductLocation', 'string', ['default' => null,'limit' => 255,'null' => true]);                
        $table->addColumn('country_id', 'integer', ['default'=>0]);
        $table->addColumn('state', 'string', ['default' => null,'limit' => 55,'null' => true]);  
        $table->addColumn('city', 'string', ['default' => null,'limit' => 55,'null' => true]); 
        $table->addColumn('address', 'text', ['default' => null,'null' => true]);
        $table->addColumn('zipcode', 'string', ['default' => null,'limit' => 21,'null' => true]); 
        $table->addColumn('phone', 'string', ['default' => null,'limit' => 21,'null' => true]);               
        $table->addColumn('variant_color', 'text', ['default' => null,'null' => true]);
        $table->addColumn('variant_size', 'text', ['default' => null,'null' => true]);        
        $table->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP','null' => false]);
        $table->addColumn('status', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
        $table->create();
    }
}
