<?php

error_reporting(0);
ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('cart');
    }

    public function index() {
        $this->load->view('template');
    }

    function loadform() {
        $this->load->view('login');
    }

    function dologin() {


        $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if ($this->form_validation->run() === true) {

            $email_address = $this->input->post('email_address');
            $password = $this->input->post('password');

            $this->load->model('shop_model');
            $login_exits = $this->shop_model->login($email_address, $password);


            if ($login_exits) {


                $sessionData = ['id' => $login_exits[0]->id,
                    'nome' => $login_exits[0]->nome,
                    'email_address' => $login_exits[0]->email_address,
                    'agent' => $_SERVER['HTTP_USER_AGENT'],
                    'ip' => $_SERVER['SERVER_ADDR'],
                    'exemple' => $_SERVER['SERVER_ADMIN'],
                    'logado' => true];


                //start session 
                $this->session->set_userdata($sessionData);





                $this->load->view('sucess', $sessionData);
            } else {
                echo 'you need to register';
                $this->load->view('template');
            }
        } else {
            echo validation_errors('<span class="error" style="background:red;">', '</span>');
            echo ' <p>' . 'impossible to login' . '</p>';

            $this->load->view('template');
        }
    }

    function logout() {
        $this->load->view('logout');
        $this->session->unset_userdata('email_address');
    }

    public function tvcategoria() {
        $id = $this->uri->segment(4);
        $this->load->model('shop_model');
        $data['query'] = $this->shop_model->getcategoria($id);
        $this->load->view('tvs', $data);
    }

    public function createcategorie() {
        $this->load->view('formcategorie');
    }

    public function insertcategorie() {
        $data = array
            (
            'categoria_nome' => $this->input->post('categoria_nome'));
           // 'categoria_id' => $this->input->post('categorie'));
        
      
        $this->load->model('shop_model');
        $this->shop_model->insertcategorie($data);
        $this->load->view('formcategorie');
    }

    public function produto() {
        $this->load->model('shop_model');
        $data['query'] = $this->shop_model->product();

        $this->load->view('produtos', $data);
    }

    public function show_product() {
        $id = $this->uri->segment(4);

        $this->load->model('shop_model');
        $data['query'] = $this->shop_model->product_description($id);
        $this->load->view('description', $data);
    }

    public function buy() {

        $data['result'] = array("total" => $this->input->post('total'));



        $this->load->view('formbuy', $data);
    }

    public function add($id) {

        if (isset($data) < 0) {
            ;
            echo "nada inserido";
        } else {

            $id = $this->uri->segment(3);


            $this->load->model('shop_model');
            $product = $this->shop_model->product_description($id);

            $data = array(
                'id' => $product[0]->id,
                'qty' => 1,
                'price' => $product[0]->price,
                'name' => $product[0]->produto_nome
            );

            $this->cart->insert($data);

//
            //  $this->cart->destroy();

            $this->load->view('checkout');
        }
    }

    function showcart() {

        $id = $this->uri->segment(4);
        $this->load->model('shop_model');
        $data['product'] = $this->shop_model->cart_product($id);
        $this->load->view('checkout_express', $data);
    }

    public function deletcart($rowid) {
        if (isset($rowid) > 0) {

            $this->cart->update(array('rowid' => $rowid, 'qty' => 0));

            Redirect('http://localhost/negocio/Shop/add/00', false);
        } else {
            echo"nada inserido";
        }
    }

    public function localization() {

        $end = $_REQUEST['end'];



        $this->load->library('googlemaps');

        $config['center'] = '-2.518416, -44.247477';
        $config['zoom'] = 'auto';

        $config['directions'] = TRUE;
        $config['directionsStart'] = '-2.518416, -44.247477';
        $config['directionsEnd'] = $end;
        $config['directionsDivID'] = 'directionsDiv';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = '-2.518416, -44.247477';
        $this->googlemaps->add_marker($marker);


        $data['map'] = $this->googlemaps->create_map();

        $this->load->view('maps', $data);
    }

    public function form_map() {
        $this->load->view('form_map');
    }

}
?>

