<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>IBM Automotriz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="img/logo.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <div class="alert alert-dark fixed-bottom" role="alert" style="margin: 0!important;" id="cookiesAlert">
        <div class="row">
          <div class="col-10">
            Usamos cookies en este sitio para proveerte la mejor experiencia, <a href="Política_de_privacidad.pdf" target="_blank">Leer más</a>. Al permanecer en el sitio asumimos que aceptas la politíca de uso y privacidad. 
          </div>
          <div class="col-2">
          <button id="cerrarCookies" type="button" class="close" aria-label="Close" style="margin: 0 auto!important;">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        </div>
      </div>
      <!-- Barra de navegación -->
        <nav class="navbar fixed-top sticky-top navbar-expand-lg navbar-light color" id="nav_bar">
          <div class="container"> 
            <a class="navbar-brand fixed-top sticky-top" href="index.html">
              <img src="./img/Jorge/logo.png" width="32" height="32" class="d-inline-block align-top" style="margin-top: 4px;">
              <h2 class="titulo" href="index.html">IBM Automotriz</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
                  <li class="nav-item">
                    <a class="m link-negro" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="m link-negro" href="acercade.html">Acerca de nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="m link-negro" href="contacto.php">Contacto</a>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
      <!-- Contenido -->
        <div class="jumbotron jumbotron-fluid" id="jumboContacto">
            <div class="container">
                <img class="card-img-top" src="img/Jorge/logo.png" style="width: 125px; height: 125px; margin: 60px 0 30px 0;">
                <h1 style="color:#000!important;">Contacto</h1>
            </div>
        </div>
        <!-- Sección () -->
        <section class="container">
            <h3 style="text-align: center;">Formulario para enviar correo</h3>
            <form action="correo.php" method="POST"> 
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Jorge Gónzalez" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ej:  nombre@ejemplo.com" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ej: 3301020304" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <select class="form-control" id="asunto" name="asunto" required>
                                <option value="Cotizacion">Quiero una cotización</option>
                                <option value="Duda">Tengo una duda</option>
                                <option value="Estado">Quiero saber el estado de mi vehiculo</option>
                                <option value="Otro">Otro asunto</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="otroAsunto">Otro asunto</label>
                            <input type="text" class="form-control" id="otroAsunto" name="otroAsunto" placeholder="Ej: Quiero preguntar algo" disabled>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="10" placeholder="Ej: Quiero saber el costo de balancear mi jetta clásico modelo 2013"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" style="text-align: center;">
                        <a href="Política_de_privacidad.pdf" target="_blank">Política de privacidad</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button style="max-width:350px;margin:20px auto 0 auto;" type="submit" class="btn btn-primary btn-block">Enviar correo</button>
                    </div>
                </div>
            </form>
        </section>

      <!-- Footer -->
        <div class="footer" style="margin-top: 60px;">
          <div class="copy">
            <p> IBM Automotriz. Todos los derechos reservados.</p>
          </div>
        </div>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.bundle.min.js"></script>
        <script src="js/custom/main.js"></script>
        <script src="js/custom/contacto.js"></script>
    </body>
</html>
