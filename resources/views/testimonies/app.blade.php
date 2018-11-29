@extends('layouts.app')

@section('content')

@section('title',"Modificar Testimonios")


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
                            <h2>Testimonios
                                <small>Modificar testimonios.
                                </small>
                            </h2>
                        </div>

                         <form action="{{route('updateTestimony', $testimony->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            @method('PUT')
                            @csrf
 

                            <div class="card-body card-padding">
                                                       
                                <div class="row">

                                        <div class="col-lg-10 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="video_1" class="form-control" placeholder="Testimonio 1" required value="{{ $testimony->video_1 }}">
                                                   
                                                </div>
                                            </div>
                                        </div> 

                                    
                                                                                                
                                </div>

                                 <div class="row">

                                        <div class="col-lg-10 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="video_2" class="form-control" placeholder="Testimonio 2" required value="{{ $testimony->video_2 }}">
                                                   
                                                </div>
                                            </div>
                                        </div> 

                                    
                                                                                                
                                </div>

                                 <div class="row">

                                        <div class="col-lg-10 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="video_3" class="form-control" placeholder="Testimonio 3" required value="{{ $testimony->video_3 }}">
                                                   
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