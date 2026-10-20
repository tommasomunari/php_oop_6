<?php

require_once("class.php");

class Post{
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Categoria $categoria, $tag){
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }


    public function printTitolo(){
        return $this->titolo;
    }


    public function printcategoria(){
        return $this->categoria->printCategoria();
    }

    public function printTag(){
        return $this->tag;
    }
}


$post1 = new Post("il calcio a berlino", new Gossip, "tag non disponibile");
echo $post1->printTag();