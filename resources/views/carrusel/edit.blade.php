@extends('layouts.app')

@section('content')

<h1 class="mt-4">Editar Banner</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/bannerp">Banner</a></li>
                            <li class="breadcrumb-item active">Editar</li>
                        </ol>


                        
                        <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('bannerp.update', $registro->id) }}">
					  	<input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-xs btn-info">
                      Guardar
                    </button>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                        Eliminar
                                                        </button>
                  </div>
                </div>
             
                
                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Imagen de portada:*</label>
                  </div>
                  <div class="col-md-8">
                  <input type="file" id="url_imagen"  class="form-control" name="url_imagen"  required >
                  </div>
                </div> 

                  
                             
              </form>



              
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Esta seguro que desea eliminar este Banner?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                                <form class="form-horizontal" role="form" method="post" action="{{ url('/bannerp/destroy/' . $registro->id ) }}">
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                <input class="btn btn-danger btn-xs" type="submit" value="Eliminar" />
                                                                            
                                                                            </form>
                                                                                
                                                                                
                                                                            </div>
                                                                            </div>
  

@endsection