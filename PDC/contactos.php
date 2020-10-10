<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Contactos</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logito.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="page">
    <header class="page-head">
        
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">

            <?php require('view/header.php'); ?>

              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <a class="rd-navbar-brand brand" href="index.php"><img src="images/logo.webp" alt="logo del PDC" width="100px" class="opacidad"/></a>
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="index.php">Inicio</a>
                    <div class="dropdown">
                      <button class="dropbtn">Nosotros 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="nosotros/quienesomos.php">Quienes Somos</a>
                        <a href="nosotros/autoridades.php">Autoridades</a>
                        <a href="nosotros/organigrama.php">Organigrama</a>
                        <a href="nosotros/pdcmundo.php">PDC en el mundo</a>
                      </div>
                    </div>
                    <a href="estatuto.php">Estatuto</a>
                    <div class="dropdown">
                      <button class="dropbtn">Electoral 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="electoral/sala-electoral.php">Sala Electoral</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="dropbtn">Prensa 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="prensa/galeria.php">Galeria</a>
                        <a href="prensa/documentos.php">Documentos</a>
                      </div>
                    </div> 
                    <a href="contactos.php" class="activo">Contacto</a>
                    <a href="#" style="height: 57px;" class="icon" onclick="myFunction()">&#9776;</a>
                  </div>
              </div>
            </div>
          </nav>
        </div>

        
      </header>

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/banner-contacto.webp);">
        <div class="container">
          <div class="page-title">
            <h2>Contactanos</h2>
          </div>
        </div>
      </section>

      <section class="section-50 section-md-75 section-lg-100">
        <div class="container">
          <div class="row row-40" style="justify-content: center;">
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg fa fa-whatsapp"></span></div>
                  <div class="box-header">
                    <h5><a href="https://wa.me/+595981212085" target="_blank">Whatsapp</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>Puedes conectarte con nosotros ingresando a la app de Whatsapp.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
            <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg fa fa-map-marker"></span></div>
                  <div class="box-header">
                    <h5><a href="https://goo.gl/maps/kM2ovAB6AHzScTwS9" target="_blank">Ubicación</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>Francisco Dupuys (Ex quinta) 962 entre Montevideo y Colón</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg fa-envelope-o"></span></div>
                  <div class="box-header">
                    <h5><a href="mailto:#">Correo</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>Envíanos tus consultas y/o dudas al correo pdc.paraguay@gmail.com</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg material-icons-phone"></span></div>
                  <div class="box-header">
                    <h5><a href="#">Teléfono</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>También contamos con linea baja para que puedas contactarte con nosotros. +59521 420 434</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

        <?php require('view/footer.php'); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>