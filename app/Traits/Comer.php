<?php

namespace App\Traits;

trait Comer
{
    /**
     * function coma
     *
     * @param string $comida
     * @return string
     */
    public function coma(string $comida)
    {
        return $this->nome;
        return "Comendo {$comida} da trait...";
    }
}
