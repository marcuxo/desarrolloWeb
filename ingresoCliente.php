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
				<a href="./consola_activacion_agente_cuentas.php" class="btn btn-success btn-sm">Volver</a>
			</div>
			<div class="col-6 text-center">
				<h1 class="display-4 font-italic">Ingreso de Cliente</h1>
			</div>
		</div>
	</div>
</header>

<section>
<div class="container py-3">
	<div class="row">
		<div class="col-6">
			<article>
				<img src="./img/banco.jpg" alt="" height="400">
				<p class="lead font-italic font-weight-bold">Banco Think Ideas in Motion</p>
				<p class="lead">Un banco en el que puedes confiar tu dinero, para un mejor futuro junto a los tuyos</p>
			</article>	
		</div>
		<div class="col-6 text-center">
			<form enctype="multipart/form-data" action="./phpprocesos/seciones.php" method="post">
				<input type="text" required placeholder=" Nombres" name="nombre_cli" size="46"><br><br>
				<input type="text" required placeholder=" Apellidos" name="apell" size="46"><br><br>
				<input type="text" required placeholder=" Rut -- 16114499-1" name="rut_cli" size="46" maxlength="10"><br>
	
				<label class="lead text-right">Fecha Nacimiento</label><br>
				<input type="date" name="f_nacimiento" required="">
				<label for="" class="lead px-5"></label>
				<select name="sexo" required>
					<option value="">Sexo</option>
					<option value="femenino">Femenino</option>
					<option value="masculino">Masculino</option>
					<option value="indefinido">Indefinido</option>
				</select><br><br>

				<input type="text" required placeholder=" Direccion" name="adre" size="46"><br><br>
				<input type="text" required placeholder=" Telefono" name="fono" size="46" maxlength="12"><br><br>
				<input type="email" required placeholder=" Correo" name="mail" size="46"><br>
				
				<hr>
				<select name="cuenta" required>
					<option value="">Tipo Cuenta</option>
					<option value="c_corriente">Cuenta Corriente</option>
					<option value="c_vista">Cuenta Vista</option>
					<option value="c_ahorro">Cuenta de Ahorro</option>
				</select>
				<input type="number" required placeholder=" Monto Inicial" name="monto"><br><br>
				<label for="" class="lead">Subir Foto.</label><br>
				<input type="file" name="file" required><br><br>
				<input type="submit" class="btn btn-primary btn-sm px-5" value="Agregar"><label class="px-3"></label>
				<input type="reset" class="btn btn-primary btn-sm px-5" value="Borrar Datos">	
			</form>
		</div>
	</div>
</div>
</section>
<!-- footer -->
<footer>
	<div class="container-fluid">
		<div class="col-12 text-center  bg-inverse">
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