<?php
include '../model/Musica.php';

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
    
}

