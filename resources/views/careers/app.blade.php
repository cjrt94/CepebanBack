@extends('layouts.app')

@section('title','Carreras')

@section('content')


@section('')
    active
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
                                        <a href=""">Refrescar</a>
                                    </li>
                                     
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Carreras
                                <small>Listado de carreras.
                                </small>
                            </h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>

                                	  <th  data-column-id="id" scope="col">#</th>
								      <th  data-column-id="name" scope="col">Nombre</th>
								      <th  data-column-id="portion" scope="col">Descripción</th>
                                      <th  data-column-id="id" scope="col"> Editar </th>
								       

                                </tr>
                                </thead>
                                <tbody>
                                                                 
                                @foreach($careers as $career)
								    <tr>
								      <td scope="row">{{$career->id}}</td>
								      <td >{{$career->name}}</td>
								      <td>{{$career->description}}</td>
                                       <td><button class="btn btn-icon command-edit waves-effect waves-circle" 
                                        onclick="window.location.href='{{route('editCareer',$career->id)}}'" ><span class="zmdi zmdi-edit"></span></button></td>
								       
 
								    </tr>
								@endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
</section>

@endsection