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
                <div class="col-md-2">
                    <a href="productos/create" class="btn btn-primary"> Crear </a>
                </div>
                <div class="col-md-8">
                    <!-- fin columna de contenido -->
                    <form name="frm_filtro" id="frm_filtro" method="GET" action="{{ url('productos') }}">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4 class="card-title">Filtrar Datos</h4>
                            </div>
                            <!-- /.card-header -->

                            <!-- Para controles de formularios siempre usar etiqueta FORM -->
                            <div class="card-body">
                                <label for="txtBuscar">Nombre del producto</label>
                                <div class="input-group input-group-sm">
                                    <input type="text" id="busqueda" name="busqueda" class="form-control">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-success">Buscar</button>
                                        <a href="#" class="btn btn-info">Ver Todo</a>
                                    </span>
                                </div>
                            </div> <!-- /.fin card-body -->
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div> <!-- ./ fin col -->

              </div>

              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                
            <table class="table table-primary table-hover">
                <thead>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th style="width: 40px">ACCIÓN</th>
                </thead>
            
            <tbody>
                @foreach ($lista as $item)
                <tr>
                    <th scope="row">{{ $item->codigo }}</th>
                    <td>{{ $item->producto }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="productos/{{ $item->id }}/edit" class="btn btn-primary">Editar</a>
                        <a href="productos/{{ $item->id }}/elim" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div>
  </div>
        </div>

    </body>

</html>
