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
			<div class="col-2">
				<a href="./index.html" class="btn btn-danger btn-sm" role="button" aria-pressed="true"><b>Cerrar Sesion</b></a>
				<button type="button" class="btn btn-secondary btn-sm" value="" onclick="window.print();">
					<i class="fas fa-print"></i>
				</button>
			</div>
			<div class="col-5 text-right">
				<p class="lead">Bienvenido Usuario <img src="./img/ban_gastom.jpg" class="rounded-circle" alt="" height="60"></p>
			</div>
		</div>
	</div>
</header>

<section>
	<div class="container">
		<div class="row py-2">
			<div class="col-12">
				<div class="container">
					<h1 class="display-5 text-center pb-3 font-italic">
					Vista de usuario
					</h1>
				</div>
				<div class="col-12 bg-faded">
					<h1 class="display-5">Cuentas</h1>
					<center>
					<table border="1">
						<thead>
							<tr>
								<th class="text-center bg-faded px-3">Tipo Cuenta</th>
								<th class="text-center bg-faded px-3">Numero Cuenta</th>
								<th class="text-center bg-faded px-3">Moneda</th>
								<th class="text-center bg-faded px-3">saldo</th>
								<th class="text-center bg-faded px-3">Detalle</th>
							</tr>
						</thead>
							<tr>
								<th class="text-center lead font-weight-bold px-2 py-2">Cuenta de Ahorro</th>
								<th class="text-center lead">N° <?php	$code = rand(100000000, 999999990); echo $code;?></th>
								<th class="text-center lead">peso</th>
								<th class="text-center lead">$ 500.000</th>
								<th class="text-center lead"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1"><i class="fas fa-search"></i></button></th>
							</tr>
					</table>
					<br>
					<hr>
					<br>
					<table border="1">
						<thead>
							<tr>
								<th class="text-center bg-faded px-3">Tipo Cuenta</th>
								<th class="text-center bg-faded px-3">Numero Cuenta</th>
								<th class="text-center bg-faded px-3">Moneda</th>
								<th class="text-center bg-faded px-3">saldo</th>
								<th class="text-center bg-faded px-3">Detalle</th>
							</tr>
						</thead>
							<tr>
								<th class="text-center lead font-weight-bold px-2 py-2">Cuenta vista</th>
								<th class="text-center lead">N° <?php	$code = rand(100000000, 999999990); echo $code;?></th>
								<th class="text-center lead">peso</th>
								<th class="text-center lead">$ 500.000</th>
								<th class="text-center lead"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1"><i class="fas fa-search"></i></button></th>
							</tr>
					</table>
					<br>
					<hr>
					<br>
					<table border="1">
						<thead>
							<tr>
								<th class="text-center bg-faded px-3">Tipo Cuenta</th>
								<th class="text-center bg-faded px-3">Numero Cuenta</th>
								<th class="text-center bg-faded px-3">Moneda</th>
								<th class="text-center bg-faded px-3">saldo</th>
								<th class="text-center bg-faded px-3">Detalle</th>
							</tr>
						</thead>
							<tr>
								<th class="text-center lead font-weight-bold px-2 py-2">Cuenta Corriente</th>
								<th class="text-center lead">N° <?php	$code = rand(100000000, 999999990); echo $code;?> </th>
								<th class="text-center lead">peso</th>
								<th class="text-center lead">$ 500.000</th>
								<th class="text-center lead"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal1"><i class="fas fa-search"></i></button></th>
							</tr>
					</table>
					</center>
					<br><br>
				</div>
			</div>
		</div>
	</div>
</section>			

							<!-- boton de llamada del modal -->
								<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal1">modal</button> -->
							<!-- modal -->
							<center>
							<div class="modal fade" id="modal1">
								<div class="modal-dialog modal-lg">
									<div class="modal-content bg-faded">
										<div class="modal-hedear px-3 pt-3">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="far fa-window-close"></i></button>
											<h5 class="modal-title font-italic">Detalle de Cuenta</h5>
											<hr>
										</div>
<?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	?>
										<div class="modal-body">
											<table border="1">
												<thead>
													<tr>
														<th class="text-center bg-faded lead px-2">Fecha</th>
														<th class="text-center bg-faded lead px-2">N° Operacion</th>
														<th class="text-center bg-faded lead px-2">Descripcion</th>
														<th class="text-center bg-faded lead px-2">Cargos $</th>
														<th class="text-center bg-faded lead px-2">Abonos $</th>
														<th class="text-center bg-faded lead px-2">Saldos $</th>
													</tr>
												</thead>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$transacciones = ['Giro en cajero', 'Giro en caja vecina', 'Compra en comercio'];	
																						$rtran = rand(0,count($transacciones)-1);

																						echo $transacciones[$rtran];
																				?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<!-- borrar -->
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<tr><?php	$dia = rand(1, 31);	$mes = rand(1, 12);	$Ntran = rand(11111111, 99999999);	$price = rand(1500, 1000000)	?>
														<td class="text-center"><?php echo $dia ?>/<?php echo $mes ?>/2018</td>
														<td class="text-center"><?php echo $Ntran ?></td>
														<td class="text-center"><?php	$rtran = rand(0,count($transacciones)-1);	echo $transacciones[$rtran];	?></td>
														<td class="text-center">$<?php echo $price; ?></td>
														<td class="text-center">0</td>
														<td class="text-center">450.000</td>
													</tr>
													<!-- borrar -->
											</table>
										</div>
										<div class="modal-footer">
											<hr>
											<button type="button" class="btn btn-secondary btn-sm" value="" onclick="window.print();">
											<i class="fas fa-print"></i>
											</button>
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CERRAR</button>
										</div>
									</div>
								</div>
							</div>
							</center>
																<!-- modal -->
							
							






<footer>
	<div class="container bg-inverse">
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
