<?php
declare(strict_types=1);
require_once __DIR__.'/../autoload.php';

$clientes = [
    154 => [
        'id' => 154,
        'name' => 'Fulano',
        'email' => 'fulano@mail.com',
    ],
    155 => [
        'id' => 155,
        'name' => 'Beltrano',
        'email' => 'beltrano@mail.com',
    ],
];

$cliente_id = explode('--id=', $argv[2])[1] ?? null;

$cliente_data = $clientes[$cliente_id] ?? null;
var_export($cliente_data);
