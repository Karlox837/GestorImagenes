<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
    public function getIndex()
    {
        return 'Mostrando albumes del usuario';
    }

	public function getCrearAlbum()
	{
		return 'formulario de crear Albums';
    }
    public function postCrearAlbum()
	{
		return 'Almacenando Album';
	}

    public function getActualizarAlbum()
	{
		return 'formulario de actualizar Albums';
    }
    public function postActualizarAlbum()
	{
		return 'Actualizando Album';
	}

    public function getEliminarAlbum()
	{
		return 'formulario de eliminar Albums';
    }
    public function postEliminarAlbum()
	{
		return 'Eliminar Album';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
