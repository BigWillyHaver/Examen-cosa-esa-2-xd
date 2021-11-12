<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function crear(){
        $libro = new libro();
        $libro->titulo = 'Shashumga';
        $libro->editorial = 'curifeos';
        $libro->autor = 'eeeieiie';
        $libro->fecha_lanzamiento = '27/12/2012';
        $libro->save();
    }

    public function index(){
        $libros = libro::paginate(10);
        return view('libros.index', compact('libros'));
    }
}
