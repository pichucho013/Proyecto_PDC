<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Prensa - Documentos</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../images/logito.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/fuentes.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="page">
      <header class="page-head">
        
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">

            <?php require('../view/header.php'); ?>

              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <a class="rd-navbar-brand brand" href="../index.php"><img src="../images/logo.webp" alt="logo del PDC" width="100px" class="opacidad"/></a>
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="../index.php" >Inicio</a>
                    <div class="dropdown">
                      <button class="dropbtn">Nosotros 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="../nosotros/quienesomos.php">Quienes Somos</a>
                        <a href="../nosotros/autoridades.php">Autoridades</a>
                        <a href="../nosotros/organigrama.php">Organigrama</a>
                        <a href="../nosotros/pdcmundo.php">PDC en el mundo</a>
                      </div>
                    </div>
                    <a href="../estatuto.php">Estatuto</a>
                    <div class="dropdown">
                      <button class="dropbtn">Electoral 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="../electoral/sala-electoral.php">Sala Electoral</a>
                      </div>
                    </div>
                    <div class="dropdown activo">
                      <button class="dropbtn">Prensa 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="galeria.php">Galeria</a>
                        <a href="documentos.php" class="activo">Documentos</a>
                      </div>
                    </div> 
                    <a href="../contactos.php" >Contacto</a>
                    <a href="#" style="height: 57px;" class="icon" onclick="myFunction()">&#9776;</a>
                  </div>
              </div>
            </div>
          </nav>
        </div>
        
      </header>

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/banner_documentos.webp); background-size:100% 50%">
        <div class="container">
          <div class="page-title">
            <h2>Documentos</h2>
          </div>
        </div>
      </section>

      <section class="section-35 section-md-50">
        
          <div id="row" class="row row-40" style="justify-content: space-evenly;">
            <div class="col-sm-2 col-md-2 col-lg-2" style="text-align:center" id="carpeta">
                <a href="#carpeta" onclick="mostrar('resoluciones')" class="opacidad">
                    <figure class="thumbnail-image"><img src="../images/folder.webp" alt="carpeta" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Resoluciones</p>
                  </div></a>
            </div>
        </div>
      </section>

      
      <div id="contenido" style="text-align: center;">
        <h3 style="text-align:center;color:#9F9F9F" id="resoluciones">Resoluciones</h3>
        <div style="text-align: left;width: 80%;margin: auto; margin-top:1%">
          <h4><li>Resolución Nº 78</li></h4>
          <!-- <a download href="../images/folder.png" >Descargar archivo desde aquí</a> -->
            <iframe id="iframepdf" src="../files/documentos/resoluciones/resoluciones.pdf"width="100%" height="600px"></iframe>
        </div>  
      </div>
      
      <br><?php require('../view/footer.php'); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/mostrar_documento.js"></script>
  </body>
</html>