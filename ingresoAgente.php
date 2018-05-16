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
			<div class="col-4 bg-inverse">
				<h1 class="display-4 text-white">Banco Think</h1>
			</div>
			<div class="col-1 bg-inverse text-right hidden-sm-down">
				<img src="img/LOGO_INV.png" alt="" height="80">
			</div>
			<div class="col-1">
				<a href="./vistaGerente.php" class="btn btn-success btn-sm">Volver</a>
			</div>
			<div class="col-6 text-right">
				<h1 class="display-4 font-italic">Ingreso de Cliente</h1>
			</div>
		</div>
	</div>
</header>
<section>
<div class="container">
	<div class="row">
			<div class="col-6 text-center pt-5">
				<article>
					<img src="./img/jecutivos.png" alt="" height="450">
					<h1 class="lead">Solo los mejores ejecutivos de cuentas forman parte del mejor banco.</h1>
					<p class="lead font-italic"><b>Banco think</b></p>
				</article>
			</div>
				<div class="col-6 text-right">
					<form action="./phpprocesos/seciones.php" method="post">
					<input type="text" required placeholder=" Nombres" name="nombre" size="46"><br><br>
					<input type="text" required placeholder=" Apellidos" name="apell" size="46"><br><br>
					<input type="text" required placeholder=" Rut" name="rut" size="46"><br><br>
					<label class="lead">Fecha Nacimiento</label><label for="" class="lead px-4"></label>
					<label class="pr-5"/></label>
					<label class="pr-5"/></label>
					<label class="pr-5"/></label>
					<br>
					<input type="date" name="f_nacimiento" required>
					<label for="" class="lead px-5"></label>
						<select name="sexo" required>
							<option value="">Sexo</option>
							<option value="femenino">Femenino</option>
							<option value="masculino">Masculino</option>
							<option value="indefinido">Indefinido</option>
						</select>
						<hr>
					
					<input type="text" required placeholder=" Direccion" name="adre" size="46"><br><br>
					
					<input type="text" required placeholder=" Telefono" name="fono" size="46"><br><br>
					<input type="text" required placeholder=" Sucursal" name="sucursal" size="46"><br><br>
					<input type="email" required placeholder=" Correo" name="mail" size="46"><br><br>

					<hr>
					<label class="pl-5"></label>
					<input type="submit" class="btn btn-primary btn-sm" value="Agregar Agente"><label class="px-3  hidden-sm-down"></label>
					<input type="reset" class="btn btn-primary btn-sm" value="Borrar Datos">
				</form>
				</div>		
		<div class="col pt-5"></div>
	</div>
</div>
</section>




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