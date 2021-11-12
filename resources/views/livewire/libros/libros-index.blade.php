<div>
    <div class="col-md d-flex justify-content-center mb-2">
        <a href="{{route('libros.create')}}" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Ingresar un libro nuevo</a>
    </div>

    <table class="table table-hover table-dark text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha de lanzamiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{ $libro->id }}</th>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->fecha_lanzamiento }}</td>
                    <td>
                        <button title="Mostrar mas" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                        <button title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i></button>
                        <a title="Eliminar" href="{{route('libros.delete', $libro)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $libros->links() }}


</div>
