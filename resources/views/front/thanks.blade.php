<!DOCTYPE html>
<html>
<head>
	<title>Gracias</title>

	<script type="text/javascript">
  setTimeout(function(){
      history.back(1)
  }, 2500);
</script>

  <style media="screen">
  body, html{
    display: block;
    width: 100%;
    height: 100%;
    background: #eb1224;
  }
  .cuerpo{
    display: block;
    width: 100%;
      height: 100%;
      position: relative;
  }
      .gracias{
          display: block;
          position: absolute;
          z-index: 5;
          width: 90%;
          max-width: 820px;
          color: #fff;
          text-align: center;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          		-moz-transform: translate(-50%, -50%);
          		-ms-transform: translate(-50%, -50%);
          		-o-transform: translate(-50%, -50%);
          		-webkit-transform: translate(-50%, -50%);
      }

      .gracias h1{
        font-family: futurab-1, futurab-2, arial;
        font-size: 27px;
        padding: 10px;
      }

      .gracias img{
        display: block;
        margin: 0 auto;
        margin-bottom: 25px;
      }

      .gracias a{
          display: inline-block;
          margin: 0 auto;
          color: #fff;
          background: #000;
          text-decoration: none;
          padding: 10px;
          border-radius: 5px;
          margin-top: 10px;
      }

      .gracias a:hover{
          color: #000;
          background: #fff;
      }

      .gracias a i{
          margin-right: 5px;
      }

      @media screen and (max-width:1024px){
          .gracias{
              position: relative;
          }
      }

  </style>
</head>
<body>
	<div class="container-fluid cuerpo">

        <div class="gracias">
            <h1>TU MENSAJE FUE ENVIADO,<br>
            ¡Gracias!</h1>
            <br>
            <br>
            <img src="http://www.octopus.edu.pe/front/imagenes/logo.png">
            <a href="javascript:history.back(1)">VOLVER</a>
        </div>

    </div><!--fin cuerpo-->
</body>
</html>
