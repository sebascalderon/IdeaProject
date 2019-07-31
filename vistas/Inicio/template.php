


<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
	
        <title>Idea Project</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="vistas/Inicio/template/images/favicon.png">	

        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		<!-- Google Map Api -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="vistas/Inicio/template/css/font-awesome.min.css">

		<!-- Animate CSS -->
        <link rel="stylesheet" href="vistas/Inicio/template/css/animate.min.css">

		<!-- Slicknav CSS -->
        <link rel="stylesheet" href="vistas/Inicio/template/css/slicknav.min.css">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="vistas/Inicio/template/css/owl.theme.default.css">
        <link rel="stylesheet" href="vistas/Inicio/template/css/owl.carousel.min.css">
		
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="vistas/Inicio/template/css/magnific-popup.css">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vistas/Inicio/template/css/bootstrap.min.css">
		
		<!-- Bizpro Style CSS -->
        <link rel="stylesheet" href="vistas/Inicio/template/style.css">
        <link rel="stylesheet" href="vistas/Inicio/template/css/default.css">	
        <link rel="stylesheet" href="vistas/Inicio/template/css/responsive.css">	
		
		<!-- You Can Use 8 Different color Just remove bottom of the comment tag -->
		
		<link rel="stylesheet" href="vistas/Inicio/template/css/skin/blue.css">

		<!-- Link Modal-->
        <link rel="stylesheet" href="modal/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="modal/css/style.css"> <!-- Resource style -->
		<link rel="stylesheet" href="modal/css/demo.css"> 
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="#" id="colors">
		<link rel="icon" href="assets/img/Solologo.png">
    </head>
    <body>
		
		<!--	<img src="assets/img/LogoSena.png">-->
		<!-- Preloader -->
		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div>
		<!--/ End Preloader -->
		
		<!-- Mp Color -->
		
		<!--/ ENd Mp Color -->
		
		<!-- Start Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="#"><img src="assets/img/logo1.svg " ></a>
						</div>
						<!--/ End Logo -->
					 </div>
					 <div class="col-md-10 col-sm-12 col-xs-12">
						<div class="nav-area">
							<!-- Main Menu -->
							<nav class="mainmenu">
								<div class="mobile-nav"></div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav menu">

							<!-- MODAL LOGIN-->  	
					
	
<li><ul class="cd-main-nav__list js-signin-modal-trigger" style="padding-top: 4px;"><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login"  data-toggle="modal" data-target="#modal-login">Iniciar sesión </a></ul></li>
		
									
		


