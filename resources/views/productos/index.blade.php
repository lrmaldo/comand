@extends('layouts.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            
          </div>
          <div>

          <!-- Content Row -->
        

               <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabla de Imagenes de Carrusel</h6>
              <a href="{{ url('carrusel/create') }}"><button class="btn btn-success">Agregar Item</button></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                     
                      <th>Titulo</th>
                      <th>Descripción</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                     
                      <th>Titulo</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($carrusel as $registro)
                    <tr>
                      <td>{{$registro->id}}</td>
                      <td>{{$registro->titulo}}</td>
                      <td>{{$registro->descripcion}}</td>
                      <td> <img src="{{$registro->url_imagen}}" alt="no se agrego"  class="img-responsive"  width="120" height="120" > 
                      
                      </td>
                      <td> 
                                                <a href="{{ url('/carrusel/' . $registro->id . '/edit') }}" class="btn btn-info btn-xs"> Editar </a>
                                                        </td>
                     
                    </tr>
                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection
