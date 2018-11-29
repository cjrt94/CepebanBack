@extends('layouts.app')

@section('content')

@section('title','Cotenidos')

@section('')
    
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
                            <h2>Cotenido
                                <small>Contenido principal de la página.
                                </small>
                            </h2>
                        </div>

                         <form action="{{route('updateContent',$content->id)}}" method="post" accept-charset="utf-8">
                           @method('PUT')
                            @csrf
                            <div class="card-body card-padding">
                                                       
                                        <div class="row">
                                          
                                                <div class="col-lg-10 col-sm-12 m-b-20">

                                                     <div class="input-group">
                                                        <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                        <div class="fg-line">
                                                            <input type="text" name="title_page" class="form-control" placeholder="Nombre de la página" value=" {{$content->title_page}}" required>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        </div>

                                        <div class="row">
                                            
                                        
                                                <div class="col-lg-10 col-sm-12 m-b-20">

                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                        <div class="fg-line">
                                                            <input type="text" name="social_fa" class="form-control" placeholder="Facebook" value=" {{$content->social_fa}}" required>
                                                           
                                                        </div>
                                                    </div>

                                                </div> 

                                                 <div class="col-lg-10 col-sm-12 m-b-20">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="zmdi zmdi-pizza"></i></span>
                                                        <div class="fg-line">
                                                            <input type="text" name="social_ins" class="form-control" placeholder="Twitter" value=" {{$content->social_ins}}" required>
                                                            
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-lg-10 col-sm-12 m-b-20">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="zmdi zmdi-watch"></i></span>
                                                        <div class="fg-line">
                                                            <input type="text" name="social_yt" class="form-control" placeholder="Youtube" value=" {{$content->social_yt}}" required>
                                                           
                                                        </div>
                                                    </div>
                                                </div> 


                                        </div>


                                        <div class="row">

                                           <div class="card-header">
                                                <h5>Testimonio</h5>
                                            </div>

                                           
                                            <div class="col-lg-10 col-sm-12 m-b-20">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                        <div class="fg-line">
                                                    <input type="text" name="title_test" class="form-control" placeholder="Titulo" required value="{{$content->title_test}}">
                                                           
                                                    </div>

                                                </div>
                                                    
                                            </div>

                                             <div class="col-lg-10 col-sm-12 m-b-20">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                        <div class="fg-line">
                                                    <input type="text" name="subtitle_test" class="form-control" placeholder="Subtitulo" required value="{{$content->subtitle_test}}">
                                                           
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