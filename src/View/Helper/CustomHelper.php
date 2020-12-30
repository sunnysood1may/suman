<?php
namespace App\View\Helper;
use Cake\ORM\TableRegistry;
use Cake\View\Helper;

class CustomHelper extends Helper {

    function companyList(){       
        $iTable = TableRegistry::get('Companies');
        $i = $iTable->find('list',['keyField'=>'id','valueField'=>'company_name'])
        ->order(['Companies.company_name'=>'asc'])->toArray();
        return $i;      
    }

}
?>