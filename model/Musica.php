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
        $sql = "SELECT musica.*, autor.nome as nome_autor FROM musicas "
                . "musica INNER JOIN "
                . "autores autor ON (autor.id = musica.autor_id)"
                . "ORDER BY musica.id DESC ";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function find($id = null){
        $sql = "SELECT musica.*, autor.nome as nome_autor FROM musicas "
                . "musica INNER JOIN "
                . "autores autor ON (autor.id = musica.autor_id) WHERE musica.id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue(":id" , $id);
        $query->execute();
        return $query->fetch();
    }
    
    public function update($id = null){
        $sql = "UPDATE musicas "
                . " SET titulo = :titulo, autor_id = :autor_id , midia_id = :midia_id "
                . "where id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue(":titulo" , $this->getTitulo());
        $query->bindValue(":autor_id" , $this->getAutor_id());
        $query->bindValue(":midia_id", $this->getMidia_id());
        $query->bindValue(":id", $id);
        $query->execute();   
    }
    
    
}
