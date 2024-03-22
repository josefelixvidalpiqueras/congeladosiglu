<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../public/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="icon" href="../public/images/IgluSalmon.png" type="image/x-icon">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0px;
			padding: 0px;
            }
            
            /* Cambia el icono del cursor a la mano cuando selecciona una parte del carousel de arriba del todo*/
            .draggable:active {
                cursor: grab;
            }

            /* Para cambiar el estilo de un enlace y que parezca texto plano */
            .link {
                text-decoration: none; /* Quita el subrayado predeterminado */
                color: black; /* Cambia el color del texto */
            }

            /* Para volver a poner a un enlace su estilo de enlace cuando se pase el raton por encima */
            .link:hover {
                text-decoration: underline; /* Agrega el subrayado cuando el ratón está encima */
            }

            .whatsapp-icon {
                position: fixed; /* Fija el icono en la pantalla */
                bottom: 20px; /* Distancia desde la parte inferior de la pantalla */
                right: 20px; /* Distancia desde el lado derecho de la pantalla */
                z-index: 999; /* Asegura que esté por encima de otros elementos */
            }

            .whatsapp-icon img {
                width: 50px; /* Tamaño del icono */
                height: auto; /* Altura automática para mantener la proporción */
            }
            .navbar {
                padding-top: 0px;
            }
        </style>
    </head>
    <body class="antialiased">
        


        <!-- Icono whatsapp que va a estar por "encima" del resto de la pagina  -->
