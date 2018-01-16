
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
    width: 120%;
    height: 60%;   
 
    
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
     
  <li class="active"> <a href="http://localhost/negocio/shop/loadform "onclick="window.open(this.href, 'child', 'scrollbars,width=1400,height=700');
     return false">Login</a>  
  </li>
 <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/1"> Pizza </a></li>
  <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/2">Spaguetti   </a></li>
     <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/3">Salgados</a></li>
       <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/4">Bolos</a></li>
        <li class="active"><a href="http://localhost/negocio/shop/produto"> Home</a></li>
    </ul>
  </li>
 
</ul>
</div>
</div>
   <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="http://localhost/negocio/">Home</a></li>
  <li role="presentation"><a href="http://localhost/negocio/shop/produto">Produtos</a></li>
  <li role="presentation"><a href="#">Contato</a></li>
   <li role="presentation"><a href="#">Mapa</a></li>
    <li role="presentation"><a href="#">Fornacedores</a></li>
</ul>      
         

  



 
   
 <?php  
foreach ($query as $row)
{
  ?>
    
    
  <div class="container">
      
      
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imagem">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center produtonome">
            <h2><? echo $row->produto_nome; ?></h2>
        </div>
              <div class="image" style="margin-left: 400px;" ><a href="http://localhost/negocio/index.php/shop/show_product/id/<? echo $row->id;?>">
<img src="<? echo base_url('img/'. $row->foto); ?>" ></a>  </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 carrinho">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center carrinho_preco">
                <h4> Preço <? echo $row->price ?></bold> </h4>
            </div>
            
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center">
                <i class="fa fa-shopping-basket fa-2x"> <p><? echo "". $row->description; ?> </div></p> </i>
            </div>
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 carrinho_icone">
              
                       
    <a type="submit" class="btn btn-default" href="http://localhost/negocio/shop/buy<? echo $row->id; ?>"onclick="window.open(this.href, 'child', 'scrollbars,width=1200,height=700');
  return false">finalizar compra</a>
  
        
            </div>
              
              
              
              
              
        </div>
    </div>
      
      
      
      
      
           
          
 




     
 
      
       
         
          
   
    
     
 <?php }?>



    