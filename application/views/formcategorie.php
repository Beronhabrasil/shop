<?php  ?>

<div class="container ,btn-block" style="margin-left:500px;">

<p>
<?php echo form_open('shop/insertcategorie'); ?>
<?php echo form_label('Categoria','categoria'); ?>
<?php echo form_input('categoria_nome','','categoria_nome '); ?>
   </p>  
  <p>
<select multiple name="categorie">
<option value="1">Pizza</option>
<option value="2">Spaguetti</option>
<option value="3">Salgados</option>
<option value="4">Bolos</option>
                </select>
            </p>
   </p> 
   <p>
   <?php echo form_submit('submit','registrar');?>
   </p>
 <?php echo form_close(); ?>
   
   
   
  

  
<input type="button" value="Close this window" onclick="self.close()">
