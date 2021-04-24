<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Plantilla para Menú </title>

	<!-- links a archivos css -->

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


	<!-- links a fuentes de google -->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">

</head>

<body>

	<!-- estilos locales -->

	<style type="text/css">
		body {
			font-family: 'Montserrat', sans-serif;
		}

		.slogan {
			font-family: 'Long Cang', cursive;
			color: #fff;
			text-align: center;
			font-size: 3.5em;
		}

			/* media-query */

			@media(max-width: 985px) {
				.slogan {
					font-size: 3em;
				}
			}

			@media(max-width: 350px) {
				footer p {
					font-size: 0.8em;
				}
			}

			@media(max-width: 330px) {
				.slogan {
					font-size: 2em;
				}
			}
		
	</style>

	<!--  --------------------------------  cabecera/banner/menu/categoria -------------------------------- -->

	<div class="background5">
	
		<div class="container-fluid background5-opacity">

			<!-- cabecera: ingresar la direccion y el numero telefonico del local -->

			<div class="row">
				<div class="col py-2 background1 text-tel"><p class="d-inline" >Pedro Reta 117, B1824 Monte Grande | +54911 1234 5678</p> </div>
			</div>


			<div class="row">

				<!-- banner: ingresar el logo previamente guardado en la carpeta "icon" -->

				<div class="col-12 col-lg-2 ml-lg-3 navbar-brand d-flex justify-content-center ">
					<a href="index.php"><img src="img/icon/logo.png" class="" width="200px" height="200px"></a>
				</div>

				<!-- menu: ingresar la cantidad de categorias solicitadas -->

				<div class="col-9 d-none d-lg-block">
					
					<header class=" ml-3">
				
						<nav class="nav navbar navbar-expand-lg  mt-4 ">
						
							<div class="collapse navbar-collapse" id="navbar">
								
								<ul class="navbar-nav mr-auto">

									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 1</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 2</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 3</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 4</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 5</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 6</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 7</a></li>
									<li class="nav-item"><a href="plantilla-categorias.php" class="nav-link">Categoria 8</a></li>

								</ul>
							
							</div>

						</nav>
					
					</header>

				</div>

			</div>

			<div class="row my-3 my-lg-5 d-flex justify-content-center">
				<div class="col-10 col-lg-8"> 

					<!-- ingresar la categoria a la que corresponden los precios -->

					<h3 class="slogan"> Categoria X </h3>
				</div>		
			</div>

		</div>

	</div>


	<!--  --------------------------------  precios -------------------------------- -->



	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-striped my-5">

					<!-- ingresar la opcion y el precio correspondiente-->

					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>
					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>
					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>
					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>
					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>
					<tr>
						<td>Opcion</td>
						<td>$999</td>					
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr >
						<td>Opcion</td>
						<td>$999</td>		
					</tr>

					<tr>
						<td>Opcion</td>
						<td>$999</td>	
					</tr>

				</table>
			</div>
		</div>
	</div>

<!--  --------------------------------  footer/mapa/menu -------------------------------- -->

	<div class="container-fluid background4">

		<div class="container">
			<div class="row py-3 py-lg-5" >

				<!-- mapa para pantallas grandes: pc o tablet -->
				
				<div class="col-10 d-none d-lg-block">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.7514166441997!2d-58.46493648518776!3d-34.812195376064764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd38a5d9b4f7b%3A0xb927337ee1c0f269!2sOne%20Almacen%20Creativo!5e0!3m2!1ses-419!2sar!4v1614375497813!5m2!1ses-419!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

				<!-- mapa para pantallas chicas: smartphone o tablet -->

				<div class="col-12 d-block d-lg-none py-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.7514166441997!2d-58.46493648518776!3d-34.812195376064764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd38a5d9b4f7b%3A0xb927337ee1c0f269!2sOne%20Almacen%20Creativo!5e0!3m2!1ses-419!2sar!4v1614375497813!5m2!1ses-419!2sar" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

				<!-- menu del footer -->

				<div class="col-12 col-lg-2 py-3 py-lg-0">
					<ul class="op-footer">
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 1</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 2</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 3</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 4</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 5</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 6</a></li>
						<li class="d-inline d-lg-block mx-2"><a href="plantilla-categorias.php">Categoria 7</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->

	<footer class="py-3">
		<p >Desarrollado por <a href="https://www.onecreativo.com/">ONE Almacen Creativo</a></p>
	</footer>

	<!-- links a archivos js -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>