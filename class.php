<?php

abstract class Categoria{
    abstract public function printCategoria();
}

class Attualità extends Categoria{
    public function printCategoria(){
        return "Faccio parte delle categorie, sono un'Attualità \n";
    }
}

class Sport extends Categoria{
    public function printCategoria(){
        return "Faccio parte delle categorie, sono uno Sport \n";
    }
}

class Gossip extends Categoria{
    public function printCategoria(){
        return "Faccio parte delle categorie, sono un Gossip \n";
    }
}

class Storia extends Categoria{
    public function printCategoria(){
        return "Faccio parte delle categorie, sono una Storia \n";
    }
}


$categoria1 = new Storia();
// echo $categoria1->printCategoria();


