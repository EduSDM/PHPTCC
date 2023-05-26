<?php
CLass Tema{
    private int $id_tema;
    private string $descricao_tema;

    public function __construct($id_tema,$descricao_tema){
        $this->id_tema=$id_tema;
        $this->descricao_tema=$descricao_tema;
    }

    public function getId_tema(){   
        return $this->id_tema;
    }
    public function setId_tema($id_tema){
        return $this->id_tema=$id_tema;
    }

    public function getDescricao_tema(){
        return $this->descricao_tema;
    }
    public function setDescricao_tema($descricao_tema){
        return $this->descricao_tema=$descricao_tema;
    }
}



?>