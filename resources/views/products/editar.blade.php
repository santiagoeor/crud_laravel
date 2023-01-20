<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>

        <div class="content">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary" class="Sub">
                                <h3 class="card-title">Formulario de editar</h3>
                            </div>
                            @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                            @endif
                            <form action="{{ url('/productos/'.$id) }}" method="post">
                                @method("PUT")
                                @csrf
                            {{-- Los values son para que no se borren todos los campos si el usuario inserta un dato mal --}}
                            <div class="mb-3">
                                <label for="codigo" class="form-label">codigo</label>
                                <input type="text" name="codigo" id="codigo" class="form-control" value="{{old('codigo', $producto->codigo)}}">
                            </div>
                            @error('codigo')
                            {{$message}}
                            @enderror

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Descripcion</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $producto->producto)}}">
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" name="precio" id="precio" class="form-control" value="{{old('precio', $producto->precio)}}">
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" name="stock" id="stock" class="form-control" value="{{old('stock', $producto->stock)}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>

                            </form>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>

</body>

</html>