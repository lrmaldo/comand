@extends('layouts.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            
          </div>
          <div>

          <!-- Content Row -->
        

               <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Datos del negocio</h6>
           {{--    <a href="{{ url('carrusel/create') }}"><button class="btn btn-success">Agregar Item</button></a> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    {{--   <th>Id</th> --}}
                     
                      <th>Nombre del Negocio</th>
                      <th>Descripción</th>
                      <th>Teléfono</th>
                      <th>Correo Eletronico</th>
                      <th>Facebook</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     {{--  <th>Id</th> --}}
                     
                     <th>Nombre del Negocio</th>
                      <th>Descripción</th>
                      <th>Teléfono</th>
                      <th>Correo Eletronico</th>
                      <th>Facebook</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($tienda as $registro)
                    <tr>
                     
                      <td>{{$registro->nombre}}</td>
                      <td>{{$registro->descripcion}}</td>
                      <td>{{$registro->telefono}}</td>
                      <td>{{$registro->correo}}</td>
                      <td>{{$registro->facebook}}</td>
                      {{-- <td> <img src="{{$registro->url_imagen}}" alt="no se agrego"  class="img-responsive"  width="120" height="120" > 
                      
                      </td> --}}
                      <td> 
                                                <a href="{{ url('/datos/' . $registro->id . '/edit') }}" class="btn btn-info btn-xs"> Editar </a>
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
