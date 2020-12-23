<?php 	      	
$urlArray = array(   
    $emp_name_field => $emp_name_val
);
$this->Paginator->options(array('url'=>$urlArray));
    if( !empty($_REQUEST['direction']) && $_REQUEST['direction']=="asc" ){
      $direction = "desc";           
    }else{
      $direction = "asc";
    } 
?>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">  
    <form method="get" id="search">     
      <div class="ibox-content m-b-sm border-bottom">      
          <div class="form-group row">                         
             <div class="col-lg-10">
                  <h2>Employee List</h2>
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <?php echo $this->Html->link('Employee Listing','/admin/employee');?>
                      </li>
                      <li class="breadcrumb-item active">
                          <strong>Employee list</strong>
                      </li>
                  </ol>
              </div>            
              <label class="col-sm-2 col-form-label"> 
                  <h2><?php echo $this->Html->link("Add Employee",array("controller"=>"employee","action"=>"add"),array("class"=>""),null,false);?></h2>
              </label> 
          </div>
          <div class="hr-line-dashed"></div> 
                
          <div class="row">
              <div class="col-sm-4">
                  <div class="form-group">
                      <label class="col-form-label" for="emp_name">Employee Name</label>
                      <input type="text" name="emp_name" autocomplete="off" placeholder="Product Name" class="form-control typeahead_3" <?php if(!empty($_GET['emp_name'])){?>value="<?php echo trim($_GET['emp_name']);?>"<?php }?> />                                        
                  </div>
              </div>              
              <div class="col-sm-3">
                  <div class="form-group row">
                      <div class="col-sm-4 col-sm-offset-2">
                          <button class="btn btn-primary btn-sm" type="submit">Search</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                        <tr>
                            <th data-toggle="true"><?php echo $this->Paginator->sort('Employees.id','Employee Id',['direction'=>$direction]);?></th>	
                            <th data-toggle="true"><?php echo $this->Paginator->sort('Employees.emp_name','Employee Name',['direction'=>$direction]);?></th>
                            <th data-hide="phone"><?php echo $this->Paginator->sort('Employees.address','Address',['direction'=>$direction]);?></th>
                            <th data-hide="all"><?php echo $this->Paginator->sort('Employees.email','Email Address',['direction'=>$direction]);?></th>                         
                            <th data-hide="phone"><?php echo $this->Paginator->sort('Employees.phone','Phone',['direction'=>$direction]);?></th>
                            <th data-hide="dob"><?php echo $this->Paginator->sort('Employees.dob','Date of Birth',['direction'=>$direction]);?></th>
                            <th data-hide="phone"><?php echo $this->Paginator->sort('Employees.status','Status',['direction'=>$direction]);?></th>
                            <th class="text-right" data-sort-ignore="true">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $k=>$v){?> 
                        <tr>
                            <td><?php echo $v['id'];?></td>
                            <td><?php echo $v['emp_name'];?></td>
                            <td><?php echo $v['address'];?></td>
                            <td><?php echo $v['email'];?></td>
                            <td><?php echo $v['phone'];?></td>
                            <td><?php echo $v['dob'];?></td>                                                       
                            <td><?php if($v['status']==1){?>
                      		        <span class="label label-primary">Enable</span>
                      		    <?php } else {?>                                 
                                    <span class="label label-danger">Disabled</span>
                      		    <?php }?>
                            </td>
                            <td class="text-right">
                                <div class="btn-group">                                                  
                                    <?php echo $this->Html->link("Edit",array("controller"=>"employee","action"=>"edit",$v['id']),array('escape'=>false,'title'=>'Employee Edit','class'=>'btn-white btn btn-xs'));?> 
                                    
                                    <?php echo $this->Html->link("Delete",array("controller"=>"employee","action"=>"delete",$v['id']),array('escape'=>false,'title'=>'Employee Edit','class'=>'btn-white btn btn-xs','onclick'=>"return confirm('Are you sure you want to delete?')" ));?> 
                                                                       
                                </div>
                            </td>
                        </tr>
                        <?php } ?>                                                                                     
                        </tbody>
                        <tfoot>
                                                
                        <tr>
                            <td colspan="7">
                                <div class="pagination" style="text-align:center">
                                <?= $this->Paginator->prev('<< Previous') ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next('Next >>') ?>
                                </div>
                                <div style="width:50%; height:18px;float:left;"></div>
                                <div style="float:right;background-color:#F0F0EE;border:1px solid grey;">
                                <a><?= $this->Paginator->counter([
                                    'format' => 'Page {{page}} of {{pages}}, showing {{current}} records out of
                                             {{count}} total, starting on record {{start}}, ending on {{end}}'
                                ]) ?></a>
                                </div>
                            </td>
                        </tr>                        
                        
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>      