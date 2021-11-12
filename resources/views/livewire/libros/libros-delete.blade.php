<div>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Nombre del libro: {{$libro->titulo}}</h5>
          <p class="card-text">Editorial: {{$libro->editorial}}</p>
          <p class="card-text">Autor: {{$libro->autor}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('libros.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
