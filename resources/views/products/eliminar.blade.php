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

            <div class="col-md-3">

            </div>

            <!-- COLUMNA DE FORMULARIO  -->
            <div class="col-md-6">
                <!-- columna de contenido -->

                <!-- /.card-header -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Confirmar Eliminación </h3>
                    </div>
                    <!-- Para controles de formularios siempre usar etiqueta FORM -->
                    <form role="form" name="frm_prods" id="frm_prods" method="POST" action="{{ url('/productoselim/'.$id) }}" enctype="multipart/form-data">
                        @method("DELETE")
                        @csrf
                        <div class="card-body">
                            Usted va a eliminar el cliente con nombre
                            <b>{{ $producto->producto }}</b><br>
                            Presione <b>Aceptar</b> para eliminar. <br><br>

                            <b>Importante</b>. Una vez eliminado no podra recuperarse.
                        </div>

                        <div class="card-footer">
                            <button type="submit" id="btn_actualizar" class="btn btn-success">Aceptar</button>
                            <a href="listado_usuarios.php" class="btn btn-default">Cancelar</a>
                        </div>

                    </form> <!-- /.fin Form -->

                </div>

                <div class="col-md-3">

                </div>

            </div>
        </div>

</body>

</html>