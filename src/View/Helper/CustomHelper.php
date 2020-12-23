<?php
namespace App\View\Helper;
use Cake\ORM\TableRegistry;
use Cake\View\Helper;

class CustomHelper extends Helper {


function categoryList(){       
    $iTable = TableRegistry::get('Productcategories');
    $i = $iTable->find('list',['keyField'=>'id','valueField'=>'CategoryName'])
    ->order(['Productcategories.CategoryName'=>'asc'])->toArray();
    return $i;      
}


function countryList(){       
    $iTable = TableRegistry::get('Countries');
    $i = $iTable->find('list',['keyField'=>'id','valueField'=>'name'])
    ->order(['Countries.name'=>'asc'])->toArray();
    return $i;      
}


function variantList(){          
    $iTable = TableRegistry::get('Optiongroups');  
    $i = $iTable->find('list',['keyField'=>'id','valueField'=>'OptionGroupName'])
    ->order(['Optiongroups.OptionGroupName'=>'asc'])->toArray();
    return $i;      
}


function sizeList(){          
    $iTable = TableRegistry::get('Options');
    $conditions = array('Options.OptionGroupID'=>2);   
    $i = $iTable->find('list',['keyField'=>'id','valueField'=>'OptionName'])->where($conditions)
    ->order(['Options.OptionName'=>'asc'])->toArray();
    return $i;      
}


function colorList(){          
    $iTable = TableRegistry::get('Options');
    $conditions = array('Options.OptionGroupID'=>1);   
    $i = $iTable->find('list',['keyField'=>'id','valueField'=>'OptionName'])->where($conditions)
    ->order(['Options.OptionName'=>'asc'])->toArray();
    return $i;      
}


function getCond(){    
    $ma = array(  
    'Excellent'=> "Excellent",
    'Fair'=>"Fair",  
    'Good'=>"Good", 
    'Very Good'=>"Very Good",  
    'Poor'=>"Poor",  
    'Restoration'=>"Restoration");
     return $ma;
}


function getExterior(){    
    $ma = array(     
    'Beige'=>"Beige",
    'Black'=>"Black",
    'Blue'=>"Blue",
    'Brown'=>"Brown",
    'Burgundy'=>"Burgundy",
    'Charcoal'=>"Charcoal",
    'Custom'=>"Custom",
    'Gold'=>"Gold",
    'Gray'=>"Gray",
    'Green'=>" Green",
    'Multi'=>"Multi",
    'Off White'=>"Off White",
    'Orange'=>"Orange",
    'Pink'=>"Pink",
    'Purple'=>"Purple",
    'Red'=>"Red",
    'Silver'=>"Silver",
    'Tan'=>"Tan",
    'Turquoise'=>"Turquoise",
    'White'=>"White",
    'Yellow'=>"Yellow",
    'Bronze'=>"Bronze");
     return $ma;
} 


   
}

?>