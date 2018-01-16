<!DOCTYPE html>
<html>
    <head>
        <meta charset ='utf8'> 
        <title>Loja Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/reset.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap-responsive.css">
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/template.js"></script>
    </head>
     <body>
         
         
         
         
         
 <div style="background-color: yellowgreen">
  <ul class="nav nav-tabs" role="tablist">
    
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <bold>  Categorias</bold> <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
     
  <li class="active"> <a href="http://localhost/negocio/shop/loadform "onclick="window.open(this.href, 'child', 'scrollbars,width=900,height=500');
     return false">Login</a>  
  </li>
 <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/1"> Pizza </a></li>
  <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/2">Spaguetti   </a></li>
     <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/3">Salgados</a></li>
       <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/4">Bolos</a></li>
        <li class="active"><a href="http://localhost/negocio/shop/"> Home</a></li>
    </ul>
  </li>
 
</ul>
     
 
     
</div>
   <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="http://localhost/negocio/">Home</a></li>
  <li role="presentation"><a href="http://localhost/negocio/shop/produto">Produtos</a></li>
  <li role="presentation"><a href="#">Contato</a></li>
   <li role="presentation"><a href="http://localhost/negocio/shop/form_map">calcular distacia</a></li>
    <li role="presentation"><a href="#">Fornacedores</a></li>
</ul>      
 

   <div class="row"  style="width: 500px;height: 200px; margin-left:300px;"> 
<?php echo $map['js']; ?>
<?php echo $map['html']; ?>
<div id="directionsDiv"></div>
</div>
   
  </div>

</body>
</html>