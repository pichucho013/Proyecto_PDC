<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Inicio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logito.ico" type="image/x-icon">
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
          <div class=""> 
            <img class="reboteIn" src=" images/logo.png" width="80" height="80">
          </div>
        </div>
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
                    <a href="index.php" class="activo">Inicio</a>
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
                        <a href="electoral/sala_electoral.php">Sala Electoral</a>
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

      </header>

      <section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500" data-simulate-touch="true">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-1.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                      </div>
                      <h1 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Partido Democrata Cristiano Paraguay</h1>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Texto del Slogan del partdido PDC .</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/registro_civico.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">REGISTRO CÍVICO PERMANENTE</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Consulte su Registro Cívico Permanente aquí</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="https://rcp.tsje.gov.py/">Click aquí</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-3.jpg">
              <div class="swiper-slide-caption text-center">
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar d-lg-none"></div>
          <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <section class="section-50 section-md-75 section-lg-100">
        <div class="container">
          <div class="row row-40">
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg mercury-icon-briefcase"></span></div>
                  <div class="box-header">
                    <h5><a href="#">Salud</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>Texto relacionado a la propuesta del area de la salud, clara, concisa y transparente.(no tan largo)</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg mercury-icon-users"></span></div>
                  <div class="box-header">
                    <h5><a href="#">Economía</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>FTexto relacionado a la propuesta del area de la economia, clara, concisa y transparente.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg mercury-icon-lib"></span></div>
                  <div class="box-header">
                    <h5><a href="#">Educación</a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p>Texto relacionado a la propuesta del area de la Educación, clara, concisa y transparente.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-displaced-wrap">
        <div class="bg-displaced-body">
          <div class="container">
            <div class="inset-xl-left-70 inset-xl-right-70">
              <article class="box-cart bg-ebony-clay">
                <div class="box-cart-image"><img src="images/presidente.PNG" alt="" width="342" height="338"/>
                </div>
                <div class="box-cart-body">
                  <blockquote class="blockquote-complex blockquote-complex-inverse">
                    <h3>Presidente</h3>
                    <p>
                      <q>Nacio el 13 de octubre de 1945 en Mcal Estigarribia(Chaco) su estado civil es casado y es de nacionalidad Paraguaya.</q>
                    </p>
                    <div class="quote-footer">
                      <cite>HORACIO GALEANO PERRONE</cite><small>Presidente del PDC</small>
                    </div>
                  </blockquote>
                  <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="http://www.horaciogaleanoperrone.com.py/">Ver mas</a></div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="bg-displaced bg-image" style="background-image: url(images/home-1.jpg);"></div>
      </section>

      <section class="section-60 section-lg-100">
        <div class="container">
          <div class="row row-40 align-items-sm-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="images/team-9-246x300.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+595 982–384 255</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@ejemplo.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Agustín Ortiz</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Viceprecidente 2do</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="images/team-10-246x300.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+595 982–384 255</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@ejemplo.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Alba Estela Espinola</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Junta Nacional</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image "><img src="images/Silvano_galeano.jpg" alt="" style="width: 100%; height: 100%" />
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+595 982–384 255</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@ejemplo.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Silvano Galeano</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Tesorero</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 text-center">
              <div class="block-wrap-1">
                <div class="block-number">06</div>
                <h3 class="text-normal">Autoridades</h3>
                <p class="h5 h5-smaller text-style-4">del PDC</p>
                <p>Texto relacionado a la seccion de Autoridades con el fin de introducir a la dicha seccion(clara concisa).</p><a class="link link-group link-group-animated link-bold link-secondary" href="#"><span>Ver mas</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section parallax-container bg-black" data-parallax-img="images/progress-bars-parallax-1.jpg">
        <div class="parallax-content">
          <div class="section-50 section-md-90">
            <div class="container">
              <div class="row row-40">
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-group"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <h3 class="text-center">Nuevas Noticias</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="images/home-5-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Nuevo virus llamo Corona Virus, las naciones estan sorprendidas.</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-14">MARZO 14, 2020</time>
                      </li>
                      <li><span>Por</span><a href="#">ABC, color</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="images/home-6-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Primer caso de Corona Virus en Paraguay</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-20">JUNIO 20, 2019</time>
                      </li>
                      <li><span>Por</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="images/home-7-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">EPP ataca de nuevo, ciudadanos sorprendidos</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-23">JUNIO 23, 2019</time>
                      </li>
                      <li><span>Por</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="images/home-8-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Primer caso de Corona Virus en Paraguay</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-12">jUNIO 12, 2019</time>
                      </li>
                      <li><span>by</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
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