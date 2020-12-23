<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ProductsTable extends Table
{
	  
    public function initialize(array $config)
    {        

        $this->belongsTo('Productcategories',[
        'className'=>'Productcategories',
        'foreignKey'=>'productcategory_id'
        ]);
        
        
        $this->hasMany('Images',[
        'className'=>'Images',
        'foreignKey'=>'product_id'
        ]);
        
                                 
    }    
 

}