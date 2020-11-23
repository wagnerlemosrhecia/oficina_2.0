<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamento extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pessoa_model');
        $this->load->model('Produto_model');
    }

    public function index(){

        $this->load->view('orcamento/orcamento_list');
    }

    public function cadastro(){

        $pessoa = $this->Pessoa_model->findAll();
        $produto = $this->Produto_model->findAll();

        $data = array(
            'pessoa_data' => 'pessoa',
            'pessoa' => $pessoa,
            'produto' => $produto
        );

        $this->load->view('orcamento/orcamento_cadastro', $data);
    }

}