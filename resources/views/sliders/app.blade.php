@extends('layouts.app')

@section('content')

@section('title','Slider')

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
                            <h2>Slider
                                <small>Modificar imágenes.</small>
                            </h2>
                        </div>

                     
                            <div class="card-body card-padding">

                              

                                    <form action="{{route('updateSlider')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                           @method('PUT')
                                            @csrf

                                      @foreach($sliders as $slider)

                                      <input type="hidden" name="id[]" value="{{$slider->id}}" >                                            
                                                                                            
                                         <div class="row">

                                           

                                            <div class="col-lg-6 col-sm-12 m-b-10 ">

                                                <img src="{{ Storage::disk('public')->url($slider->image) }}" style="width: 300px; height: 277px">
                                                    
                                                
                                            </div>
                                            
                                            <div class="col-lg-6 col-sm-12 m-b-10">

                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                    <div>
                                                        <span class="btn btn-info btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="image{{$slider->id}}" >
                                                        </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        @endforeach

                                         <div class="text-right">

                                         <button type="submit" class="btn btn-danger">Modificar</button>

                                    </div>

                                    </form>

                         
                                     
                            </div>

                         
                       
                    </div>
                 
</section>

@endsection