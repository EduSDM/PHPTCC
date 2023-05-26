<?php
class ContarLivro
{
    private int $id_livro;
    private string $quantidade;

    public function __construct($id_livro, $quantidade)
    {
        $this->id_livro = $id_livro;
        $this->quantidade = $quantidade;
    }

    public function getId_livro()
    {
        return $this->id_livro;
    }
    public function setId_livro($id_livro)
    {
        return $this->id_livro = $id_livro;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade)
    {
        return $this->quantidade = $quantidade;
    }
}


?>