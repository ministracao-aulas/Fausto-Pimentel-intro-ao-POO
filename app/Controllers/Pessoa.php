<?php

namespace App\Controllers;

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
        $this->nome = "{$nome} - Controllers";
    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * function coma
     *
     * @param string $comida
     * @return string
     */
    public function coma(string $comida)
    {
        return "Comendo {$comida} direto da classe pai...";
    }
}
