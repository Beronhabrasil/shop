
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
<style>
img  { width: 35%;}



h5{
    font-size: 1.4em;
}

</style>

		
       
        
</head>

<body> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="public/jquery.fittext.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
          $("body").fitText();
  });
</script>

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
         


<div class="container">
    <div class="row">
    
 <?php foreach ($query as $row){?>


    	<div class="col-md-12">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-left"><? echo $row->produto_nome; ?><span class="label label-info"></span></h4>
				 <a href="http://localhost/negocio/index.php/shop/show_product/id/<? echo $row->id;?>"> 
                                     <img class="img-responsive" src=" <?php echo base_url('img/'. $row->foto); ?>" </a>	
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h3></h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label></label></h3>
							</div>
						</div>
						<p>R$:<?php echo $row->price ?></p>
                                                <p><a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> </p>
                                                 <p><a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> reputaçao produto</a> </p>
                                                <p><a href="http://localhost/negocio/index.php/shop/show_product/id/<? echo $row->id;?> "class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>Comprar</a></div></p>
                                                


                                                <br>


<div class="paragraphs">
  <div class="row">
    <div class="span4">
      <img style="float:left" src=""/>
      <div class="content-heading"><h3>Experience &nbsp </h3></div>
      <p style="clear:both">Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    </div>
  </div>
</div>

    

 
        
 

<?php }?>

                                        </div>  </div>  
           
	
 </body>
</html>