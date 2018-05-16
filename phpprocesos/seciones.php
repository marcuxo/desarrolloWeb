<?php

if (isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["tipo"])){// Datos de login-------------------------------
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$tipo=$_POST["tipo"];
	InicioSesion($user, $pass, $tipo);
} elseif (isset($_POST['recumail'])){
	$mail=$_POST['recumail'];
	Recuperacion($mail);//ENVIA DATO A FUNCION
} elseif (isset($_POST['nombre']) && isset($_POST['apell']) && isset($_POST['rut'])// datos Asesor------------------------
	&& isset($_POST['f_nacimiento']) && isset($_POST['sexo']) && isset($_POST['adre'])
	&& isset($_POST['fono']) && isset($_POST['sucursal']) && isset($_POST['mail'])) {
	$nom=$_POST['nombre'];
	$apell=$_POST['apell'];
	$rut=$_POST['rut'];
	$f_nac=$_POST['f_nacimiento'];
	$sexo=$_POST['sexo'];
	$direct=$_POST['adre'];
	$fono=$_POST['fono'];
	$sucre=$_POST['sucursal'];
	$mail=$_POST['mail'];
	
	AgregarAsesor($nom, $apell, $rut, $f_nac, $sexo, $direct, $fono, $sucre, $mail);

} elseif (isset($_POST['nombre_cli']) && isset($_POST['apell']) && isset($_POST['rut_cli'])// datos cliente------------------------
	&& isset($_POST['f_nacimiento']) && isset($_POST['sexo']) && isset($_POST['adre'])
	&& isset($_POST['fono']) && isset($_POST['mail']) && isset($_POST['cuenta'])
	&& isset($_POST['monto']) && isset($_FILES['file']['name'])) {
		$nom=$_POST['nombre_cli'];
		$apell=$_POST['apell'];
		$rut=$_POST['rut_cli'];
		$f_nat=$_POST['f_nacimiento'];
		$sexo=$_POST['sexo'];
		$direct=$_POST['adre'];
		$fono=$_POST['fono'];
		$mail=$_POST['mail'];
		$cuenta=$_POST['cuenta'];
		$monto=$_POST['monto'];
		$foto=$_FILES['file']['name'];
		
		AgregaCliente($nom, $apell, $rut, $f_nat, $sexo, $direct, $fono, $mail, $cuenta, $monto, $foto);
} else {//----------------------------------------------------------si algo falla saldra este mensaje------------------------------
	echo "no llega niuna wea";
}

function InicioSesion($dato1, $dato2, $dato3)
{
	// $texto = $dato1." - ".$dato2." - ".$dato3;
	// echo $texto;
	if ($dato3=="cliente" && $dato2=="123") {
		# code...
		header('Location: ../vistaUsuario.php');
	} elseif ($dato3=="gerente" && $dato2=="123") {
		# code...
		header('Location: ../vistaGerente.php');
	} elseif ($dato3=="asesor" && $dato2=="123") {
		# code...
		header('Location: ../consola_activacion_agente_cuentas.php');
	} else{
		echo "Error, revisa tu usuario y contraseña";
	}
	
}

function Recuperacion($recurreo)
{
	echo $recurreo;
	$code = rand(1000, 9999);//numeros aleatoreos
	$destinatario = $recurreo; 
	$asunto = "Recuperacion de Contraseña."; 
	$cuerpo = " texto de prueba con codigos de prueba".$code;
	$desde = "From: mi@cuentadeemail.com";

	mail($destinatario,$asunto,$cuerpo,$desde);
}

function AgregaCliente($nom, $apell, $rut, $f_nat, $sexo, $direct, $fono, $mail, $cuenta, $monto, $foto)
{
	echo ($nom." - ".$apell." - ".$rut." - ".$f_nat." - ".$sexo." - ".$direct." - ".$fono." - ".$mail." - ".$cuenta." - ".$monto." - ".$foto);

}

function AgregarAsesor($nom, $apell, $rut, $f_nac, $sexo, $direct, $fono, $sucre, $mail)
{
	echo $nom." - ". $apell." - ".$rut." - ".$f_nac." - ".$sexo." - ".$direct." - ".$fono." - ".$sucre." - ".$mail;
}

 ?>