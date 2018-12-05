<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="img/x-icon" href="imagenes/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />


    <title>{{$contents[0]->title_page}}</title>



   <script src="{{asset('front/js/youtube-modal-bootstrap.js')}}" type="text/javascript"></script>

  </head>
  <body>




  <section class="container-fluid h-100 principal">
      <div class="row btn-down">
        <a href=""><img src="{{asset('front/imagenes/flecha-abajo.png')}}"></a>
      </div>
      <div class="row encabezado">
        <div class="col-xs-2 col-sm-4 col-md-6 logo">
          <img src="{{asset('front/imagenes/logo.png')}}" class="img-fluid">
        </div>
        <div class="col-xs-9 col-sm-8 col-md-6">
          <ul class="nav justify-content-center menu">
            <li class="nav-item align-self-center">
              <a class="nav-link" href="#">INICIO</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link" href="#">CARRERAS Y PROGRAMAS</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row h-100 justify-content-center align-items-center caja-alto">
          <div class="container col-md-11">
            <div class="row">
              <div class="col-md-12 col-lg-7 bloq-izq">
                <div class="row h-100">
                  <div class="container col-md-12 h-100">
                    <div class="row h-100 align-items-end">
                      <div class="col-md-12 caja">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade mostrador" data-ride="carousel" data-interval="4000">
                          <!--
                          <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          </ol>
                          -->
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{asset('front/imagenes/octopus-1.png')}}" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('front/imagenes/octopus-2.png')}}" class="img-fluid">
                            </div>
                          </div>
                          <!--
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                          </a>
                          -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-5 bloq-der">
                <div class="row">
                  <h2>REGÍSTRATE</h2>
                  <p>Elige el curso, programa o carrera por el que quieras preguntar y separa tu vacante.</p>
                  <br>
                </div>
                <div class="row">
                  <form class="w-100">
                    <div class="form-group">
                      <label for="nombres">Nombres *</label>
                      <input type="email" class="form-control" id="nombres" aria-describedby="Nombres">
                    </div>
                    <div class="form-group">
                      <label for="correo">Correo *</label>
                      <input type="text" class="form-control" id="correo" aria-describedby="Correo">
                    </div>

                    <div class="form-group">
                      <label for="carrera">Sedes *</label>
                      <select class="form-control" id="carrera">
                        <option selected="checked">SELECCIONAR...</option>
                        @foreach($venues as $venue)
                          <option value="{{$venue->id}}">{{$venue->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="carrera">Carrera *</label>
                      <select class="form-control" id="carrera">
                        <option selected="checked">SELECCIONAR...</option>
                        <option>ADMINISTRACIÓN BANCARIA</option>
                        <option>ADMINISTRACIÓN DE EMPRESAS</option>
                        <option>CONTABILIDAD FINANZAS Y AUDITORÍA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="programa">Curso o programa *</label>
                      <select class="form-control" id="programa">
                        <option selected="checked">SELECCIONAR...</option>
                        <option>CAJERO PROMOTOR DE SERVICIOS  FINANCIEROS Y COMERCIALES</option>
                        <option>CAJERO COMERCIAL</option>
                        <option>ASISTENTE DE GERENCIA</option>
                        <option>ASISTENTE CONTABLE</option>
                        <option>GESTOR DE VENTAS</option>
                        <option>GESTOR DE CRÉDITO Y COBRANZAS</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-primary">Separar Vacante</button>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-primary">Pedir Información</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="container">
                        <p>Descubre más de todos nuestros cursos, programas y carreras. ¡No olvides registrarte y asegura tu vacante al éxito!</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="container h-100">
                        <div class="row h-100 justify-content-center align-items-center">
                          <div class="caja">
                            <ul class="nav redes-sociales">
                               <li class="nav-item align-self-center">
                                  <a class="nav-link" href=""><i class="fa fa-facebook-f"></i></a>
                              </li>
                              <li class="nav-item align-self-center">
                                  <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                              </li>
                              <li class="nav-item align-self-center">
                                  <a class="nav-link" href=""><i class="fa fa-youtube"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>


  <section class="container-fluid h-100 cursos">
    <div class="row h-100">
      <div class="col-md-12 col-lg-6 h-100 carreras">
        <div class="row">
          <h1>Contamos con <span>3 carreras</span> de 3 años de duración.</h1>
        </div>

        @foreach($careers as $career)
        <div class="row bloq">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <img src="{{asset('front/imagenes')}}/{{$career->icon}}" class="img-fluid">
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="row align-items-center h-100">
              <div class="container">
                <div class="row">
                  <h2>{{$career->name}}</h2>
                  <p>{{$career->description}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach



      </div>

      <div class="col-md-12 col-lg-6 h-100 programas">
        <div class="row">
          <h1>Contamos con <span>6 programas</span> de rápida inserción laboral.</h1>
        </div>
        <div class="row ">

          @foreach($programs as $program)
          <!--////////-->
          <div class="col-sm-12 col-md-6 col-lg-6 bloq">
            <div class="row">
              <div class="col-sm-3 col-md-4 col-lg-4">
                <img src="{{asset('front/imagenes')}}/{{$program->icon}}" class="img-fluid">
              </div>
              <div class="col-sm-9 col-md-8 col-lg-8">
                <div class="row align-items-center h-100">
                  <div class="container">
                    <div class="row">
                      <h2>{{$program->name}}</h2>
                      <p>{{$program->description}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--////////-->
          @endforeach

        </div>
      </div>

    </div>
  </section>

  <section class="container-fluid h-100 testimoniales">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <h1>TESTIMONIALES</h1>
        <p>Nuestros alumnos y egresados comparten con ustedes el orgullo de estudiar con nosotros.</p>
        <p><span>Dale play y descúbrelos.</span></p>
        <br><br>
        <div class="row slider">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <!--
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
              </ol>
              -->
              <div class="carousel-inner d-none d-sm-none d-md-none d-lg-block">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

              </div>

              <!--responsive 2-->

              <div class="carousel-inner d-none d-sm-none d-md-block d-lg-none">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

              </div>

              <!--responsive 3-->

              <div class="carousel-inner d-block d-sm-block d-md-none d-lg-none">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                          <img class="d-block w-100" src="//placehold.it/750x500/fff" alt="1 slide">
                        </button>
                    </div>
                  </div>
                </div>

              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid h-100 convenios">
    <div class="row bloq justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <h1>CONVENIOS</h1>
        <p>Miles de egresados trabajan ya en el sector de la banca y finanzas gracias a nuestros convenios</p>
        <br>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <img src="{{asset('front/imagenes/logo-bbva.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/bcp.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/banbif.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/falabella.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/sodimac.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/ripley.png')}}" alt="">
              </li>
              <li class="nav-item">
                <img src="{{asset('front/imagenes/tottus.png')}}" alt="">
              </li>
            </ul>
            <br>
            <p>y en más de 300 empresas líderes a nivel nacional.</p>
      </div>
    </div>
    <div class="row pie justify-content-center align-items-center">
      <div class="col-md-12 text-center">
        <img src="{{asset('front/imagenes/logo-cepeban.png')}}" alt="" class="img-fluid">
      </div>
    </div>
  </section>


  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- 16:9 aspect ratio -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
      </div>


      </div>

    </div>
  </div>

</div>
<!-- Fin Modal -->

  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>



  </body>

  <script src="{{asset('front/js/wow.js')}}"></script>
  <script>
    new WOW().init();
  </script>
</html>