<a href="https://api.whatsapp.com/send/?phone=34669899322&text&type=phone_number&app_absent=0" class="whatsapp-icon" target="_blank">
        <img src="images/WhatsappIcon.png" alt="WhatsApp Icon">
    </a>
	<!-- CABECERA -->
	<!-- CAROUSEL TELEFONO Y ENVIOS GRATIS -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center mx-auto pt-1" style="background-color: #FF836F; border-bottom: 1 px solid lightgrey;">
				<div id="carouselExampleSlidesOnly" class="carousel slide mx-auto" data-bs-ride="carousel" data-interval="3300">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<h5 class="d-block w-100" alt="Slide 1">
								<span class="col-12 text-scroll draggable">Envío gratis a Murcia - Pedido mínimo desde 30€</span>
							</h5>
						</div>
						<div class="carousel-item">
							<h5 class="d-block w-100" alt="Slide 2">
								<span class="col-12 text-scroll draggable"><i class="bi-headset"></i> Pedidos telefónicos: 669 899 322</span>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BARRA DE NAVEGACION -->
	<nav class="navbar navbar-expand-xl sticky-top" >
		<div class="container-fluid justify-content-around" style="background-color: #FF836F;"> <!-- Clase para centrar -->
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_plegable" aria-label="Ampliar/Reducir">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#" title="Inicio"><img src="images/IgluBlanco.png" alt="Logo Elden Ring" class="ampliar" style="margin-left: 10px; width: 100px;"></a>
		  <div class="collapse navbar-collapse" id="navbar_plegable">
			<ul class="navbar-nav "> <!-- Clase mx-auto para centrar los enlaces -->
			  <li class="nav-item">
				<a class="nav-link" href="index.html" style="color: #FFFFFF; font-weight: bold;" title="Página principal"> Inicio</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Pescados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Mariscos</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Carnes</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Aperitivos</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Made in Murcia</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Pastas y Pizzas</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Pastelería y postres</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Verduras</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Sin Gluten</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="galeria.html" title="Galería de imágenes" style="font-weight: bold;"> Niños</a>
				  </li>
                  <li>
                    @if (Route::has('login'))
                        <div class="mt-2">
                            @auth
								<?php if (auth()->user()->is_admin==1) {?>
									<a href="{{ url('/perfilAdmin') }}" class="ms-3" style="font-weight: bold;"><i class="bi bi-person-fill"></i> MI CUENTA</a>
										<?php
									}elseif (auth()->user()->is_usuario==1){?>
										<a href="{{ url('/perfilUsuario') }}" class="ms-3" style="font-weight: bold;"><i class="bi bi-person-fill"></i> MI CUENTA</a>
									<?php } ?>
                            @else
                                <a href="{{ route('login') }}" class="ms-3" style="font-weight: bold;">LOG IN</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ms-2" style="font-weight: bold;">REGISTER</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	<div class="container mt-5 mb-5">
		<!-- Carousel de imagenes -->
		<div class="row">
			<div class="col-12">
				<div id="ejemplo-carousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 800px;" >
					<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="images/carousel1.jpg" alt="Arbol aureo" class="d-block w-100">
								<!--<div class="carousel-caption">
									<h4 class="text-center">2º Bachillerato</h4>
								</div>-->
						</div>
							<div class="carousel-item">
								<img src="images/carousel2.jpg" alt="Aldea de tarros" class="d-block w-100">
							</div>
							<div class="carousel-item">
								<img src="images/carousel3.jpg" alt="Shadow of the erdtree" class="d-block w-100">
							</div>
						</div>
					
					<button class="carousel-control-prev" type="button" data-bs-target="#ejemplo-carousel" data-bs-slide="prev" aria-label="Imagen previa">
						<span class="carousel-control-prev-icon"></span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#ejemplo-carousel" data-bs-slide="next" aria-label="Imagen posterior">
						<span class="carousel-control-next-icon"></span>
					</button>
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#ejemplo-carousel" data-bs-slide-to="0" class="active bg-dark" aria-label="Primera imagen"></button>
						<button type="button" data-bs-target="#ejemplo-carousel" data-bs-slide-to="1" class="bg-dark" aria-label="Segunda imagen"></button>
						<button type="button" data-bs-target="#ejemplo-carousel" data-bs-slide-to="2" class="bg-dark" aria-label="Tercera imagen"></button>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<!-- Sinopsis -->
		<div class="row sobremia" style="opacity: 0.9;">
			<div class="col-12 mt-3 mb-3 text-center" >
				<h1 style="color: #000;">Ofertas</h1>
				<p style="color: #000;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, perspiciatis ab, vero odit itaque dolorem ipsam pariatur fugit quidem placeat iusto, expedita alias odio. Culpa sapiente id mollitia consequatur omnis?</p>
			</div>
		</div>
			</div>
			<div class="alert alert-dark mt-5 text-center" role="alert">
				Para más información, pincha en el <a target="_blank" href="https://www.congeladosiglu.com/" class="alert-link" title="Wikipedia Elden Ring">enlace a Wikipedia</a>
			</div>
	</div>
    <!-- FOOTER -->
	<!-- LOS ENLACES HAY QUE CAMBIARLOS - NO LLEVAN A NINGUN SITIO -->
	<div class="container-fluid">
		<div class="row footer fuente text-white mt-5 justify-content-md-around" style="background-color: #FF836F;">
			<div class="col-12 text-center col-md-3 mt-3">
				<h6><a href="#" class="link">Política de privacidad</a></h6>
			</div>
			<div class="col-12 text-center col-md-3 mt-3">
				<h6><a href="#" class="link">Aviso Legal</a></h6>
			</div>
			<div class="col-12 text-center col-md-3 mt-3">
				<h6><a href="#" class="link">Términos y condiciones de compra</a></h6>
			</div>
			<div class="col-12 text-center col-md-3 mt-3">
				<h6><a href="#" class="link">Política de cookies</a></h6>
			</div>
			<div class="col-12 text-center mt-3 mb-3">
				<h6 style="color: #FFFFFF;">Iglú 2024 © Todos los derechos reservados</h6>
			</div>
		</div>
	</div>
	<!-- Librerias de JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script>
		//Funcion que controla el movimiento del carousel de la cabecera que contiene el numero de telefono para pedidos y lo de envios gratis
		$(function() {
		$(".draggable").draggable({
			axis: "x",
			stop: function(event, ui) {
				var deltaX = ui.position.left - ui.originalPosition.left;
				if (deltaX > 50) {
					$('#carouselExampleSlidesOnly').carousel('prev');
				} else if (deltaX < -50) {
					$('#carouselExampleSlidesOnly').carousel('next');
				}
				// Restaurar la posición del elemento draggable
				$(this).animate({
					left: 0
				});
			}
		});
	});
	</script>


    </body>
</html>
