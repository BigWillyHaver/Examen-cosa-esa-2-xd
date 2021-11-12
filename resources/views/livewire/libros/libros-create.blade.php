<div>
    <form wire:submit.prevent="crear">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="form-group">
                    <label>Nombre del libro</label>
                    <input wire:model="libro.titulo" type="text" class="form-control">
                    @error('libro.titulo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Editorial</label>
                    <input wire:model="libro.editorial" type="text" class="form-control">
                    @error('libro.editorial') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Autor</label>
                    <input wire:model="libro.autor" type="text" class="form-control">
                    @error('libro.direccion') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Fecha de Lanzamiento</label>
                    <input wire:model="libro.fecha_lanzamiento" type="text" class="form-control">
                    @error('libro.fecha_lanzamiento') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <br><br>
                <button class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('libros.index')}}" class="btn btn-secondary btn-sm">Regresar</a>

            </div>
    </form>

</div>
</div>
