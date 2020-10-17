<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180639236-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-180639236-1');
  </script>
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

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="fresco/dist/js/fresco.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fresco/dist/css/fresco.css" />


<body>

  <div class="page">
    <header class="page-head">

      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner">

            <?php require('../view/header.php'); ?>

            <div class="rd-navbar-group">
              <div class="rd-navbar-panel">
                <a class="rd-navbar-brand brand" href="../index.php"><img src="../images/logo.webp" alt="logo del PDC" width="100px" class="opacidad" /></a>
              </div>
              <div class="topnav" id="myTopnav">
                <a href="../index.php">Inicio</a>
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
                    <a href="galeria.php" class="activo">Galeria</a>
                    <a href="documentos.php">Documentos</a>
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

    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/banner_galeria.webp)">
      <div class="container">
        <div class="page-title">
          <h2>Galeria de Imágenes</h2>
        </div>
      </div>
    </section>

    <!-- albunes miniaturas -->
    <section style="width:95%;margin: auto;">
      <br>
      <h3 style="text-align:center; color:#9f9f9f">Álbumes</h3>
      <div id="row" class="row row-40" style="justify-content: space-evenly;">

        <div class="col-sm-6 col-md-5 col-lg-3" style="text-align:center" id="carpeta">
          <a href="#ubicar" onclick="mostrar_galeria('PDC')" class="opacidad" style="border:5px solid #255085">
            <figure class="thumbnail-image">
              <img src="../files/galeria/PDC/portada.webp" alt="album" width="246" height="300" />
            </figure>
            <div class="thumbnail-caption">
              <p class="text-header" style="background-color: #255085;text-align: center;color: white;">PDC</p>
            </div>
          </a>
        </div>

        <div class="col-sm-6 col-md-5 col-lg-3" style="text-align:center" id="carpeta">
          <a href="#ubicar" onclick="mostrar_galeria('ODCA')" class="opacidad" style="border:5px solid #255085">
            <figure class="thumbnail-image">
              <img src="../files/galeria/ODCA/1.webp" alt="album" width="246" height="300" />
            </figure>
            <div class="thumbnail-caption">
              <p class="text-header" style="background-color: #255085;text-align: center;color: white;">ODCA</p>
            </div>
          </a>
        </div>

        <div class="col-sm-6 col-md-5 col-lg-3" style="text-align:center" id="carpeta">
          <a href="#ubicar" onclick="mostrar_galeria('convencion-11')" class="opacidad" style="border:5px solid #255085">
            <figure class="thumbnail-image">
              <img src="../files/galeria/convencion-11/convencion-11-03.webp" alt="album" width="246" height="300" />
            </figure>
            <div class="thumbnail-caption">
              <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Convención Nacional Extraordinaria</p>
            </div>
          </a>
        </div>

        <div class="col-sm-6 col-md-5 col-lg-3" style="text-align:center" id="carpeta">
          <a href="#ubicar" onclick="mostrar_galeria('presi_cumple')" class="opacidad" style="border:5px solid #255085">
            <figure class="thumbnail-image" id="ubicar">
              <img src="../files/galeria/presi-cumple/1.webp" alt="album" width="246" height="300" />
            </figure>
            <div class="thumbnail-caption">
              <p class="text-header" style="background-color: #255085;text-align: center;color: white;">Cumpleaños del Dr. Perrone</p>
            </div>
          </a>
        </div>

      </div>


    </section>


    <section class="section-35 section-md-50">
      <div id="row1" class="row row-40">
        <div id="fotos_pdc">
          <h4 id="album_pdc" style="color:white;background:#9f9f9f">Álbum PDC</h4>
          <div class="grid-gallery">

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/portada.webp">
              <img class="grid-gallery__image" alt="portada" src="../files/galeria/PDC/portada.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/2.webp">
              <img class="grid-gallery__image" alt="leyendo" src="../files/galeria/PDC/2.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/3.webp">
              <img class="grid-gallery__image" alt="foto del equipo" src="../files/galeria/PDC/3.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/4.webp">
              <img class="grid-gallery__image" alt="conferencia" src="../files/galeria/PDC/4.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/5.webp">
              <img class="grid-gallery__image" alt="comunicacion" src="../files/galeria/PDC/5.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/6.webp">
              <img class="grid-gallery__image" alt="visita" src="../files/galeria/PDC/6.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/7.webp">
              <img class="grid-gallery__image" alt="miembros del PDC" src="../files/galeria/PDC/7.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/8.webp">
              <img class="grid-gallery__image" alt="reunion" src="../files/galeria/PDC/8.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="pdc" href="../files/galeria/PDC/9.webp">
              <img class="grid-gallery__image" alt="local de PDC" src="../files/galeria/PDC/9.webp">
            </a>
          </div>
        </div>

        <div id="fotos_odca" style="display:none">
          <h4 id="album_odca" style="color:white;background:#9f9f9f">Álbum ODCA</h4>
          <div class="grid-gallery">
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/1.webp">
              <img class="grid-gallery__image" alt="foto grupal" src="../files/galeria/ODCA/1.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/2.webp">
              <img class="grid-gallery__image" alt="Alba" src="../files/galeria/ODCA/2.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/4.webp">
              <img class="grid-gallery__image" alt="miembro del odca" src="../files/galeria/ODCA/4.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/3.webp">
              <img class="grid-gallery__image" alt="Sting Jofre" src="../files/galeria/ODCA/3.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/5.webp">
              <img class="grid-gallery__image" alt="reunion" src="../files/galeria/ODCA/5.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/6.webp">
              <img class="grid-gallery__image" alt="representantes" src="../files/galeria/ODCA/6.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/7.webp">
              <img class="grid-gallery__image" alt="autoridades" src="../files/galeria/ODCA/7.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/8.webp">
              <img class="grid-gallery__image" alt="David Valencia" src="../files/galeria/ODCA/8.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/9.webp">
              <img class="grid-gallery__image" alt="Oreste Del Rio" src="../files/galeria/ODCA/9.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="odca" href="../files/galeria/ODCA/10.webp">
              <img class="grid-gallery__image" alt="mujeres" src="../files/galeria/ODCA/10.webp">
            </a>
          </div>
        </div>

        <div id="fotos_convencion-11" style="display:none">
          <h4 id="album_convencion-11" style="color:white;background:#9f9f9f">Convención Nacional Extraordinaria 11 de Octubre del 2020</h4>
          <p>El pasado domingo 11 de octubre, se llevó a cabo la Convención Nacional Extraordinaria del Partido Demócrata Cristiano de Paraguay. La misma se realizó tanto de manera virtual como presencial, esta última siguiendo los protocolos sanitarios establecidos durante la pandemia.</p>
          <p>El objetivo y único punto en el orden del día fue tratar la Modalidad de participación del PDC en las Elecciones Municipales del 10 de octubre de 2021.
            La Convención Nacional Extraordinaria resolvió que la modalidad de participación, para las citadas elecciones, se podrá dar en tres formas que son: con lista propia, en alianzas y / o concertaciones.</p>
          <br>
          <div class="grid-gallery">
            <a class="grid-gallery__item fresco" data-fresco-group="convencion-11" href="../files/galeria/convencion-11/convencion-11-01.webp">
              <img class="grid-gallery__image" alt="charla" src="../files/galeria/convencion-11/convencion-11-01.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="convencion-11" href="../files/galeria/convencion-11/convencion-11-02.webp">
              <img class="grid-gallery__image" alt="foto del zoom" src="../files/galeria/convencion-11/convencion-11-02.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="convencion-11" href="../files/galeria/convencion-11/convencion-11-03.webp">
              <img class="grid-gallery__image" alt="votacion" src="../files/galeria/convencion-11/convencion-11-03.webp">
            </a>
            <a class="grid-gallery__item fresco" data-fresco-group="convencion-11" href="../files/galeria/convencion-11/convencion-11-04.webp">
              <img class="grid-gallery__image" alt="comunicacion" src="../files/galeria/convencion-11/convencion-11-04.webp">
            </a>
          </div>
        </div>

        <div id="presi_cumple" style="display:none">
          <h4 id="album_presi_cumple" style="color:white;background:#9f9f9f">Cumpleaños de nuestro Presidente Horacio Galeano Perrone</h4>
          <div class="grid-gallery">
            <a class="grid-gallery__item fresco" data-fresco-group="cumple-presi" href="../files/galeria/presi-cumple/1.webp">
              <img class="grid-gallery__image" alt="cumple del presidente" src="../files/galeria/presi-cumple/1.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="cumple-presi" href="../files/galeria/presi-cumple/2.webp">
              <img class="grid-gallery__image" alt="celebracion" src="../files/galeria/presi-cumple/2.webp">
            </a>

            <a class="grid-gallery__item fresco" data-fresco-group="cumple-presi" href="../files/galeria/presi-cumple/3.webp">
              <img class="grid-gallery__image" alt="conversando" src="../files/galeria/presi-cumple/3.webp">
            </a>
          </div>
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