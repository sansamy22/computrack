<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use app\Models\ClienteModel;
use CodeIgniter\HTTP\ResponseInterface;

class DispositivoController extends BaseController
{
    public function index()
    {
        //
    }

    public function crear() {
        return view('dispositivos/crear');
    }

    public function obtenerClientes() {
        $clientesModel = new ClienteModel(); 
        $cliente = $clientesModel->findAll();
    }
}