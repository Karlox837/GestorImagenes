<?php namespace GestorImagenes\Http\Controllers;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function getEditarPerfil()
    {
        return 'Mostrando formulario de perfil'; 
    }

    public function postEditarPerfil()
    {
        return 'Generando actualizacion de perfil'; 
    }
    
    public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
