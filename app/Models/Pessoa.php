<?php

namespace App\Models;

abstract class Pessoa
{
    protected $nome;
    protected $data_nascimento;
    protected $sexo;

    public function __construct(string $nome, string $data_nascimento, string $sexo)
    {
        $this->setNome($nome);
        $this->data_nascimento = $data_nascimento;
        $this->sexo = $sexo;
    }

    protected function setNome(string $nome)
    {
        $this->nome = "{$nome} - Models";
    }

    public function getNome()
    {
        return $this->nome;
    }
}
