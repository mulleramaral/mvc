<?php

namespace App\Models;
use topterm\Db\Table;

class Login extends Table{
    protected $table = "login";
    
    public function validarLogin($login,$senha){
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE login = :login AND senha = :senha");
        $stmt->bindParam(':login',$login);
        $stmt->bindParam(':senha',$senha);
        $stmt->execute();
        $res = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $res;
    }
}
