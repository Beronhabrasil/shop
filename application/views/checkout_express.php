
<html>
    <head>
        <meta charset ='utf8'> 
        <title>Produto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/reset.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap-responsive.css">
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/template.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function () {




            });
        </script>	

        <style>

            .img  { width: 30%; height: 30%;}


        </style>
    </head>

    <body> 

        <div class="container">
            <div class="wrapper"> 

               <div style="background-color: yellowgreen">
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <bold>  Categorias</bold> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">

                                <li class="active"> <a href="http://localhost/negocio/index.php/shop/loadform " onclick="window.open(this.href, 'child', 'scrollbars,width=900,height=500');
                return false">Login</a>  
                                </li>
                                <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/1"> Pizza </a></li>
                                <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/2">Spaguetti   </a></li>
                                <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/3">Salgados</a></li>
                                <li class="active"><a href="http://localhost/negocio/shop/tvcategoria/id/4">Bolos</a></li>
                                <li class="active"><a href="http://localhost/negocio/"> Home</a></li>
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




                <?php foreach ($product as $row) { ?>

                    <div class="well">
                        <div class="media">
                            <h4 class="media-heading"><? echo $row->produto_nome; ?></h4>
                            <img   class="media-object img"  src=" <?php echo base_url('img/' . $row->foto); ?>" />

                            <div class="media-body">


                                <? echo $row->description; ?>
                                <ul class="list-inline list-unstyled">
                                    <li><span><i class="glyphicon glyphicon-calendar"></i><h3>R$<? echo $row->price ?> </h3></span></li>


                                    <li>
                                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                        <span><i><a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> </i></span>
                                        <span><i><a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> reputaçao produto</a> </i></span>
                                        <span><i><a href="/Shop/add/<? echo $row->id; ?> "class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>Carrinho</a> </i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>



                    </div>



                <?php } ?>

            </div>

        </div>	

    </body>
</html>