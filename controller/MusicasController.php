<?php
include_once '../model/Musica.php';

class MusicasController {
    public function listar() {
        $musica = new Musica();
        return $musica->listarTodasAsMusicas();
    }
    
    public function inserir(){
        $musica = new Musica();
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $midia_id = $_POST['midia_id'];
        
        $musica->setTitulo($titulo);
        $musica->setAutor_id($autor_id);
        $musica->setMidia_id($midia_id);
        $musica->salvar();
    }
    
    public function findControl($id) {
        $musica = new Musica();
        $resultado = $musica->find($id);
        return $resultado;
    }
    
    public function updateControl(){
        $musica = new Musica();
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $midia_id = $_POST['midia_id'];
        $id = $_POST['id'];
        
        $musica->setTitulo($titulo);
        $musica->setAutor_id($autor_id);
        $musica->setMidia_id($midia_id);
        $musica->update($id);
    }
    
    public function deletarControl($id){
        $musica = new Musica();
        $musica->delete($id);
    }
}

