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
  <h1> Ídem a 4.4 anterior, pero colorear las filas alternando gris y blanco. Además,
el tamaño será una constante con define(TAM, 10).</h1>

  <p>Este ejercicio quedará resuelto y explicado de la siguiente forma.</p>

  <table>
    <tbody>

<?php
print "<p>------------------------------------------------------------- </p>";
print"<p>1-Definimos el tamaño de la constante TAM</p>";
print"<p>2-Creamos la tabla</p>";
print"<p>3-En el primer for usamos un if para el valor de i/2=0 la fila sera gris</p>";
print"<p>4-En caso que no sea divisible entre 2 la fila será blanca</p>";
print"<p>5-Creamos la celda y sumamos 1 para continuar con el búcle for</p>";
print"<p><strong>RESULTADO FINAL</strong></p>";
define('TAM',10); 
echo "<table>"; 
$n=1;
for ($i=1; $i<=TAM; $i++)
{
 if ($i % 2 == 0) 
 echo "<tr bgcolor=#585858>";
 else
 echo "<tr>"; 
 for ($j=1; $j<=TAM; $j++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n+1; 
 }
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
