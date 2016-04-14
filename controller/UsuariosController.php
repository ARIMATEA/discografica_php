<?php
include_once  '../model/Usuario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuariosController
 *
 * @author PHP e  MySQL
 */
class UsuariosController {
    public function login(){
        $user = new Usuario();
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuarioLogado = $user->login($email, $senha);
        if($usuarioLogado > 0){
            session_start();
            $_SESSION['email'] = $email;
            header('Location: index_musicas.php');
        }else{
            header('Location: index.php');
        } 
    }
    
    public function logoff(){
        if(isset($_SESSION['email'])){
            session_destroy();
            header('Location: index.php');
        }
    }
    
    public function verifica(){
        if(!isset($_SESSION['email'])){
            header('Location: index.php');
        }
    }
}
