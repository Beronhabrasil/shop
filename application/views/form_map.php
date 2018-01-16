
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
<?php echo form_open('shop/localization'); ?>

   
  <p>
<?php echo form_label('Endereço ','Endereço'); ?>
<?php echo form_input('end','','end'); ?>
   </p> 
   <p>
   <?php echo form_submit('submit','calcular');?>
   </p>
 <?php echo form_close(); ?>
   
   <div> Por favor colocar endereço como exemplo  Rua Quinze de Novembro - Parque Jatibaia (Sousas), Campinas - SP</div>

   <div class='error'> <?php echo validation_errors();


   ?>




   </div> 

  </div>

    <div class ="row-fluid">   
    
  
 <frameset>
  <frame src="https://web.whatsapp.com/">
 
</frameset> 

    
    </div>
    
    
</body>
</html>