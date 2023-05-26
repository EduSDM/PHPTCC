<?php

class Categoria
{
    private int $codigo;
    private string $descricao_categoria;


    public function __construct($codigo, $descricao_categoria)
    {

        $this->codigo = $codigo;
        $this->descricao_categoria = $descricao_categoria;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }


    public function getDescricao_categoria()
    {
        return $this->descricao_categoria;
    }
    public function setDescricao_categoria($descricao_categoria)
    {
        return $this->descricao_categoria = $descricao_categoria;
    }



}


$categoria1 = new Categoria(
    '987',
    'nao sei'
);


echo $categoria1->getDescricao_categoria();
echo $categoria1->setDescricao_categoria('romance');

?>