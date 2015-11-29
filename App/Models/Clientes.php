<?php

namespace App\Models;
use topterm\Db\Table;

class Clientes extends Table{
    protected $table = "clientes";
    protected $id;
    protected $nome;
    protected $email;

    public function salvar(){
        if($this->id == 0)
        {
            $stmt = $this->db->prepare("INSERT INTO clientes(nome,email) values(:nome,:email)");
        }
        else{
            $stmt = $this->db->prepare("UPDATE clientes set nome = :nome,email =:email WHERE id = :id");
            $stmt->bindParam(':id',$this->id);
        }
        $stmt->bindParam(':nome',$this->nome);
        $stmt->bindParam(':email',$this->email);
        $stmt->execute();
    }
    
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setEmail($email){
        $this->email =$email;
        return $this;
    }
    
    public function  getEmail(){
        return $this->email;
    }
}
