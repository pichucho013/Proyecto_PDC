<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
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
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
    <header class="page-head">
        
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">

            <?php require('../view/header.php'); ?>

              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <a class="rd-navbar-brand brand" href="../index.php"><img src="../images/logo.png" alt="" width="100px"/></a>
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="../index.php">Inicio</a>
                    <div class="dropdown">
                      <button class="dropbtn">Nosotros 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Quienes Somos</a>
                        <a href="#">Autoridades</a>
                        <a href="#">Organigrama</a>
                        <a href="#">PDC en el mundo</a>
                      </div>
                    </div>
                    <a href="#news">Estatuto</a>
                    <div class="dropdown">
                      <button class="dropbtn">Electoral 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Sala Electoral</a>
                        <a href="#">Candidatos</a>
                      </div>
                    </div>
                    <div class="dropdown activo">
                      <button class="dropbtn">Prensa 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Noticias</a>
                        <a href="#">Actividades</a>
                        <a href="#">Galeria</a>
                        <a href="prensa/documentos.php" class="activo">Documentos</a>
                      </div>
                    </div> 
                    <a href="../contactos.php">Contacto</a>
                    <a href="#" style="height: 57px;" class="icon" onclick="myFunction()">&#9776;</a>
                  </div>
              </div>
            </div>
          </nav>
        </div>
        
      </header>

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/banner_documentos.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Documentos</h2>
          </div>
        </div>
      </section>

      <section class="section-35 section-md-50">
        
          <div id="row" class="row row-40" style="justify-content: space-evenly;">
            <div class="col-sm-2 col-md-2 col-lg-2" style="text-align:center">
                <a href="#resoluciones" onclick="mostrar('resoluciones')" class="opacidad">
                    <figure class="thumbnail-image"><img src="../images/folder.png" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Resoluciones</p>
                  </div></a>
            </div>
            
            <div class="col-sm-2 col-md-2 col-lg-2" style="text-align:center">
                <a href="#" class="opacidad">
                    <figure class="thumbnail-image"><img src="../images/folder.png" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Leyes</p>
                  </div></a>
            </div>
            
            <div class="col-sm-2 col-md-2 col-lg-2" style="text-align:center">
                <a href="#" class="opacidad"s>
                    <figure class="thumbnail-image"><img src="../images/folder.png" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Leyes</p>
                  </div></a>
            </div>
          
        </div>
      </section>

      <section class="section-35 section-md-50">
      <div id="contenido" style="display:none;text-align: center;">
      <h3 style="text-align:center;color:#9F9F9F" id="resoluciones">Resoluciones</h3><br>
        <embed src="../files/documentos/resoluciones/resoluciones.pdf" type="application/pdf" width="80%" height="600px"/>
      </div>
      </section>
        

      


      

        <?php require('../view/footer.php'); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/mostrar_documento.js"></script>
  </body>
</html>