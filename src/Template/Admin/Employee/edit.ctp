<div class="wrapper wrapper-content animated fadeInRight">                
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>                            
                        </div>                        
                        
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>    
                            
                                <div class="form-group row">
                                   <label class="col-sm-11 col-form-label">EDIT EMPLOYEE INFORMATION:</label>
                                    <label class="col-sm-1 col-form-label"> 
                                        <u><?php echo $this->Html->link('Back','/admin/employee',['class'=>'']);?></u>
                                    </label> 
                                </div>
                                <div class="hr-line-dashed"></div>                                                                                      
                             
                                 <div class="form-group row"><label class="col-sm-2 col-form-label">Employee Name</label>
                                    <div class="col-sm-10">
                                    <?php echo $this->Form->input("Employee.emp_name",array("class"=>"form-control","label"=>false,"div"=>false,'required'=>true,'value'=>$employee['emp_name']));?> 
                                    </div>
                                </div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                    <?php echo $this->Form->textarea("Employee.address",array("class"=>"form-control required","label"=>false,"div"=>false,'required'=>true,'value'=>$employee['address']));?>
                                    </div>
                                </div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                    <?php echo $this->Form->input("email",array("class"=>"form-control","label"=>false,"div"=>false,'readonly'=>true,'required'=>true,'value'=>$employee['email']));?> 
                                    </div>
                                </div>  
                                
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                    <?php echo $this->Form->input("Employee.phone",array("class"=>"form-control digits","label"=>false,"div"=>false,'value'=>'','required'=>true,'value'=>$employee['phone']));?>
                                    </div>
                                </div>
                                
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                    <?php echo $this->Form->input("Employee.dob",array("id"=>"dob","class"=>"form-control","label"=>false,"div"=>false,'value'=>'','required'=>true,'value'=>$employee['dob']));?>
                                    </div>
                                </div>  
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Employee Image</label>
                                    <div class="col-sm-10">
                                    <input type="file" name="emp_image" />
                                    
                                    <?php echo $this->Html->image($employee['emp_image'],[]);?>
                                    
                                    </div>                                                                        
                                </div>
                                                     
                                <div class="hr-line-dashed"></div>
                                                             
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <?php echo $this->Form->submit('Save',array('id'=>'SubmitButton','class'=>"btn btn-primary btn-sm",'div'=>false));?>
                                    </div>
                                </div>
                            <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>
</div>