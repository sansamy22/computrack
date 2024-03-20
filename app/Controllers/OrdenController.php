<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class OrdenController extends BaseController
{
    public function listado()
    {
        return view('ordenes/listado');
    }
}
