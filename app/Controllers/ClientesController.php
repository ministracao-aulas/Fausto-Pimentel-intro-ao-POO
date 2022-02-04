<?php

namespace App\Controllers;

class ClientesController
{
    /**
     * function index
     *
     * @return json
     */
    public function index()
    {
        header('Content-Type: application/json');

        echo json_encode([
            [
                'id' => 154,
                'name' => 'Fulano',
                'email' => 'fulano@mail.com',
            ],
            [
                'id' => 155,
                'name' => 'Beltrano',
                'email' => 'beltrano@mail.com',
            ],
            [
                $_POST + $_GET + $_REQUEST
            ]
        ]);
    }

    /**
     * function store
     *
     * @return void
     */
    public function store()
    {
        header('Content-Type: application/json');

        // $data = json_decode(file_get_contents('php://input'), true);
        // $data['time'] = date('Y-m-d H:i:s');

        $data = $_POST + $_GET + $_REQUEST;
        echo json_encode($data);
    }

    /**
     * function import
     *
     * @return void
     */
    public function import()
    {
        header('Content-Type: application/json');
        $valid_types = [
            'image/jpeg',
        ];

        $file_extension     = $_FILES['planilha']['type'] ?? null;
        $data['files']      = $_FILES;
        $data['message']    = in_array($file_extension, $valid_types) ? 'ok': 'fail';
        echo json_encode($data);
    }
}
