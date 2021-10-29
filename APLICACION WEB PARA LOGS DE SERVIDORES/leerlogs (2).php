<!DOCTYPE html>
<html lang="en">

<style>

fieldset.cajatitulo 
{
padding: 5px 10px;
}

textarea {
  background-color: #E2E2E2;
  width: 970px;
  height: 270px;
}

h2.tit {
	margin: 50px;
	color:#003472;
}
body.colorfondo 
{
	background-color: #D18DDE;
	
}

img {
	position:absolute;
	top:20px; 
	right: 80px;
	
}
</style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<fieldset class="cajatitulo">
	<body class="colorfondo">
	<img src="andel.png"alt="Andel" width="200"height="48">

		<fieldset style="background-color: #D18DDE">
			<legend><h2 class="tit">ELIGE EL TIPO DE LOG:</h2></legend>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="opciones">
    				<select name="opcionlog">
						<option  selected value="nulo">Elige un fichero</option>
						<option value="AccessLog">Access Log</option>
						<option value="ErrorLog">Error Log</option>
						<option value="InstallLog">Install Log</option>
						</optgroup>
    				</select>
					<input class="enviar" type="Submit" name="Enviar" value="Enviar consulta"></br>
	
				</form>

<?php
if(isset($_POST['Enviar']) &&  ($_POST['opcionlog']!="nulo")){
	$opcionlog = $_POST['opcionlog'];
	
	switch($opcionlog) {
		case "AccessLog":
			$fichero = "C:\\xampp\\apache\\logs\\access.log";
			break;
		case "ErrorLog":
			$fichero = "C:\\xampp\\apache\\logs\\error.log";
			break;
		case "InstallLog":
			$fichero = "C:\\xampp\\apache\\logs\\install.log";
			break;
	}
	
	$datalines = file($fichero);
	echo "<textarea rows = '10' cols='50'> <b>Fichero abierto $fichero</br></b>";             
	foreach ($datalines as $linea) {
		echo $linea . "<br>";
	}
	
}

?>

</fieldset>
</fieldset>
</body>
</html>

