<?php

namespace App\Http\Livewire\Libros;

use App\Models\libro;
use Livewire\Component;

class LibrosIndex extends Component
{
    public function render()
    {
        $libros = libro::paginate(10);
        return view('livewire.libros.libros-index', compact('libros'));
    }
}
