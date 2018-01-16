

<html>
    <head>
        <meta charset ='utf8'> 
        <title>Loja Online</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
    
    <style>
            
img {
   width: 100%;
    height: 70%; 
}


    
    
    
   

.image {
    width: 20%;
    height: 20%;   
 
    
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



            
        </style>  </head>
     <body>
         
         <div class="container">   
         
         
         
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
        <li class="active"><a href="http://localhost/negocio/shop/produto"> Home</a></li>
    </ul>
  </li>
 
</ul>
     
 
     
</div>
   <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="http://localhost/negocio/">Home</a></li>
  <li role="presentation"><a href="http://localhost/negocio/shop/showcart">Produtos</a></li>
  <li role="presentation"><a href="#">Contato</a></li>
   <li role="presentation"><a href="http://localhost/negocio/shop/form_map">calcular distacia</a></li>
    <li role="presentation"><a href="#">Fornacedores</a></li>
</ul>      
         

</head>



<body>
   
         
    <br>
		
			<?php foreach ($product as $row) { ?>
			
 
   
    <div id="products" class="row list-group">
        <div class="item  col-xs-12 col-md-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="<? echo base_url('img/'. $row->foto); ?>" class ="img" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $row->produto_nome; ?></h4>
                    <p class="group inner list-group-item-text">
                        <?php echo $row->description; ?>
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                R$<?php echo $row->price; ?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                           <a type="submit" class="btn btn-default" href="http://localhost/negocio/shop/add/<?echo $row->id;?> "onclick="window.open(this.href, 'child', 'scrollbars,width=900,height=350');
           return false">Adcionar ao carrinho</a>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>			
    
                    
   </div>  
    
                    
                    
			<?php } ?>
	

</div>
     </body>
</html>