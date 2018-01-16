<?php

class Admin extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
    }
    
    
    public function show_product()
    {
      $this->load->model('shop_model')  ;
    $data['query']=  $this->shop_model->product();
    $this->load->view('administration',$data);
        
    }
    
    
    public function delete_product()
    {
       
        
        $id = $this->uri->segment(4);
        $this->load->model('shop_model')  ;
        $this->shop_model->delete($id);
        echo 'apagado com sucesso';
        redirect('http://localhost/negocio/index.php/admin/show_product/');
        
    }
            
            
    
     
    

    
}



?>
