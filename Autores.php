<?php

class Autores
{
  private int $id;
  private string $nacionalidade;
  private string $nome;

  public function __construct($id, $nacionalidade, $nome)
  {
    $this->id = $id;
    $this->nacionalidade = $nacionalidade;
    $this->nome = $nome;

  }

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getNacionalidade()
  {
    return $this->nacionalidade;
  }
  public function setNacionalidade($nacionalidade)
  {
    return $this->nacionalidade = $nacionalidade;
  }

  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    return $this->nome = $nome;
  }

}









?>