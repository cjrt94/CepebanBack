@extends('layouts.app')

@section('content')

@section('title',"Modificar Programa")

@section('recipe')
    
@endsection

<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Opciones</h2>

                        <ul class="actions">
                            
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                     
                                    <li>
                                        <a href="">Refrescar</a>
                                    </li>
                                     
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Programas
                                <small>Modificar programas.
                                </small>
                            </h2>
                        </div>

                         <form action="{{route('updateProgram', $program->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            @method('PUT')
                            @csrf
 

                            <div class="card-body card-padding">
                                                       
                                <div class="row">

                                        <div class="col-lg-4 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required value="{{ $program->name }}">
                                                   
                                                </div>
                                            </div>
                                        </div> 

                                    
                                                                                                
                                </div>

                                
                                <div class="row">
                                    <div class="card-header">
                                            <h5>Descripción</h5>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 m-b-10">
                                     
                                         <div class="form-group">
                                            <div class="fg-line">
                                                <textarea required class="form-control" rows="10"
                                                          placeholder="Details of recipe" name="description" >{{$program->description}}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
 

                                <div class="text-right">

                                    <button type="submit" class="btn btn-danger">Modificar</button>

                                </div>

                            </div>

                         </form>
                       
                    </div>
                 
</section>

@endsection