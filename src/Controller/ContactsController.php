<?php
namespace App\Controller;
use App\Controller\AppController;

class ContactsController extends AppController
{


public function index()
{
    $this->viewBuilder()->layout('');     
    $query = $this->Contacts->find()
    ->select(['id','first_name','last_name','phone_number'])->order(['id'=>'ASC']);
    echo json_encode($query); exit;
}


public function indexExt()
{
    $this->viewBuilder()->layout('');     
    $query = $this->Contacts->find()->contain(['Companies'])
    ->select(['id','first_name','last_name','phone_number','Companies.id','Companies.company_name','Companies.address'])
    ->order(['Contacts.id'=>'ASC']);    
    echo json_encode($query); exit;
}


public function add()
{
    $this->viewBuilder()->layout('custom'); 
    if(!empty ( $this->request->getData() ) ){           
        $contact = $this->Contacts->newEntity($this->request->getData());    
        if ($this->Contacts->save($contact)) {  
            $this->Flash->success(__('Contact Saved Successfully'));
            return $this->redirect("/contacts/add"); 
        } else {
            $this->Flash->error(__('Error In Saving'));
        }
    }    
}
    
    

}