<?php

class Hero {
    protected $nome;
    protected $img;
    protected $dica;

    public function __construct($nome, $img, $dica){
        $this->nome = $nome;
        $this->img = $img;
        $this->dica = $dica;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImg() {
        return $this->img;
    }

    public function getDica() {
        return $this->dica;
    }
}