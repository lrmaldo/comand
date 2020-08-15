@extends('layouts.app')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h1 class="mt-4">Crear Carrusel</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/carrusel">Carrusel</a></li>
                <li class="breadcrumb-item active">Crear</li>
            </ol>



            <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/home/store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-lg btn-circle btn-primary">
                            Crear
                        </button>
                        <!--button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                    Eliminar
                                    </button-->
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Título del producto:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="titulo" class="form-control" name="titulo" value=""
                            placeholder="Escribe un título" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Precio:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="precio" class="form-control" name="precio" value=""
                            placeholder="Escribe una pequeña descripción" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Descripción:*</label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required>

      </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Imagen del producto:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" id="url_imagen" class="form-control" name="url_imagen" required>
                    </div>
                </div>



            </form>

        </div>
    </div>




@endsection
