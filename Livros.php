<?php
    Class Livros{
        private int $id_livro;
        private string $titulo;
        private string $conteudo;
        private string $data_publi;

        public function __construct($id_livro,$titulo,$conteudo,$data_publi){
            $this->id_livro=$id_livro;
            $this->titulo=$titulo;
            $this->conteudo=$conteudo;
            $this->data_publi=$data_publi;

        }

        public function getId_livro(){
            return $this->id_livro;
        }
        public function setId_livro($id_livro){
            return $this->id_livro=$id_livro;
        }
        

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo){
            return $this->titulo=$titulo;
        }


        public function getConteudo(){
            return $this->conteudo;
        }
        public function setConteudo($conteudo){
            return $this->conteudo=$conteudo;
        }


        public function getData_publi(){
            return $this->data_publi;
        }
        public function setData_publi($data_publi){
            return $this->data_publi=$data_publi;

        }
    
}





?>