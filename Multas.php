<?php

class Multas
{

    private int $codigo;
    private string $data;
    private string $descricao;

    public function __construct($codigo, $data, $descricao)
    {
        $this->codigo = $codigo;
        $this->data = $data;
        $this->descricao = $descricao;

    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }


    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        return $this->data = $data;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }


}

$multas1 = new Multas(
    '123',
    '25/05/2001',
    'usuario advertido'

);

echo $multas1->getDescricao();
echo $multas1->setDescricao("mensagem descritiva")







    ?>