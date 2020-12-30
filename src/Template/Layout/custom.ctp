<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Add Form</title>
<?php echo $this->Html->css('bootstrap.min');?>
<?php echo $this->Html->css('/font-awesome/css/font-awesome');?>
<?php echo $this->Html->css('animate.css');?>
<?php echo $this->Html->css('stylenew.css');?>
<?php echo $this->Html->css('custom.css');?>
<!-- Mainly scripts -->
<?php echo $this->Html->script('jquery-3.1.1.min');?>
<?php echo $this->Html->script('popper.min');?>
<?php echo $this->Html->script('bootstrap');?>           
<!-- jQuery UI -->
<?php echo $this->Html->script('plugins/jquery-ui/jquery-ui.min');?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<link href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script language="javascript">
$(document).ready(function () {
  $("#dob").datepicker({
      maxDate: 0
  });
});
</script>      
</head>
<body>
    <div id="wrapper">        
    <?php
    $controller = $this->request->controller;    	
    $action = $this->request->action;?>        
        <div id="page-wrapper" class="gray-bg">              
            <?= $this->Flash->render();?>
	       <?= $this->fetch('content');?>                         
        </div>
    </div>
</body>
</html>