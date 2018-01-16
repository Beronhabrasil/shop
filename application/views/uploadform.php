
   


<html>
<head>
	<title>Upload</title>
       <html>
    <head>
   <meta charset ='utf8'> 
        <title>Login Curriculo</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/reset.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/public/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/template.css'); ?>/public/css/template.css">
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(''); ?>/public/js/template.js"></script> 
        <style> form{display: block;}</style>
       
</head>
<body>
    
  <div class="container">
        <div class="row-fluid" style="margin-left: 400px;margin-top: 100px;">
   
     
    
          
<? $id  = $this->uri->segment(4); ?>
<form action="<?php echo site_url('upload/insertupload');?>" method="post" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name='id' value="<? echo $id ; ?> "> 
<label>Foto :<input type="file" name="product_pic"></label>
<label>Preço :<input type="text" name="preco"></label>
<label>Nome Produto :<input type="text" name="nome"></label>
<p> Descriçao do produto<br> 
<textarea rows="3" cols="20" maxlength="90" name="descricao">
coloquetexto aqui...
</textarea> </p>
 <p>
<select multiple name="categoria_id">
<option value="2">Spaguetti</option>
<option value="1">Pizza</option>
<option value="3">Salgados</option>
<option value="4">Bolos</option>
<option value="5">Bebidas</option>
</select>
</p>



<label><input type="submit" name="Upload Image....."></label>
  </fieldset>
</form>
             <input type="button" value="Close this window" onclick="self.close()">
             
             
             
          
                 
     <a href="http://localhost/negocio/index.php/admin/show_product">retornar </a>
</div>

 
   

</body>
</html>








    


