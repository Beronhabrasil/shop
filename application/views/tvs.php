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
      Categorias <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
     
  <li class="active"> <a href="http://localhost/negocio/shop/loadform "onclick="window.open(this.href, 'child', 'scrollbars,width=1400,height=700');
     return false">Login</a>  
  </li>
  <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/1"> Pizzas</a></li>
  <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/2">Spaguetti   </a></li>
     <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/3">Salgados</a></li>
       <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/4">Bolos</a></li>
          <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/5">Bebidas</a></li>
         <li class="active"><a href="http://localhost/negocio/shop/produto"> Home</a></li>
    </ul>
  </li>
 
</ul>
</div>
     <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="http://localhost/negocio/">Home</a></li>
  <li role="presentation"><a href="http://localhost/negocio/shop/showcart">Produtos</a></li>
  <li role="presentation"><a href="#">Contato</a></li>
   <li role="presentation"><a href="#">Mapa</a></li>
    <li role="presentation"><a href="#">Fornacedores</a></li>
</ul>      

         <div class ="row-fluid">
   
        <? foreach ($query as $row)  {  ?>
      
     <input type="hidden" name='id' value="<? echo  $row->categoria_id; ?> ">  <?}?>
     <td> <?   echo'<h6>'. 'Voce esta na categoria ==>  '.$row->categoria_nome .'<h6>'.' </td> ';?>
         <hr>
 </div>
         <br>
   
 
  <? foreach ($query as $row)
 { ?>

 <div class="controls-row ">
    <div style ="background-color: #ccc; width: 200px; height: 150; margin-left:550px; margin-top: 0; ">
  <h4> <? echo $row->produto_nome; ?></h4>
            
 <a href="http://localhost/negocio/index.php/shop/show_product/id/<? echo $row->id;?>">
     <img src="<? echo base_url('img/'. $row->foto); ?>" class="img-thumbnail" alt="Cinque Terre" width="204" height="136">
 </a>
  <h6> <? //echo "Proprietario   ". $row->produto_nome; ?></h6>
 
     <a class="btn btn-default" style = " background-color:yellowgreen;" href="#"> comprar</a> 
     <h6>   Preço <? echo $row->price ?> </h6>
  <hr>
  </div>

   <?  }?>


</div>      
         
 
         
         

     
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
  
        
     
   
 <br><br><br><br><br><br><br><br><br>
    
    
    <span style ="
    width: 20px;
    height: 20px;
    margin-left: 0px;
    background-color: whitesmoke;
    box-shadow: 10px 10px 5px #888888;
    font: italic bold 15px/15px Georgia, serif;
     text-decoration: none;">          
          
    
 <br>
 
 

    



  

</body>
</html>
      
        
          
       

    

  
  </body>
</html>



<?php








