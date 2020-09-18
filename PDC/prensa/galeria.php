<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Prensa - Galeria</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../images/logito.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/fuentes.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    
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
                    <a href="../index.php" >Inicio</a>
                    <div class="dropdown">
                      <button class="dropbtn">Nosotros 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="../nosotros/quienesomos.php">Quienes Somos</a>
                        <a href="#">Autoridades</a>
                        <a href="#">Organigrama</a>
                        <a href="../nosotros/pdcmundo.php">PDC en el mundo</a>
                      </div>
                    </div>
                    <a href="../estatuto.php">Estatuto</a>
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
                        <a href="galeria.php" class="activo">Galeria</a>
                        <a href="documentos.php">Documentos</a>
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

      <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/banner_galeria.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Galeria de Imágenes</h2>
          </div>
        </div>
      </section>

<!-- albunes miniaturas -->
      <section class="section-35 section-md-50" style="background-color:#255085">
      <h3 style="text-align:center; color:white">Álbumes</h3>
          <div id="row" class="row row-40" style="justify-content: space-evenly;">
          
            <div class="col-sm-6 col-md-3 col-lg-3" style="text-align:center" id="carpeta">
                <a href="#thumb_pdc" onclick="mostrar_galeria('PDC')" class="opacidad">
                    <figure class="thumbnail-image"><img src="../files/galeria/PDC/portada.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">PDC</p>
                  </div></a>
            </div>
            
            <div class="col-sm-6 col-md-3 col-lg-3" style="text-align:center" id="carpeta">
                <a href="#thumb_odca" onclick="mostrar_galeria('ODCA')" class="opacidad" >
                    <figure class="thumbnail-image"><img src="../files/galeria/ODCA/ODCA.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-caption">
                    <p class="text-header" style="background-color: #255085;text-align: center;color: white;">ODCA</p>
                  </div></a>
            </div> 
        </div>
      </section>

      
<!-- album completo pdc-->
      <section class="fotos" style="width: 70%;margin: auto;" id="fotos_pdc">

      <!-- vista grande pdc -->
		<div class="contenedora" style="background-color: #255085">

            <div class="thumb_total" id="thumb_pdc">
                <img src="../files/galeria/PDC/portada.jpg">

            </div>
        <div>

    <!-- miniaturas pdc-->
        <div class="contenedora" style>
				<div class="thumb">
					<a href="#thumb_total" onclick="galeria('../files/galeria/PDC/portada.jpg','pdc')" style="height: 100%">
						<img src="../files/galeria/PDC/portada.jpg"style="height: 100%"> 
					</a>
                </div>
                
                <div class="thumb">
                        <a href="#thumb_total" onclick="galeria('../files/galeria/PDC/2.jpg','pdc')">
						<img src="../files/galeria/PDC/2.jpg">
					</a>
                </div>	
                
                <div class="thumb">
                <a href="#thumb_total" onclick="galeria('../files/galeria/PDC/3.jpg','pdc')" style="height: 100%" >
						<img src="../files/galeria/PDC/3.jpg" style="height:100%">
					</a>
                </div>	
                
                <div class="thumb">
                <a href="#thumb_total" onclick="galeria('../files/galeria/PDC/4.jpg','pdc')" style="height: 100%" >
						<img src="../files/galeria/PDC/4.jpg" style="height:100%">
					</a>
				</div>	
		</div>
    </section>








    <!-- album completo odca-->
    <section class="fotos" style="display:none;width: 70%;margin: auto;" id="fotos_odca">

<!-- vista grande odca -->
  <div class="contenedora" style="background-color: #255085">

      <div class="thumb_total" id="thumb_odca">
          <img src="../files/galeria/ODCA/ODCA.jpg">

      </div>
  <div>

<!-- miniaturas odca-->
  <div class="contenedora" style>
          <div class="thumb">
              <a href="#thumb_total" onclick="galeria('../files/galeria/ODCA/ODCA.jpg','odca')" style="height: 100%">
                  <img src="../files/galeria/ODCA/ODCA.jpg" style="height: 100%">
              </a>
          </div>
          
          <div class="thumb">
                  <a href="#thumb_total" onclick="galeria('../files/galeria/ODCA/ODCA2.jpg','odca')">
                  <img src="../files/galeria/ODCA/ODCA2.jpg">
              </a>
          </div>	
          
          <div class="thumb">
          <a href="#thumb_total" onclick="galeria('../files/galeria/ODCA/ODCA3.jpg','odca')">
                  <img src="../files/galeria/ODCA/ODCA3.jpg">
              </a>
          </div>	
          
          <div class="thumb">
          <a href="#thumb_total" onclick="galeria('../files/galeria/ODCA/ODCA4.jpg','odca')">
                  <img src="../files/galeria/ODCA/ODCA4.jpg">
              </a>
          </div>	
  </div>
</section>








   
    


    <br><?php require('../view/footer.php'); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/mostrar_documento.js"></script>
    
  </body>
</html>