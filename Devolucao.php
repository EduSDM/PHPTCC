<?php

class Devolucao
{
    private int $codigo;
    private string $descricao;
    private string $data;

    public function __construct($codigo, $descricao, $data)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->data = $data;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }


    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        return $this->data = $data;
    }

}


$devolucao1 = new Devolucao(
    '234',
    'nao sei',
    '23/04/2009'
);

echo $devolucao1->getDescricao();
echo $devolucao1->setDescricao('livro devolvido');


?>