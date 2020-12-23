<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

class EmployeeController extends AppController
{


public function index()
{
    $this->viewBuilder()->layout('admin');
    $pageTitle = "Employee Index";        
         
    $empTable = TableRegistry::get('Employees');      
    $conditions=array(); 
    
    $emp_name_field = "";  $emp_name_val = ""; 
    if(!empty($_REQUEST['emp_name'])){
        $emp_name_field = "emp_name";
        $emp_name_val = trim($_REQUEST['emp_name']);                 
        $conditions = array_merge($conditions,array("Employees.emp_name LIKE"=>"%$emp_name_val%"));                            
    }   
           
    $this->set(compact('emp_name_field','emp_name_val','pageTitle'));
    if(!empty($_REQUEST['sort']) && !empty($_REQUEST['direction'])){
        $order = $_REQUEST['sort'].' '.$_REQUEST['direction'];           

    } else {
        $order = 'Employees.id desc';
    }  
    $result = $empTable->find()->order([$order])->where($conditions)->limit(10);             
    $data = $this->paginate($result);       //echo "<pre>"; print_r($data); die;   
    $this->set('data',$data);    
} 


public function add()
{
    $this->viewBuilder()->layout('admin');  
    $pageTitle = "Employee Add"; 
    $this->set(compact('pageTitle'));
          
    $conn = ConnectionManager::get('default');    
    $employeeTable = TableRegistry::get('Employees');         
    $employee = $employeeTable->newEntity();    
    if($this->request->is(['post','put'])){      
        $email = trim($this->request->data['Employee']['email']);                                 
        $count = $employeeTable->find()->where(array('Employees.email'=>$email))->count();                        
        if($count >0){
            $this->Flash->success(__('Email already exist.'));
        }  
        else {             
            if(!empty($this->request->data['emp_image'])){
                $file = $this->request->data['emp_image']; 
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
                $arr_ext = array('jpg', 'png' ); 
                if(in_array($ext, $arr_ext)){
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' .DS. $file['name']);
                    $employee->emp_image = $file['name'];                   
                }
            }         
            foreach($this->request->data['Employee'] as $k=>$v){
                $employee->$k = trim($v);
            }                                   
            $result = $employeeTable->save($employee);       
            $employeeID = $result->id;            
            if($employeeID){    
                $this->Flash->success(__('Employee added successfully'));
                return $this->redirect("/admin/employee");   
            } else {
                $this->Flash->error(__('Error in saving'));
            } 
        }                             
    }    
}


public function edit($id=null)
{
    $this->viewBuilder()->layout('admin');  
    $pageTitle = "Employee Update"; 
    $this->set(compact('pageTitle'));
               
    $employeeTable = TableRegistry::get('Employees'); 
    $employee = $employeeTable->newEntity();    
    $conditions = array('Employees.id'=>$id);                                  
    $employee = $employeeTable->find()->where($conditions)->first();                        
    if(empty($id) || !$employee){       
        return $this->redirect(array('controller'=>'employee','action'=>'index'));
    }          
    $this->set('employee',$employee); 
    if($this->request->is(['post','put'])){   
        if(!empty($this->request->data['emp_image'])){
            $file = $this->request->data['emp_image']; 
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
            $arr_ext = array('jpg', 'png' ); 
            if(in_array($ext, $arr_ext)){
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' .DS. $file['name']);
                $employee->emp_image = $file['name'];                   
            }
        } 
        foreach($this->request->data['Employee'] as $k=>$v){
            $employee->$k = trim($v);
        }                   
        if($employeeTable->save($employee)){
            $this->Flash->success(__('Employee added successfully'));
            return $this->redirect("/admin/employee/edit/$id");   
        } else {
            $this->Flash->error(__('Error in saving'));
        }                         
    }       
} 


public function delete($id=null)
{
    $this->viewBuilder()->layout('admin');  
               
    $employeeTable = TableRegistry::get('Employees'); 
    $employee = $employeeTable->newEntity();    
    $conditions = array('Employees.id'=>$id);                                  
    $employee = $employeeTable->find()->where($conditions)->first();                        
    if(empty($id) || !$employee){       
        return $this->redirect(array('controller'=>'employee','action'=>'index'));
    }    
    $result = $employeeTable->delete($employee);      
    $this->Flash->success(__('Employee deleted successfully'));
    return $this->redirect(array('controller'=>'employee','action'=>'index'));       
} 



}