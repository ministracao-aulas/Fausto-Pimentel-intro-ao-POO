<?php

namespace App\Models;

use App\Interfaces\Botao;

class Desligar implements Botao
{
    /**
     * function acao
     *
     * @return
     */
    public function acao() :string
    {
        return true;
    }
}
