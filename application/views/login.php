<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
<html lang="en">
    <meta charset ='utf8'> 
<head>
    
      <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/reset.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/template.css'); ?>/public/css/template.css">
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/template.js"></script>
  
       
        
     <style> 
     label {display:block; }
     .error{color:red;}
     p {display:block;}
     h3{margin-right:0px;}
     body {
    background-color: #f7ecb5 ;
   
    
  
    
} 
    </style>
    
   
</head>
<body>
    

<div class="container ,btn-block" style="margin-left:500px;">

<p>
<?php echo form_open('shop/dologin'); ?>
<?php echo form_label('Email Address','email_address'); ?>
<?php echo form_input('email_address','','email_address '); ?>
   </p>  
  <p>
<?php echo form_label('Password ','Password'); ?>
<?php echo form_input('password','','password'); ?>
   </p> 
   <p>
   <?php echo form_submit('submit','login');?>
   </p>
 <?php echo form_close(); ?>

   <div class='error'> <?php echo validation_errors();


   ?>




   </div> 

  </div>

</body>
</html>