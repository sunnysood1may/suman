<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;   

class CreateUsers extends AbstractMigration
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
   
        $table = $this->table('users');   
        
        $table->addColumn('type', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
                   
        $table->addColumn('UserEmail', 'string', ['default' => null,'limit' => 255,'null' => true,]);
        $table->addColumn('UserPassword', 'string', ['default' => null,'limit' => 255,'null' => true,]);
        $table->addColumn('UserFirstName', 'string', ['default' => null,'limit' => 100,'null' => true,]);
        $table->addColumn('UserLastName', 'string', ['default' => null,'limit' => 100,'null' => true,]);
        $table->addColumn('UserCity', 'string', ['default' => null,'limit' => 90,'null' => true,]);
        $table->addColumn('UserState', 'string', ['default' => null,'limit' => 20,'null' => true,]);
        $table->addColumn('UserZip', 'string', ['default' => null,'limit' => 12,'null' => true,]);      
         
        $table->addColumn('UserEmailVerified', 'integer', ['default'=>0], ['limit' => MysqlAdapter::INT_TINY]);
              
        $table->addColumn('UserVerificationCode', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('UserIP', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('UserPhone', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('UserFax', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('UserCountry', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('UserAddress', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('UserAddress2', 'text', [
            'default' => null,
            'null' => true,
        ]);
        
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
