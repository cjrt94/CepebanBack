<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="img/x-icon" href="imagenes/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />


    <title>{{$contents[0]->title_page}}</title>

  </head>
  <body>

  <section class="container-fluid h-100 principal">

      <div class="row btn-down" style="z-index: 100">
        <a href="#careers"><img src="{{('front/imagenes/flecha-abajo.png')}}"></a>
      </div>

      <div class="row encabezado" style="z-index: 99">
        <div class="col-xs-2 col-sm-4 col-md-6  col-lg-7 logo">
          <img src="{{asset('front/imagenes/logo.png')}}" class="img-fluid">
        </div>
        <div class="col-xs-9 col-sm-8 col-md-6 col-lg-5 d-none d-sm-none d-md-block d-lg-block">
          <ul class="nav justify-content-end menu">
            <li class="nav-item">
              <a class="nav-link" href="#">IR A LA WEB ANTERIOR</a>
            </li>

          </ul>
        </div>
      </div>
      <!---->
      <div class="row h-100 caja-alto" style="z-index: -1">
        <div class="col-md-12 col-lg-7 h-100 bloq-izq">
          <div class="row h-100 align-items-end">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade mostrador w-100" data-ride="carousel" data-interval="4000">
                          <!--
                          <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          </ol>
                          -->
                          <div class="carousel-inner text-center h-100">
                            <div class="carousel-item active">
                              <img src="{{asset('front/imagenes/octopus-1.png')}}"    >
                            </div>
                            <div class="carousel-item ">
                              <img src="{{asset('front/imagenes/octopus-2.png')}}"    >
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
        <div class="col-md-12 col-lg-5 h-100 bloq-der">
          <div class="row h-100 align-items-center">
            <div class="container">
                    <h2>REGÍSTRATE</h2>
                    <p>Elige el curso, programa o carrera por el que quieras preguntar y separa tu vacante.</p>
                    <br>
                    <form class="w-100"  action="{{route('createLead')}}" method="post">

                    @method('POST')
                    @csrf

                    <div class="form-group">
                      <label for="nombres">Nombres *</label>
                      <input type="text" class="form-control" id="nombres" required aria-describedby="Nombres" name="name">
                    </div>

                    <div class="form-group">
                      <label for="correo">Correo *</label>
                      <input type="email" class="form-control" id="correo" required aria-describedby="Correo" name="email">
                    </div>

                    <div class="form-group">
                      <label for="carrera">Sedes *</label>
                      <select class="form-control"  name="venue" onchange="javascript:filter(this.value);">
                        <option selected="checked">SELECCIONAR...</option>
                        @foreach($venues as $venue)
                          <option value="{{$venue->id}}" >{{$venue->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="carrera">Carreras / Cursos o Programas*</label>
                      <select class="form-control" id="pandc" name="type">
                        <option selected="checked">SELECCIONAR...</option>

                        <optgroup label="Carreras">
                          @foreach($careers as $career)

                                <option value="{{$career->name}}">{{$career->name}}</option>

                         @endforeach
                        </optgroup>

                        <optgroup label="Cursos o Programas">
                          @foreach($programs as $program)

                                <option value="{{$program->name}}">{{$program->name}}</option>

                         @endforeach
                        </optgroup>


                      </select>
                    </div>


                    <div class="row">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>

                        </div>
                      </div>
                    </div>

                      </form>

                      <br>
                    <p>Síguenos en todas nuestras redes y entérate de todo lo que tenemos para ti.<p>
                      <br>
                    <div class="caja">
                      <ul class="nav redes-sociales justify-content-center">
                         <li class="nav-item align-self-center">
                            <a class="nav-link" href="{{$contents[0]->social_fa}}"><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" href="{{$contents[0]->social_ins}}"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" href="{{$contents[0]->social_yt}}"><i class="fa fa-twitter"></i></a>
                        </li>
                      </ul>
                    </div>


                  </div>
          </div>

        </div>



      </div>

      </div>
      <!---->
  </section>

  <section class="container-fluid cursos" id="careers">
    <div class="row h-100">

      <div class="col-md-12 col-lg-6 carreras">
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

  <script>

    function filter(type){


      $.ajax({
      // la URL para la petición
      url : 'https://cepeban.herokuapp.com/venue/'+type,

      // la información a enviar
      // (también es posible utilizar una cadena de datos)
      data : { id : 123 },

      // especifica si será una petición POST o GET
      type : 'GET',

      // el tipo de información que se espera de respuesta
      dataType : 'json',

      // código a ejecutar si la petición es satisfactoria;
      // la respuesta es pasada como argumento a la función
      success : function(json) {

        $('#pandc').empty();

         careers= json['careers'];
         programs= json['programs'];


          $('#pandc').append("<optgroup label='Carreras'>");

         $.each(careers, function(idx, obj) {
             console.log(obj.name);

              var option = document.createElement("option");
              option.value = obj.name;
              option.text = obj.name;

             $('#pandc').append(option);
          })

          $('#pandc').append("</optgroup>");
          $('#pandc').append("<optgroup label='Programas'>");


          $.each(programs, function(idx, obj) {
              console.log(obj.name);

              var option = document.createElement("option");
              option.value= obj.name;
              option.text = obj.name;

             $('#pandc').append(option);

           })
          $('#pandc').append("</optgroup>");

      },

      // código a ejecutar si la petición falla;
      // son pasados como argumentos a la función
      // el objeto de la petición en crudo y código de estatus de la petición
      error : function(xhr, status) {
          alert('Disculpe, existió un problema');
          console.log(status);
          console.log(xhr)
      },

      // código a ejecutar sin importar si la petición falló o no
      complete : function(xhr, status) {

      }
      });

    }

  </script>

  <script type="text/javascript">

  $(function(){

    $(document).ready(function() {
    $('a[href^="#"]').click(function() {
      var destino = $(this.hash);
      if (destino.length == 0) {
        destino = $('a[name="' + this.hash.substr(1) + '"]');
      }
      if (destino.length == 0) {
        destino = $('html');
      }
      $('html, body').animate({ scrollTop: destino.offset().top }, 500);
      return false;
    });
  });


  });


  </script>


</html>
