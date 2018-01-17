<?php
/**
 * Primeros programas
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Primeros programas.
    Adrià Miquel de Martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />

</head>

<body>
  <h1>Hacer un programa que sume dos variables que almacenan dos números
distintos.</h1>

  <p>Este ejercicio quedará resuelto y explicado de la siguiente forma.</p>

  <table>
    <tbody>
<?php

print "<p>------------------------------------------------------------- </p>";
print "<p>Crearemos las variables con dos numeros almacenados</p>";
$var1=2;
$var2=5;
print"<p>La variable1 = $var1 y la variable2 = $var2</p>";
print"<p>La suma la almacenamos en una tercera variable y la mostramos:\n
	'variable3= $var1+$var2'\n
</p>";
$var3=$var1+$var2;
print"<p><strong>variable3 =$var3</strong></p>";

?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
