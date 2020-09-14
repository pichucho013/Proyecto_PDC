<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contactos</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css">    
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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

            <?php require('view/header.php'); ?>

              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <a class="rd-navbar-brand brand" href="index.php"><img src="images/logo.png" alt="" width="100px"/></a>
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="#home" >Inicio</a>
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
                    <div class="dropdown">
                      <button class="dropbtn">Prensa 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Noticias</a>
                        <a href="#">Actividades</a>
                        <a href="#">Galeria</a>
                        <a href="#">Documentos</a>
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

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(images/banner-contacto.png);">
        <div class="container">
          <div class="page-title">
            <h2>Contactanos</h2>
          </div>
        </div>
      </section>

      <section class="section-60 section-md-top-90 section-md-bottom-100">
        <div class="container">
          <div class="row row-50 justify-content-lg-between">
            <div class="col-lg-5 col-xl-4">
              <div class="inset-lg-right-15 inset-xl-right-0">
                <div class="row row-30 row-md-40"  id="acordion">
                  <div class="col-md-6 col-lg-12">
                    
                    <a data-toggle="collapse" href="#uno" onclick="mapa('asuncion');" data-parent= "#acordion"><h5>Asunción <i class="fa fa-caret-down"></i></h5></a>
                    <address class="collapse contact-info collapse in" id="uno">
                      <p class="text-uppercase">Francisco Dupuys (Ex quinta) 962 entre Montevideo y Colón</p>
                      <dl class="list-terms-inline">
                        <dt>Teléfono</dt>
                        <dd><a class="link-secondary" href="#">+59521 420 434</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>Celular</dt>
                        <dd><a class="link-secondary" href="https://wa.me/+595981212085" target="_blank">+595981 212 085</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a class="link-primary" href="mailto:#">pdc.paraguay@gmail.com</a></dd>
                      </dl>
                    </address>
                  </div>
                  <div class="col-md-6 col-lg-12">
                  <a data-toggle="collapse" href="#dos" onclick="mapa('capiata');" data-parent = "#acordion"><h5>Capiata <i class="fa fa-caret-down"></i></h5></a>
                    <address class="collapse contact-info collapse" id="dos">
                      <p class="text-uppercase">9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45</p>
                      <dl class="list-terms-inline">
                        <dt>Telephone</dt>
                        <dd><a class="link-secondary" href="tel:#">+1 800 603 6035</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a class="link-primary" href="mailto:#">mail@demolink.org</a></dd>
                      </dl>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6" id="mapa">
                        
            </div>
        </div>
      </section>

        <?php require('view/footer.php'); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/maps.js"></script>
  </body>
</html>