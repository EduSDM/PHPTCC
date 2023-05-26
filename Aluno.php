<?php
class Aluno
{
    private string $ra;
    private string $nome;
    private string $cep;
    private $datanacs;

    public function __construct($ra, $nome, $cep, $datanacs)
    {
        $this->ra = $ra;
        $this->nome = $nome;
        $this->cep = $cep;
        $this->datanacs = $datanacs;
    }

    public function getRa()
    {
        return $this->ra;
    }
    public function setRa($ra)
    {
        return $this->ra = $ra;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getCep()
    {
        return $this->cep;
    }
    public function setCep($cep)
    {
        return $this->cep = $cep;
    }

    public function getDatanacs()
    {
        return $this->datanacs;
    }
    public function setDatanacs($datanacs)
    {
        return $this->datanacs = $datanacs;
    }
}




?>