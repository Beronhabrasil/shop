
<html>
<head
     <meta charset ='utf8'> 
	 
	
        <title>Loja Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/reset.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap-responsive.css">
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/template.js"></script>
        
        <style>
            
img {
   width: 300px;
    height: 250px; 
}


    
    
    
   

.image {
    width: 90%;
    height: 40%;   
 
    
}

.image img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
  	-moz-transition: all 1s ease; /* Firefox */
  	-o-transition: all 1s ease; /* IE 9 */
  	-ms-transition: all 1s ease; /* Opera */
  	transition: all 1s ease;
}

.image:hover img {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.75); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.65);
}
            
        </style>
        
        

</head>


<div style="background-color: yellowgreen">
  <ul class="nav nav-tabs" role="tablist">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     Categorias<span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
     
      
  <li class="active"> <a href="http://beronha.net16.net/negocio/shop/loadform "onclick="window.open(this.href, 'child', 'scrollbars,width=900,height=500');
     return false">Login</a>  
  </li>
 <li class="active"><a href="http://beronha.net16.net/negocio/shop/tvcategoria/id/1"> Pizza </a></li>
  <li class="active"><a href="http://beronha.net16.net/negocio/shop/tvcategoria/id/2">Spaguetti   </a></li>
     <li class="active"><a href="http://beronha.net16.net/negocio/shop/tvcategoria/id/3">Salgados</a></li>
       <li class="active"><a href="beronha.net16.net/negocio/shop/tvcategoria/id/4">Bolos</a></li>
        <li class="active"><a href="http://beronha.net16.net/negocio"> Home</a></li>
    </ul>
  </li></ul>
</div>

   <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="http://beronha.net16.net/negocio/">Home</a></li>
  <li role="presentation"><a href="http://beronha.net16.net/negocio/shop/produto">Produtos</a></li>
  <li role="presentation"><a href="#">Contato</a></li>
   <li role="presentation"><a href="#">Mapa</a></li>
    <li role="presentation"><a href="#">Fornacedores</a></li>
</ul>      
         

   
 <?php  
foreach ($query as $row)
{?>
  <div class="table-responsive">          
  <table class="table" >
 <th>        
    
 
  <div style= "margin-top: 10px;margin-left: 0px;"><h2><? echo $row->produto_nome; ?><h2></div>
  <div style ="margin-top: 50px;margin-left: 0px;"> <h4> Preço <? echo $row->price ?></bold> </h4></div>            
  
 <div class="row-fluid">
    
 <div class="image" style="margin-top: 10px;margin-left: 50px;"><a href="http://beronha.net16.net/negocio/shop/show_product/id/<? echo $row->id;?>">
<img src="<? echo base_url('img/'. $row->foto); ?>" ></a>
 </div>
        
        
 <p>  <span style ="
    width: 20px;
    height: 20px;
    margin-left: 0px;
    margin-top:0;
    background-color: whitesmoke;
    box-shadow: 10px 10px 5px #888888;
    font: italic bold 15px/15px Georgia, serif;
    text-decoration: none;">          
    <a type="submit" class="btn btn-default" href="http://beronha.net16.net/negocio/shop/buy/id/<? echo $row->id; ?>"
    onclick="window.open(this.href, 'child', 'scrollbars,width=1200,height=700');return false">comprar</a>
  </span></p> 

 <div class="row-fluid"><? echo "   ". $row->description; ?> </div>
   
</div>
</div>
</th>
</table>


     
 <?php }?>



    