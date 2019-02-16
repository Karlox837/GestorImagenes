<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function getIndex()
    {
        return 'Mostrando fotos del usuario'; 
    }

	public function getCrearFoto()
	{
		return 'formulario de crear fotos';
    }
    public function postCrearFoto()
	{
		return 'Almacenando foto';
	}
    public function getActualizarFoto()
	{
		return 'formulario de actualizar fotos';
    }
    public function postActualizarFoto()
	{
		return 'Actualizando foto';
	}

    public function getEliminarFoto()
	{
		return 'formulario de eliminar fotos';
    }
    public function postEliminarFoto()
	{
		return 'Eliminar foto';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
