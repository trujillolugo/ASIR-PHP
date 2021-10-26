# CALCULADORA CREADA CON HTML Y PHP

* * *

## CODIGO DE HTML 

-----------------------------------

``` HTML 
<pre><code> <!doctype html>
<html lang="es">
	<head>
		<title>Calculadorcita</title>
		<meta name="author" content="Linda Trujillo Lugo">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	</head>
	<body>
	<h2><br><b>CALCULADORCITA :) </b></br></h2>
		<form action="resultado.php" method="POST">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
			<option value=">">>
			</option>
			<option value="<"><
			</option>
		</select>
		<input type="text" name="operando2">
		<input type="submit" value="enviar">
	</form>
	</body>
  </html> </code></pre> 
```
  
  ## CÓDIGO DE PHP
  
  --------------------------------------------------
  
 ``` PHP
  <pre><code><?php
	$operando1 = $_POST['operando1'];
	$operando2 = $_POST['operando2'];
	$operador = $_POST['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
		echo "La solución es: ". $solucion;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
		echo "La solución es: ". $solucion;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
		echo "La solución es: ". $solucion;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
		echo "La solución es: ". $solucion;
	}
	

	if ($operando1 < $operando2) {
	echo $operando1 . " es menor que " . $operando2;
	}else {
	echo $operando1 . " NO es menor que " . $operando2;
	}
?></code></pre> 
```
