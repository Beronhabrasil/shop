
<?php

 error_reporting(0);
            ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Carrinho de Compras</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	
</head>

            
            
        

 <div class="row">
			<div class="col-md-12">
				<h2>Checkout</h2>
			</div>
		</div>
		<table class="table table-striped table-bordered table-responsive">
			<thead>
				<tr>
				         <th>Quantidade</th>
                                         <th>Nome</th>
					<th>Preço</th>
					<th>Subtotal</th>
                                        <th>Ações</th>
				</tr>
			</thead>
			<tbody>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>
<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
<td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	
  <td style=""><?php echo $items['name']; ?></td>
 <td><?php echo $this->cart->format_number($items['price']); ?> </td>  
 <td> $<?php echo $this->cart->format_number($items['subtotal']); ?></td>
 <td> <? echo anchor('Shop/deletcart/'.$items['rowid'], 'Excluir') ?></td>		
      
                                         
  <tr>
                                

 <? $quantitat = $items['qty']; ?>

<?php $i++; ?>

<?php endforeach; ?>
      
  <? 

        






?>    
                              
<tr>
 <td> <span style="background-color: red;" > Total $<?php echo $this->cart->format_number($this->cart->total()); ?></span></td></tr>
</tbody>


<td>
    
  
 
  <form action="<?php echo base_url('shop/showcart');?>" method="post" > 
<input type="hidden" name="subtotal" value="">
 <div class="col-sm-8">  <button type="submit"  value =" submit" class="btn btn-default">Adcionar</button></div>
</form>
</td>
<td>
    
     <? //$test = $this->cart->format_number($this->cart->total());?>
 
  <form action="<?php echo base_url('shop/buy');?>" method="post" > 
<input type="hidden" name="total" value="<?php  echo $this->cart->format_number($this->cart->total()); ?>">
 <div class="col-sm-8">  <button type="submit"  value =" submit" class="btn btn-default">Pagar</button></div>
</form>
</td>


</table>






	
 









</body>
</html>
