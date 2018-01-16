
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
.pic{
	width:350px;
	height:150px;
        margin-left: 0px;
        margin-top: 20px;
       
}

 
</style>
</head>

<div class="container" style="background-color: whitesmoke;">
    
    <h4> Area Administrativa </h4>
    <br>
      <br>
   
 
<span style ="
    width: 20px;
    height: 20px;
    margin-left: 0px;
    background-color: white;
    box-shadow: 10px 10px 5px #888888;
    font: italic bold 15px/15px Georgia, serif;
     text-decoration: none;">          
          
 <a href="http://localhost/negocio/index.php/upload/uploadform/id/"onclick="window.open(this.href, 'child', 'scrollbars,width=1000,height=500');
     return false">Inserir Produto</a> 


 
   
 <?php   
foreach ($query as $row){?>
    
 <div class="table-responsive">          
  <table class="table" >
 <th>      

  
<div class="row-fluid"  style ="display: inline; margin-left:30px; ">
 <h4>  <? echo $row->produto_nome; ?></h4>  </div> 
 
 
 <div class="row-fluid" style="margin-left:0px;">   
  <a  href="#/<? echo $row->id;?>">
  <img class="pic" src="<? echo base_url('img/'. $row->foto); ?>" >
 </a>
 </div>
 
 <div class="row-fluid"><h6 style="margin-left:0px">   Preço <? echo $row->price ?> </h6> </div>
      
 
 <span style ="
    width: 20px;
    height: 20px;
    margin-left: 0px;
    background-color: white;
    box-shadow: 10px 10px 5px #888888;
    font: italic bold 15px/15px Georgia, serif;
     text-decoration: none;">          
          
 <a href="http://localhost/negocio/index.php/admin/delete_product/id/<? echo $row->id;?>
    " onclick="window.open(this.href, 'child', 'scrollbars,width=1000,height=500');
     return false">apaguar</a> 

 
 
 
 
 
 <br>
 


 
 
      </th>
</div>
          
     
  
        
    
   
  </table>
     <br>
      

 



</div>
    

<?php }?>


  




<div class="btn-block"> 
  
<p>  <a class="btn btn-default" style =" background-color:yellowgreen;"href="http://localhost/negocio/index.php/shop/logout">Retorne login</a></p> 
</div>

</body>
</html>