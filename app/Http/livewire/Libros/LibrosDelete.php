<?php

namespace App\Http\Livewire\Libros;

use App\Models\libro;
use Livewire\Component;

class LibrosDelete extends Component
{
    public libro $libro;
    public function render()
    {
        return view('livewire.libros.libros-delete');
    }

    public function delete(){
        $this->libro->delete();
        return redirect(route('libros.index'));
    }
}
