<?php

namespace App\Controllers;

use App\Traits\Comer;

class Funcionario extends Pessoa
{
    use Comer;

    protected $cargo;
    protected $pontos = [];
    protected bool $admitido = true;
    protected int $salario_vezes_a_base;//!! ALVO
    protected static $salario_base = '1000';

    public function __construct(string $nome, string $data_nascimento, string $sexo, int $salario_vezes_a_base)
    {

        $this->salario_vezes_a_base = $salario_vezes_a_base;

        parent::__construct($nome, $data_nascimento, $sexo);
    }

    /**
     * Undocumented function
     *
     * @param integer $quantas_vezes_o_minimo
     * @return void
     */
    public function aumento(int $quantas_vezes_o_minimo)
    {
        $this->salario_vezes_a_base = $quantas_vezes_o_minimo;
    }

    /**
     * Undocumented function
     *
     * @param string $cargo
     * @return void
     */
    public function setCargo(string $cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function baterPonto()
    {
        if(!$this->admitido)
        {
            throw new Exception("Funcionário demitido  não bate ponto", 1);
        }

        $this->pontos[] = date('Y-m-d H:i:s');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function demitir()
    {
        $this->admitido = false;
    }

    public function getPontos()
    {
        return $this->pontos ?? [];
    }

    public function pagar()
    {
        return static::getCalculoSalario($this->salario_vezes_a_base);
    }

    public static function getSalarioBase()
    {
        return static::$salario_base;
    }

    public static function getCalculoSalario(int $quantas_vezes_o_minimo = 1)
    {
        $base_calculo = static::$salario_base * $quantas_vezes_o_minimo;
        $pagar = $base_calculo - ($base_calculo/100*10);
        return $pagar;
    }
}
