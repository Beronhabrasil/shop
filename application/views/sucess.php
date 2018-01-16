<?php


 
if($this->session->logado = true)
{
echo 'log in in the system';
 echo '<br>';
$nome = $this->session->nome;
echo 'Your Name &nbsp &nbsp'.$nome ;


echo '<br>';
echo 'your ID &nbsp &nbsp' .$id;
echo '<br>';
echo 'Email&nbsp &nbsp'. $this->session->userdata('email_address');
echo '<br>'; 
//
echo '<br>'; 

}

  echo '<br>';  
  
  $id_user = $id;
  
?>



<p>      
  <li class="active"> <a href="http://localhost/negocio/shop/createcategorie "onclick="window.open(this.href, 'child', 'scrollbars,width=1400,height=700');
     return false">Criar Categorie</a>  
  </li></p> 

<p>      
  <li class="active"> <a href="http://localhost/negocio/index.php/upload/uploadform/id/<? echo$id_user;?>">Inserir Produto</a>  
  </li></p> 

<p>      
  <li class="active"> <a href="http://localhost/negocio/index.php/admin/show_product/<? echo$id_user;?>">mostrar produtos</a>  
  </li></p> 


<br>
 <p>  <a class="btn btn-default" style =" background-color:yellowgreen;"href="http://localhost/negocio/index.php/shop/logout">Retorne login</a></p> 