<?php

namespace App\Http\Livewire\Libros;

use App\Models\libro;
use Livewire\Component;

class LibrosCreate extends Component
{
    public libro $libro;

    public function mount(){
        $this->libro = new libro();
    }

    public function render()
    {
        return view('livewire.libros.libros-create');
    }

    public function crear(){

        $this->validate();
        $this->libro->save();
        return redirect(route('libros.index'));
    }

    //validaciones, son importantes, aunque no las ocupes validar, tu ponlas xd
    protected function rules(){
        return[
            'libro.titulo'=>'required|string',
            'libro.editorial' =>'required|string',
            'libro.autor'=>'required|string',
            'libro.fecha_lanzamiento'=>'string|required',
        ];
    }

}
