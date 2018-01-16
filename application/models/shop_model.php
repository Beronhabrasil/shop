<?php

class Shop_model extends CI_Model
{
 
    public function login ($email_address,$password)
    {
        
        $this->db->where('email_address' , $email_address);
        $this->db->where('password',$password);
          $this->db->limit(1);
          $query = $this->db->get('credentials');
       if ($query->result() > 1) {

       return $query->result();
        }else {return FALSE; echo ' problem';}
    }
    
    
 public function getcategoria ($id)
{
    
  $this->db->select('*');
  $this->db->from('foto');
 // $this->db->where('categoria_id', $id);
  $this->db->join('categoria',' foto.categoria_id  = categoria.categoria_id' );
  $this->db->where('foto.categoria_id',$id);
  $query = $this->db->get(); 
   return $query->result();
}  


public function insertcategorie ($data)
{
    $this->db->insert('categoria',$data);
} 

function product()
    {
       $this->db->select('*');
       $this->db->from('foto');
       $query = $this->db->get();
       return $query->result();
     
    }






public function insert_file($filename,$id,$categoria_id,$preco,$descricao,$nome)
{
 $data = array
 (
 'foto' => $filename,
 'id_produto' => $id,
 'categoria_id'=> $categoria_id,
 'price'    => $preco,
 'description'   =>  $descricao,
  'produto_nome'     =>$nome );
 
 $this->db->insert('foto', $data);
    return true; }
   
    function product_description($id)
    {
       $this->db->select('*');
       $this->db->from('foto');
       //$this->db->join('foto', 'credentials.id = foto.id_produto');
      //$this->db->join('produto','foto.categoria_id = produto.categoria_id' );
     $this->db->where('id',$id);
       $query = $this->db->get();
       return $query->result();
     
    }
    
    
    public function delete($id)
    {
          $this->db->where('id',$id);
        $this->db->delete('foto');
     
        
    }    
    
    
    public function cart_product()
    {
        $query = $this->db->get('foto');
       // $this->db->where('id',$id);
        return $query->result();
        
        
    }        
    
    
    
    
    
 
}
   





?>
