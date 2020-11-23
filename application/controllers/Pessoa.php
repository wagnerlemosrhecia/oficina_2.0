<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pessoa_model');
    }

    public function index(){

        $pessoa = $this->Pessoa_model->findAll();

        $data = array(

            'pessoa_data' => 'pessoa',
            'pessoa' => $pessoa

        );

        $this->load->view('pessoa/pessoa_list', $data);
        
    }

    public function cadastro(){  

        if(sizeof($_POST) != 0){

            
            //formatando string
            $_POST['cpf'] = str_replace('.','',$_POST['cpf']);
            $_POST['cpf'] = str_replace('-','',$_POST['cpf']);
            $_POST['rg'] = str_replace('-','',$_POST['rg']);
            
            $_POST['telefone'] = str_replace('(','',$_POST['telefone']);
            $_POST['telefone'] = str_replace(')','',$_POST['telefone']);
            $_POST['telefone'] = str_replace(' ','',$_POST['telefone']);
            $_POST['telefone'] = str_replace('-','',$_POST['telefone']);
            
            $_POST['cep'] = str_replace('-','',$_POST['cep']);
            
            
            $this->db->trans_start();
            $data = array(

                'pessoa_nome' => $_POST['nome'],
                'pessoa_cpf' => $_POST['cpf'],
                'pessoa_rg' => $_POST['rg'],
                'pessoa_telefone' => $_POST['telefone'],
                'pessoa_nascimento' => $_POST['nascimento'],
                'pessoa_email' => $_POST['email'],
                'pessoa_profissao' => $_POST['profissao'],
                'pessoa_bairro' => $_POST['bairro'],
                'pessoa_rua' => $_POST['rua'],
                'pessoa_numero' => $_POST['numero'],
                'pessoa_cep' => $_POST['cep'],
                'pessoa_complemento' => $_POST['complemento'],
                'pessoa_cidade' => $_POST['cidade'],
                'pessoa_estado' => $_POST['estado']
    
            );

            $cpf = $data['pessoa_cpf'];

            $result = $this->Pessoa_model->findByCpf($cpf);

            if(isset($result->cpf) || isset($result->rg) || isset($result->email)){
                redirect(base_url(''));
            }

            $this->Pessoa_model->insert($data);
            
            $this->db->trans_complete();
            
            redirect(base_url('cliente'));

            
        }
        
        $this->load->view('pessoa/pessoa_cadastro');
        
    }

    public function pessoa_detalhes(){
        $id = $_GET['id'];
        $pessoa = $this->Pessoa_model->findById($id);

        $this->load->view('pessoa/pessoa_detalhes', $pessoa);
    }
    
    public function update(){   
        if(sizeof($_GET) != 0){
            $id = $_GET['id'];

            $pessoa = $this->Pessoa_model->findById($id);

            $this->load->view('pessoa/pessoa_editar', $pessoa, 'refresh');

        }else{
            $id = $_POST['id'];

            $data = array(
                
                'pessoa_nome' => $_POST['nome'],
                'pessoa_cpf' => $_POST['cpf'],
                'pessoa_rg' => $_POST['rg'],
                'pessoa_telefone' => $_POST['telefone'],
                'pessoa_nascimento' => $_POST['nascimento'],
                'pessoa_email' => $_POST['email'],
                'pessoa_profissao' => $_POST['profissao'],
                'pessoa_bairro' => $_POST['bairro'],
                'pessoa_rua' => $_POST['rua'],
                'pessoa_numero' => $_POST['numero'],
                'pessoa_cep' => $_POST['cep'],
                'pessoa_complemento' => $_POST['complemento'],
                'pessoa_cidade' => $_POST['cidade'],
                'pessoa_estado' => $_POST['estado']
                
            );
            
            $this->Pessoa_model->update($id, $data);

            redirect(base_url('cliente'));
        }

    }


    public function delete(){
        $id = $_GET['id'];
        
        $this->Pessoa_model->delete($id);

        redirect(base_url('cliente'));

    }

}