<div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
	<div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
		<ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
		  <li><a href="#0" data-signin="login" data-type="login"> iniciar sesión</a></li>
		</ul>
		
		<div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
					<form ></form>
					
						<form  class="cd-signin-modal__form" action="?c=Usuario&a=Iniciar"    method="POST">
								<p class="cd-signin-modal__fieldset">
									<label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username"  >Usuario</label>
									<input   class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" require onkeypress="return soloNumeros(event)" id="signup-username" type="Number" placeholder="Usuario" name="Usuario" required autocomplete="off" type="text" >
									<span class="cd-signin-modal__error">Usuario incorrecto</span>
								</p>  
								 
								<p class="cd-signin-modal__fieldset">
									<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Contraseña</label>	
									<input   class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="password"  placeholder="Contraseña" autocomplete="off" required name="Contrasena" >
									<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Mostrar</a>
									<span class="cd-signin-modal__error">Contraseña incorrecta</span>
								</p>
								
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit"   value='Iniciar Sesión'></button>
						</form> 





	<?php   
			 
			 if(isset($_GET["Aceptar"]) &&  $_GET["Aceptar"]=="error"){?>
			 
			 <br>
			   <div class="alert alert-danger alert-dismissible">
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   <strong>ERROR:</strong> Usuario o Contraseña Equivocado
			   </div>
			 <?php
			 }
			 ?> 


			
							
					</div> <!-- cd-signin-modal__block -->

						<div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
							<form class="cd-signin-modal__form">
							

								<p class="cd-signin-modal__fieldset">
									<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
									<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail">
									<span class="cd-signin-modal__error">Error message here!</span>
								</p>

							</form>
						</div> <!-- cd-signin-modal__block -->

						<div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
							<p class="cd-signin-modal__message">¿Perdiste tu contraseña? Por favor, introduzca su dirección de correo electrónico. Recibirás un enlace para crear una nueva contraseña..</p>

								<form class="cd-signin-modal__form">
									<p class="cd-signin-modal__fieldset">
										<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
										<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
										<span class="cd-signin-modal__error">Error message here!</span>
									</p>

									<p class="cd-signin-modal__fieldset">
										<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Restablecer Contraseña">
									</p>
								</form>

									<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">  Atrás para iniciar sesión</a></p>
						</div> <!-- cd-signin-modal__block -->
						<a href="#0" class="cd-signin-modal__close js-close">Cerrar</a>
			</div> <!-- cd-signin-modal__container -->
			</div> <!-- cd-signi				
				
			<! MODAL LOGIN FIN-->  	







	                                  
																										
									</ul>
								</div>
							</nav>
						
							<!--/ End Main Menu -->
						</div>

					</div>
				
					
					<!--/ login -->
					
			</div>
		</header>
		<!--/ End Header -->
		
		<!-- Start Slider -->
		<section id="j-slider">
			<div class="slide-main">
			<!-- Single Slider -->
			<div class="single-slider" style="background-image:url(vistas/Inicio//template/images/imagenes/104.jpeg);" >
			<div class=" container">
						<div class=" row">
							<div class=" col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class=" slide-text left">
									<div class="slider-inner">
										<h1><span><img src="assets/img/LogoBlanco.svg" height="200"></span></h1>
										<p  style=" background-color:#000000;padding: 15px; opacity: 0.7; border-radius: 20px 50px;">Idea Project esta realizado para facilitar la organización de los proyectos creados por estudiantes egresados y para brindar una ayuda a estudiantes en formación los cuales obtendrán mejores resultados al entregar sus proyectos finales.</p>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<div class="single-slider" style="background-image:url(vistas/Inicio//template/images/imagenes/110.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1><span><img src="assets/img/LogoBlanco.svg" height="200"></span></h1>
										<p  style=" background-color:#000000;padding: 15px; opacity: 0.7; border-radius: 20px 50px;">Idea Project esta realizado para facilitar la organización de los proyectos creados por estudiantes egresados y para brindar una ayuda a estudiantes en formación los cuales obtendrán mejores resultados al entregar sus proyectos finales.</p>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<div class="single-slider" style="background-image:url(vistas/Inicio//template/images/imagenes/108.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1><span><img src="assets/img/LogoBlanco.svg" height="200"></span></h1>
										<p  style=" background-color:#000000;padding: 15px; opacity: 0.7; border-radius: 20px 50px;">Idea Project esta realizado para facilitar la organización de los proyectos creados por estudiantes egresados y para brindar una ayuda a estudiantes en formación los cuales obtendrán mejores resultados al entregar sus proyectos finales.</p>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url(vistas/Inicio//template/images/imagenes/111.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1><span><img src="assets/img/LogoBlanco.svg" height="200"></span></h1>
										<p  style=" background-color:#000000;padding: 15px; opacity: 0.7; border-radius: 20px 50px;">Idea Project esta realizado para facilitar la organización de los proyectos creados por estudiantes egresados y para brindar una ayuda a estudiantes en formación los cuales obtendrán mejores resultados al entregar sus proyectos finales.</p>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				
			</div>
		</section>
		<!--/ End Slider -->
		
		<!-- Start Service -->
		<section id="service" class="section">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2>Nuestro <span>Servicio</span></h2>
							<br>
							<p>Banco de Proyectos al servicio de aprendices </p>
							<br>
							<p>(SENA) Centro de Gestiones de Mercados Logística y Tecnologías de la Información.</p>
						</div>
					</div>
				</div>
				
				
		</section>
		<!--/ End Service -->
		
		
		
		<!-- Newslatter -->
		
		<!--/ End Newslatter -->
		
		<!-- Start Clients -->
	
		<!--/ End Clients -->		
	
		<!-- Start Footer -->
		<footer id="footer" class="wow fadeIn">
			<!-- Footer Top -->
			<div class="footer-top">
			
				
					
							<center>
							<div >
							<img src="assets/img/logoob.svg" height="100">
							</div>
							</center>
							<!--/ End Logo -->
							<br><br>
							<!-- Menu -->
						
							<p ><a>Nicolás </a> López</p><br>
							<p>Ivone <a> Dorado </a> </p>
						
						
			</div>
			<!--/ End Footer Top -->
			
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text">
								<p>&copy; Copyright 2018<span></i></span><a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<script type="text/javascript" src="assets/Validaciones/Inicio.js"></script>
        
		<!--/ End Footer -->
		<script src="modal/assets/js/jquery-1.11.1.min.js"></script>
        <script src="modal/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="modal/assets/js/jquery.backstretch.min.js"></script>
        <script src="modal/assets/js/scripts.js"></script>
		<!-- Jquery JS -->
		<script type="text/javascript" src="vistas/Inicio/template/js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="vistas/Inicio/template/js/colors.js"></script>
		
		<!-- Google Map JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/gmap.js"></script>
		
		<!-- Modernizr JS -->
		<script type="text/javascript"  src="vistas/Inicio/template/js/modernizr.min.js"></script> 
	
		<!-- Appear JS-->
		<script  type="text/javascript" src="vistas/Inicio/template/js/jquery.appear.js"></script>

		<!-- Animate JS -->
    	<script  type="text/javascript" src="vistas/Inicio/template/js/wow.min.js"></script>
		
		<!-- Onepage Nav JS -->
    	<script  type="text/javascript" src="vistas/Inicio/template/js/jquery.nav.js"></script>
		
		<!-- Yt Player -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/ytplayer.min.js"></script>
	
		<!-- Popup JS -->
		<script type="text/javascript"  src="vistas/Inicio/template/js/jquery.magnific-popup.min.js"></script>

		<!-- Typed JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/typed.min.js"></script>
		
		<!-- Scroll Up JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/jquery.scrollUp.min.js"></script>
		
		<!-- Slick Nav JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/jquery.slicknav.min.js"></script>
		
		<!-- Counterup JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/waypoints.min.js"></script>
		<script  type="text/javascript" src="vistas/Inicio/template/js/jquery.counterup.min.js"></script>
		
		<!-- Owl Carousel JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/owl.carousel.min.js"></script>
		
		<!-- Bootstrap JS -->
		<script  type="text/javascript" src="vistas/Inicio/template/js/bootstrap.min.js"></script>
		
		<!-- Main JS -->
		<script type="text/javascript"  src="vistas/Inicio/template/js/main.js"></script>
		

    	<!-- modal-->
 		<script src="modal/js/placeholders.min.js"></script>
     	<script src="modal/js/main.js"></script> 
	 	<script src="modal/assets/js/scripts.js"></script>		
		
    </body>
</html>