<?php
include '../conexao/Conexao.php';
class Musica {
    public $nome;
    public $autor_id;
    
    public function listarTodasAsMusicas() {
        $sql = "SELECT * FROM musicas";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    
}
