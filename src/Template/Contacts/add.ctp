<div class="wrapper wrapper-content animated fadeInRight">                
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">                                       
                <div class="ibox-content">
                    <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>                       
                        <div class="form-group row">
                           <label class="col-sm-11 col-form-label">ADD CONTACT:</label>
                        </div>
                        <div class="hr-line-dashed"></div>                                                                                                                                                            
                        
                        <div class="form-group row"><label class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->input("Contacts.first_name",array("class"=>"form-control","label"=>false,"div"=>false,'required'=>true));?> 
                            </div>
                        </div>                        
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->input("Contacts.last_name",array("class"=>"form-control","label"=>false,"div"=>false,'required'=>true));?> 
                            </div>
                        </div>                        
                         <div class="form-group  row"><label class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->number("Contacts.phone_number",array('min='=>"0","class"=>"form-control digits","label"=>false,"div"=>false,'value'=>'','required'=>true));?>
                            </div>
                        </div>                        
                         <div class="form-group row"><label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->input("Contacts.address",array("class"=>"form-control","label"=>false,"div"=>false,'required'=>true));?> 
                            </div>
                        </div>
                        
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Company</label>
                            <div class="col-sm-10">
                            <?php $companyList= $this->Custom->companyList();
                            echo $this->Form->input("Contacts.company_id",array("div"=>false,'empty'=>'Please Select',"label"=>false,"class"=>"form-control","options"=>$companyList,'required'=>true),false);?>   
                            </div>
                        </div>                                                
                        
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Notes</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->input("Contacts.notes",array("class"=>"form-control","label"=>false,"div"=>false,'required'=>true));?> 
                            </div>
                        </div>                                                                          
                         <div class="form-group row"><label class="col-sm-2 col-form-label">Add Notes</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->textarea("Contacts.add_notes",array("class"=>"form-control required","label"=>false,"div"=>false,'value'=>'','required'=>true));?>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Internal Notes</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->textarea("Contacts.internal_notes",array("class"=>"form-control required","label"=>false,"div"=>false,'value'=>'','required'=>true));?>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Comments</label>
                            <div class="col-sm-10">
                            <?php echo $this->Form->textarea("Contacts.comments",array("class"=>"form-control required","label"=>false,"div"=>false,'value'=>'','required'=>true));?>
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