<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- import .css bootstrap -->
 	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 bg-inverse">
				<h1 class="display-4 text-white">Banco Think</h1>
			</div>
			<div class="col-1 bg-inverse text-right hidden-sm-down">
				<img src="img/LOGO_INV.png" alt="" height="80">
			</div>
			<div class="col-7 text-right align-bottom">
				<a href="./ingresoAgente.php" class="btn btn-success btn-sm" role="button" aria-pressed="true"><b>Agregar Asesor</b></a>
				<a href="./index.html" class="btn btn-danger btn-sm" role="button" aria-pressed="true"><b>Cerrar Sesion</b></a>
			</div>
		</div>
	</div>
</header>
<section>
	<div class="container-fluid">
		<div class="row py-2">
			<div class="col-12">
				<div class="container">
					<h1 class="display-5 text-center pb-3 font-italic">
					Panel Gerencia
					</h1>
				</div>
			</div>
			
			<div class="col">
				<center>
					<table border="1">
						<thead>
							<tr>
								<th class="text-center bg-faded lead">Foto</th>
								<th class="text-center bg-faded lead">Rut</th>
								<th class="text-center bg-faded lead">Nombre</th>
								<th class="text-center bg-faded lead">Apellidos</th>
								<th class="text-center bg-faded lead">Sucursal</th>
								<th class="text-center bg-faded lead">Datos</th>
								<th class="text-center bg-faded lead">Acciones</th>
							</tr>
						</thead>
							<tr>
								<td class="text-center p-2"><img src="./img/avatar_marco.jpg" class="rounded" alt="" height="80"></td>
								<td class="text-center">12118855-5</td>
								<td class="text-center">marco antonio</td>
								<td class="text-center">urrutia molina</td>
								<td class="text-center">El Monte</td>
								<td class="text-center px-2"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1">ver y actualizar</br> datos</button></td>
								<td class="text-center px-2"><button class="btn btn-success btn-sm">ACTIVAR</button>
								<button class="btn btn-danger btn-sm">DESVINCULAR</button></td>
							</tr>
							<!-- borrrar -->
							<tr>
								<td class="text-center p-2"><img src="./img/ban_aparicio.jpg" class="rounded" alt="" height="80"></td>
								<td class="text-center">12118855-5</td>
								<td class="text-center">Jeremy Robert</td>
								<td class="text-center">Aparicio Guerrero</td>
								<td class="text-center">Santiago</td>
								<td class="text-center"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1">ver y actualizar</br> datos</button></td>
								<td class="text-center"><button class="btn btn-success btn-sm">ACTIVAR</button>
								<button class="btn btn-danger btn-sm">DESVINCULAR</button></td>
							</tr>
							<tr>
								<td class="text-center p-2"><img src="./img/ban_gastom.jpg" class="rounded" alt="" height="80"></td>
								<td class="text-center">12118855-5</td>
								<td class="text-center">Gaston Andres</td>
								<td class="text-center">Fuentes Mazuela</td>
								<td class="text-center">Sueños</td>
								<td class="text-center"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1">ver y actualizar</br> datos</button></td>
								<td class="text-center"><button class="btn btn-success btn-sm">ACTIVAR</button>
								<button class="btn btn-danger btn-sm">DESVINCULAR</button></td>
							</tr>
							<!-- borrrrar -->

							<!-- boton de llamada del modal -->
								<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal1">modal</button> -->
							<!-- modal -->
							<div class="modal fade" id="modal1">
								<div class="modal-dialog">
									<div class="modal-content bg-faded">
										<div class="modal-hedear px-3 pt-3">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="far fa-window-close"></i></button>
											<h5 class="modal-title font-italic">Datos del Cliente</h5>
											<hr>
										</div>
										<div class="modal-body">
											<form action="" method="get">
											<input type="text" value="12345678-9" name="rut_cli" disabled>
											<input type="text" value="nombre" name="nombre_cli"><br>
											<input type="text" value="apellido 1" name="ape_pat">
											<input type="text" value="apellido 2" name="ape_mat"><br>
											<input type="text" value="sexualidad" name="sexo">
											<input type="text" value="18-03-1985" name="f_nacimiento">
											<hr>
											<input type="text" size="45" value="mi casa es la queda muy lejos 4586 el monte" name="adre"><br>
											<input type="text" value="correo@correo.com" name="mail">
											<input type="text" value="+56948515311" name="fono">
											<hr>
											<input type="text" value="cuenta vista" name="cuenta" disabled>
											<input type="text" value="500.000" name="monto"><br>
											<input type="text" value="cuenta de ahorro" name="cuenta" disabled>
											<input type="text" value="500.000" name="monto"><br>
											<input type="text" value="cuenta corriente" name="cuenta" disabled>
											<input type="text" value="500.000" name="monto"><br><br>
											<a href="recuperacionContrasena.html" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><b>Cambiar Contraseña</b></a>
											<!-- <input type="text" name=""><br> -->
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CERRAR</button><label> </label>
											<button type="submit" class="btn btn-success btn-sm">ACTUALIZAR</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							
					</table>
				</center>
			</div>
		</div>
	</div>
</section>


<!-- borrar -->
<br><br><br><br><br><br>
<!-- borrar -->



<footer>
	<div class="container-fluid bg-inverse">
		<div class="col-12 text-center">
			<small class="text-white font-italic">Creado por Marco//Jeremy//Gaston //\ grupo NULL</small>
		</div>
	</div>
</footer>
<!-- import fontOwesome js -->
 	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- import de .js jquery, tether, bootstrap -->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap4.min.js"></script>
</body>
</html>