<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Estatuto del PDC</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
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
                    <a href="estatuto.php" class="activo">Estatuto</a>
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
                    <a href="contactos.php" >Contacto</a>
                    <a href="#" style="height: 57px;" class="icon" onclick="myFunction()">&#9776;</a>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/banner-estatuto.webp);">
        <div class="container">
          <div class="page-title">
            <h2>Estatuto del PDC PY</h2>
          </div>
        </div>
      </section>

      <section class="section-35 section-md-50" style="text-align: center;">

      <iframe src="files/estatuto/estatuto.pdf" style="width:80%; height:800px; margin:auto" frameborder="0"></iframe>
</section>

      <?php require('view/footer.php'); ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>