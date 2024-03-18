<?php 

namespace App\Controllers;
use app\Models\ClienteModel;

class clienteController extends BaseController 
{
    public function listado() {
        $modelo = new ClienteModel(); 
        $datos ['clientes'] = $modelo->findAll(); 

        return view('cliente/listado', $datos); 
    }
// para borrar un cliente 
    public function delete($id = null) {
        $modelo = new ClienteModel(); 
        $modelo->delete($id); 

        return redirect() ->to ('/clientes'); 
    } 
    public function crear() {
        return view('clientes/nuevo');
    }
    public function guardar() {
        $modelo = new ClienteModel();
        $datos = [
            'nombres' => $this -> request -> getVar('nombres'),
            'apellidos' => $this -> request -> getVar('apellidos'),
            'cedula' => $this -> request -> getVar('cedula'),
            'telefono' => $this -> request -> getVar('telefono'),
            'email' => $this -> request -> getVar('email'),
        ];
        $modelo->insert($datos); 
        return redirect() -> to('/clientes'); 
    }
}