<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateProductcategories extends AbstractMigration
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
        $table = $this->table('productcategories');
        $table->addColumn('CategoryName', 'string', ['default' => null,'limit' => 50,'null' => true]);    
        $table->create();
    }
}
