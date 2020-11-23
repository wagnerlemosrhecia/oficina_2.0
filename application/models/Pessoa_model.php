<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model{

    private $table = 'pessoa';
    private $id = 'pessoa_id';

    function __construct(){
        parent::__construct();
    }


    //inserir dados
    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    //buscar todos os registro
    public function findAll(){
        $this->db->order_by($this->table.'.'.'pessoa_nome', 'ASC');
        return $this->db->get($this->table)->result();
    }

    //buscar registro por id
    public function findById($id){
        
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    //buscar registro po cpf
    public function findByCpf($cpf){
        $this->db->where('pessoa_cpf', $cpf);
        return $this->db->get($this->table)->row();
    }

    //atualizar registro por id
    public function update($id, $data){

        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    //deletar registro por id
    function delete($id){
        
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}