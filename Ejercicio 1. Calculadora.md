# CALCULADORA CREADA CON HTML Y PHP

* * *

<pre><code> `` <!doctype html>
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
  </html>`` </code></pre>
