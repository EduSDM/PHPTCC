<?php


CLass AutorLivro{

    private int $idLivro;
    private string $tema;
    private string $titulo; 

    public function __construct($idLivro,$tema,$titulo){
        $this->idLivro=$idLivro;
        $this->tema=$tema;
        $this->titulo=$titulo;
    }

    public function getIdLivro(){
        return $this->idLivro;
    }
    public function setIdLivro($idLivro){
        return $this->idLivro=$idLivro;
    }

    public function getTema(){
        return $this->tema;
    }
    public function setTema($tema){
        return $this->tema=$tema;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        return $this->titulo=$titulo;
    }
}




?>