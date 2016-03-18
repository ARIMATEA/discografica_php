<?php

class Musica {
    public $nome;
    public $autor_id;
    
    public function listarTodasAsMusicas() {
        $musica1 = new Musica();
        $musica1->nome = "Flor de lis";
        $musica1->autor_id = 10;
        $musica2 = new Musica();
        $musica2->nome = "Além do Espelho";
        $musica2->autor_id = 8;
        
        $lista = array($musica1, $musica2);
        return $lista;
    }
    
    
}
