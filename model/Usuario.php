<?php
include_once  '../conexao/Conexao.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author PHP e  MySQL
 */
class Usuario {
   private $email;
   private $senha;
   
   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   public function login($email = null, $senha = null){
       $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
       $query = Conexao::prepare($sql);
       $query->bindValue(":email", $email);
       $query->bindValue(":senha", $senha);
       $query->execute();
       return $query->rowCount();
   }
}
