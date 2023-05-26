<?php


class Emprestimo
{
    private int $codigo;

    private string $valor;

    private string $data_emprestimo;

    public function __construct($codigo, $valor, $data_emprestimo)
    {
        $this->codigo = $codigo;
        $this->valor = $valor;
        $this->data_emprestimo = $data_emprestimo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }


    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        return $this->valor = $valor;
    }


    public function getData_emprestimo()
    {
        return $this->data_emprestimo;
    }
    public function setData_emprestimo($data_emprestimo)
    {
        return $this->data_emprestimo = $data_emprestimo;
    }

}

$emprestimo1 = new Emprestimo(
    "123",
    "1.200",
    '1/2/2005'
);

echo $emprestimo1->getCodigo();
$emprestimo1->setCodigo("numero do codigo");





?>