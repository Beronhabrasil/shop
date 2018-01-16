<?php

class Upload extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
         $this->load->helper(array('form', 'url'));
    }
    
    public function uploadform()
    {
       
       // $this->load->model('shop_model');
         
        // $data['query'] = $this->shop_model->getiduser();
     
      $this->load->view('uploadform');
    }   
    
  
   
    
    public function insertupload()
    {
   
        $id = $this->input->post('id');
        $status = "";
        $msg = "";
        $filename = "product_pic";
  
        if (empty($_POST['categoria_id'])) {
              echo'      <a href="http://localhost/negocio/upload/uploadform">retornar </a>'; 
            
            $status = "error";
             $msg = "Please enter the right information";}
        
        if ($status != "error") {
            $config['upload_path'] = 'img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload($filename))
                {
                 echo '<br>';
                $status = 'error';
               
           echo'      <a href="http://localhost/negocio/upload/uploadform">retornar </a>';
                $msg = $this->upload->display_errors('', '');
                } else {
                $this->load->model('shop_model');
                $data = $this->upload->data();

                
                $file_id = $this->shop_model->insert_file($data['file_name'],$id,
                 $_POST['categoria_id'],$_POST['preco'],$_POST['descricao'],$_POST['nome']);
             
                if ($file_id) {
                   redirect('upload/uploadform');
                      // $this->load->view('template');
                     
                } else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "please try again";
                }
            }
            @unlink($_FILES[$filename]);
        }

        echo json_encode(array('status' => $status, 'msg' => $msg));
    }
    
    
    
}




?>
