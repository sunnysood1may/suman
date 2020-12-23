<?php
use Migrations\AbstractMigration;

class CreateOptions extends AbstractMigration
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
        $table = $this->table('options');
        $table->addColumn('OptionGroupID', 'integer', ['default'=>0]);
        $table->addColumn('OptionName', 'string', ['default' => null,'limit' => 55,'null' => true,]);
        $table->create();
    }
}
