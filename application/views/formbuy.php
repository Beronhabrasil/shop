

<?

error_reporting(0);
require_once('public/PagSeguroLibrary/PagSeguroLibrary.php'); ?>






 
<?   

//echo $result[1]->total;

?>


  <?

   $test = $result['total'];
        

   
   
    


$transation = 1;
$buyer_transaction = 1;
        
 $PaymentRequest = new PagSeguroPaymentRequest(); 

echo $test;
 $PaymentRequest->addItem("1","Transaçao",1,$test);
 //$_POST['id'],$row->produto_nome,$this->input->post('quantidade'), $row->price
 $PaymentRequest->setSender( 
 $this->input->post('nome'),
  $this->input->post('email'),
  $this->input->post('ddd'),
  $this->input->post('telefone')   );
 
 
 $PaymentRequest->setCurrency('BRL');
 $PaymentRequest->setShippingType(3);
 $PaymentRequest->setReference(1);
 
 $credentials = new PagSeguroAccountCredentials('ithelpdesk24@googlemail.com','A14EBB80E4314AA4993582CB7722F036');
 $url =  $PaymentRequest->register($credentials);
 header("Location: $url");


 
 
 ?>

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

</head>

<div class="wrapper" >  
    
    
    
    <div class="row-fluid" style="margin-left: 500px; margin-top: 30px; width:300px;height: 300px;" > 
        
        <h6> Por favor insira seus dados para o pagamento</h6>     
        

<form action="#" method="post">
  <input type="hidden" name ="id" value="<? echo $buyer_transaction;?> "/>
  
  <div class="form-group"> <label for="exampleInputNome">Quantidade</label>
    <input type="text" name ="quantidade" value="<? echo $transation;?> "/>
  </div>
  
  
  <div class="form-group"> <label for="exampleInputNome">Nome</label>
    <input type="text"  name ="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email"  name ="email"  class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
    
   <div class="form-group">
    <label for="exampleInputDDD">ddd</label>
    <input type="text" min="2"  max="3"   name ="ddd"  class="form-control" id="exampleInputPassword1" placeholder="ddd">
  </div>
    
  <div class="form-group">
    <label for="exampleInputTelefone">Telefone</label>
    <input type="text"  name ="telefone"       class="form-control" id="exampleInputPassword1" placeholder="Telefone"><br>
    <span style="text-decoration-color: red;"> valido telefone</span>
  </div>
    
<button type="submit" class="btn btn-default" name ="ok" >comprar</button>

</form>
    </div>



</div> 


  
</body>
</html>