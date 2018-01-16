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
          <style>
                    .carousel-inner > .item > img,
                    .carousel-inner > .item > a > img {

                        height:450px;
                        width: 1700px;
                        margin-top: 0;

                    }


                    #sliderhome{

                        padding: 0px;
                        border: 0px;

                        margin-left: 0px;
                        padding: 0;
                    }



                    #meuSlider,sliderhome{

                        padding: 0px;
                        border: 0px;
                        margin:auto;



                    }
                </style>
    </head>
    <body>



        <div class="container-fluid">     
            <div class="wrapper" >     
                
                <div class="row-fluid"><img src="img/logo.png" height="100" width="200"/></div>

                <div style="background-color: yellowgreen">
                    
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <bold><span style=" text-decoration: none;"> Categorias</bold></span> <span class="caret"></span>
                                
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
                    <li role="presentation"><a href="http://localhost/Shop/add/000">carrinho</a></li>
                </ul>      



                <!--   beggin Carrosel      -->



              


                <div class="row-fluid">



                    <section>
                        <script>    $(function () {
              $('.carousel').carousel({interval: 3000});
          });
          
                        
                        
                        </script>
                        <div id="meuSlider" class="carousel slide " data-ride="carousel"   >    
                            <ol class="carousel-indicators">
                                <li data-target="#meuSlider" data-slide-to="0" class="active"><span style="color:white;font-size:30px; "> </li>
                                <li data-target="#meuSlider" data-slide-to="1"></li>
                                <li data-target="#meuSlider" data-slide-to="2"></li>
                                <li data-target="#meuSlider" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner sliderhome">

                                <div class="item active"><img src="public/img/pizza-1562028.jpg" alt="Slider 0"  />
                                    <div class="carousel-caption">
                                        <h3>Pizza de Salame</h3>
                                        <p style="color:black;">Deliciosa</p>
                                    </div>
                                </div>

                                <div class="item"><img src="public/img/roasted-tomato.jpg" alt ="Slide 1" />
                                    <div class="carousel-caption">
                                        <h3>Pizza Rostet Tomate</h3>
                                        <p style="color:black;">com um sabor especial</p>
                                    </div>
                                </div>

                                <div class="item"><img src="public/img/margarida.jpg" alt="Slide 2" />
                                    <div class="carousel-caption">
                                        <h3>Pizza Margarida Italianissima</h3>
                                        <p>com muito queijo</p>
                                    </div>
                                </div>
                                <div class="item"><img src="public/img/mexicana.jpg" alt ="Slide 3" />
                                    <div class="carousel-caption">
                                        <h3>Mexicana</h3>
                                        <p style="color:black;">com um sabor especial</p>
                                    </div>
                                </div>                       




                            </div>
                            <a class="left carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true" >
                                    <span class="sr-only"> < </span>

                            </a>

                            <a class="right carousel-control" href="#meuSlider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"> > </span>
                            </a>  
                        </div>
                    </section>
                    <!--This is a comment. Comments are not displayed in the browser-->


                    <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

                        <div class="modal-content">


                            <div class="row">

                                <a href="http://localhost/negocio/shop/produto"><img src="public/img/pedido.png"> </a>



                            </div>
                        </div>
                    </div>




                </div>
                
                <div id="animation" class="row-fluid" style="height:300px;"><h4>Geschichte</h4><br>


Im Jahre 1958 kamen die beiden Studenten Dan und Frank Carney aus Wichita (Kansas) auf die Idee, ein Pizza-Restaurant zu eröffnen. Das Startkapital liehen sie sich von ihrer Mutter. Mit 600 US-Dollar mussten die Brüder die Geräte aus zweiter Hand kaufen. An einer Straßenkreuzung in Wichita bauten sie ihr erstes Restaurant, das sie in Anlehnung an das eher unscheinbare Gebäude Pizza Hut („Pizza-Hütte“) nannten.

Am 31. Mai 1958 begann der Geschäftsbetrieb. Zehn Jahre nach der Eröffnung in Wichita wurden bereits mehr als eine Million Gäste in 310 Restaurants begrüßt, und mit der ersten Niederlassung in Kanada begann die Eroberung der internationalen Märkte. Im Jahre 1969 wurde das rote Dach als Firmenlogo eingeführt, das auf Grund der ähnlichen Gestaltung und der Namensähnlichkeit in Deutschland des Öfteren mit einem Hut verwechselt wird.

Das Österreichische Werbemuseum hat in seiner Sammlung den ersten Pizza-Hut-Werbespot von 1965, in dem ein Mann mit einem Kindertretfahrzeug (Ford Mustang) Junior-Pizza kauft und das Ganze in einer Szenerie endet, die vielen Verfolgungsjagden in damals gängigen Kinofilmen ähnelt. Der Mann trägt einen markanten Hut; es könnte also interpretiert werden, dass die Wortspielerei Hut ganz bewusst als Werbemittel eingesetzt wurde.[2]

Das Unternehmen wurde 1977 von PepsiCo übernommen. Im Oktober 1997 wurde es an die Tricon Global Restaurants weiterverkauft, die sich heute Yum! Brands, Inc. nennt. Heutiger Firmensitz von Pizza Hut ist Dallas, Texas.</div>
                  


                    <!-- copyrights -->  
                    <div class="row-fluid footer" style="background-color: yellowgreen";>		 	
                        <p>© 2016 . All Rights Reserved | Design by  me  </p>		 	


                        <!-- //copyright -->
                        <script src="<?php echo base_url('js/jquery.magnific-popup.js" type="text/javascript'); ?>"></script>


                    <script>  $(document).ready(function () {
                            $('#myModal').modal('show');
                        });
                    </script>

                        <p class=" mf">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '' . '</strong>' : '' ?></p>

                    </div>

                    <div></div>


                    </body>
                    </html>








