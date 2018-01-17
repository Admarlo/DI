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
  <h1> Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los
números del uno 1 al 4 </h1>

  <h2>Hacer una función que las calcule invocando la función pow. En
PHP las funciones hay que definirlas antes de invocarlas. Los parámetros se indican con su
nombre ($cantidad) si son por valor y antecedidos de & (&$cantidad) si son por referencia.
Consultar el manual argumentos de funciones.</h2>

  <p>Este ejercicio quedará resuelto y explicado de la siguiente forma.</p>

  <table>
    <tbody>

<?php
print "<p>------------------------------------------------------------- </p>";
print"<p>1-Definimos el tamaño de la constante TAM</p>";
print"<p>2-Definimos la función, donde crearemos una variable resultado donde almacenaremos el resultado de la potencia, devolviéndo</p>";
print"<p>3-Creamos la tabla con los dos búcles.</p>";
print"<p>4-Pasamos el valor de los búcles a la función potencia</p>";
print"<p><strong>RESULTADO FINAL</strong></p>";

define('TAM',4);
function potencia ($base, $exponente)
{
   $resultado= pow($base, $exponente); 
   return $resultado; 
}
echo "<table>";
for ($i=1; $i<=TAM; $i++) 
{
   echo "<tr>";
   for ($j=1; $j<=TAM; $j++)
      echo "<td>". potencia($i,$j). "</td>"; 
   echo "</tr>";
}
echo "</table>";
?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
