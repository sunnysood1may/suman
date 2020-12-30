<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ContactsTable extends Table
{
	  
    public function initialize(array $config)
    {        
        $this->belongsTo('Companies',
            ['className'=>'Companies','foreignKey'=>'company_id']
        );                                                         
    }     

}