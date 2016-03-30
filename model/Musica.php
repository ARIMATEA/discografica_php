<?php
include '../conexao/Conexao.php';
class Musica {
    private $id;
    private $titulo;
    private $autor_id;
    private $midia_id;
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor_id() {
        return $this->autor_id;
    }

    function getMidia_id() {
        return $this->midia_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor_id($autor_id) {
        $this->autor_id = $autor_id;
    }

    function setMidia_id($midia_id) {
        $this->midia_id = $midia_id;
    }

    public function salvar(){
        $sql = "INSERT INTO "
                . "musicas "
                . "(titulo,autor_id,midia_id) "
                . "values"
                . " (:titulo , :autor_id , :midia_id)";
        $query = Conexao::prepare($sql);
        $query->bindValue(":titulo", $this->getTitulo());
        $query->bindValue(":autor_id", $this->getAutor_id());
        $query->bindValue(":midia_id",  $this->getMidia_id());
        $query->execute();
    }    
   
        
    public function listarTodasAsMusicas() {
        $sql = "SELECT * FROM musicas";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    
}
