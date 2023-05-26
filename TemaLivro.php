<?php
    Class TemaLivro{
        private int $id_livro_tema;
        private string $titulo;
        private string $descricao_tema;

        public function __construct($id_livro_tema,$titulo,$descricao_tema){
            $this->id_livro_tema=$id_livro_tema;
            $this->titulo=$titulo;
            $this->descricao_tema=$descricao_tema;
        }

        public function getId_livro_tema(){
            return $this->id_livro_tema;
        }
        public function setId_livro_tema($id_livro_tema){
            return $this->id_livro_tema=$id_livro_tema;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitutlo($titulo){
            return $this->titulo=$titulo;
        }

        public function getDescricao_tema(){
            return $this->descricao_tema;
        }
        public function setDescricao_tema($descricao_tema){
            return $this->descricao_tema=$descricao_tema;
        }
    }

?>