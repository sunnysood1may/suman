<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateCountries extends AbstractMigration
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
        $table = $this->table('countries');
        $table->addColumn('capital', 'string', ['default' => null,'limit' => 255,'null' => true]);  
        $table->addColumn('citizenship', 'string', ['default' => null,'limit' => 255,'null' => true]); 
        
        $table->addColumn('country_code','uuid', ['default' => null,'limit' => 3,'null' => true]); 
        
        $table->addColumn('currency', 'string', ['default' => null,'limit' => 255,'null' => true]);  
        $table->addColumn('currency_code', 'string', ['default' => null,'limit' => 255,'null' => true]);  
        $table->addColumn('currency_sub_unit', 'string', ['default' => null,'limit' => 255,'null' => true]);  
        $table->addColumn('currency_symbol','string', ['default' => null,'limit' => 3,'null' => true]);        
        $table->addColumn('currency_decimals', 'integer', ['default' => null,'limit' => 11,'null' => true]); 
        
        $table->addColumn('full_name', 'string', ['default' => null,'limit' => 255,'null' => true]); 
        $table->addColumn('iso_3166_2','uuid', ['default' => null,'limit' => 2,'null' => true]); 
        $table->addColumn('iso_3166_3','uuid', ['default' => null,'limit' => 3,'null' => true]); 
         
        $table->addColumn('name', 'string', ['default' => null,'limit' => 255,'null' => true]); 
        
        $table->addColumn('region_code','uuid', ['default' => null,'limit' => 2,'null' => true]); 
        $table->addColumn('sub_region_code','uuid', ['default' => null,'limit' => 3,'null' => true]);  
        
        $table->addColumn('eea', 'integer', ['limit' => MysqlAdapter::INT_TINY]);
        
        $table->addColumn('calling_code', 'string', ['default' => null,'limit' => 3,'null' => true]);  
        $table->addColumn('flag', 'string', ['default' => null,'limit' => 6,'null' => true]);  
        
        $table->addColumn('enable', 'integer', ['limit' => MysqlAdapter::INT_TINY]);
        
        $table->create();
    }
}
