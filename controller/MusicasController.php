<?php
include '../model/Musica.php';

class MusicasController {
    public function listar() {
        $musica = new Musica();
        return $musica->listarTodasAsMusicas();
    }
    
}

