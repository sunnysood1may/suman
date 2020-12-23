<?php
use Migrations\AbstractMigration;

class CreateOptiongroups extends AbstractMigration
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
        $table = $this->table('optiongroups');
        $table->addColumn('OptionGroupName', 'string', ['default' => null,'limit' => 55,'null' => true,]);
        $table->create();
    }
}
