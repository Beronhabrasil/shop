





<?php  

 foreach ($query as $row){ ?> 




<?
if(isset($_POST['ok'])):
$price = $row->price;
require_once ('mp/lib/mercadopago.php');
$mp = new MP('7938801600965293', '8fRsSBOZXdRvuO8W5INuVcoTKmEkgb8a');

print_r($row->price);

$preference_data = array(
	
		
			"title" => $row->produto_nome,
			"quantity" => $this->input->post('quantidade'),
			"currency_id" => "BRL",
			"unit_price" =>  $price,
                       "id"     =>  $row->id
		
	
);




$preference = $mp->create_preference($preference_data);
endif;

?>









<form action="" method="post">
  <input type="hidden" name ="id" value="<? echo $row->id;?> ">
  
  <div class="form-group"> <label for="exampleInputNome">Quantidade</label>
    
  </div><input type= "number" min="1"  max="100" name ="quantidade" value="quantidade" >
  

    
<button type="submit" class="btn btn-default" name ="ok" >

</form>
    </div>

 <? print_r($row->price); ?>

 <? } ?>


<a href="<?php echo $preference['response']['init_point']; ?>">Pay</a>
  
</body>
</html>


