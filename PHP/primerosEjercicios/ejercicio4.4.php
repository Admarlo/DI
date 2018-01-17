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
  <h1>Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100</h1>

  <p>Este ejercicio quedará resuelto y explicado de la siguiente forma.</p>

  <table>
    <tbody>

<?php
print "<p>------------------------------------------------------------- </p>";
print "<p>Usaremos dos búcles for para recorrer de 1 a 10  y dibujar la tabla:</p>";
print"<p>El primero para recorrer el eje X y el segundo para el eje Y</p>";
print"<p>Finalmente utilizando el mismo búcle para recorrer el eje X lo \nusaremos para rellenar los números del 1 al 100</p>";
print"<p><strong>      RESULTADO FINAL</strong></p>";
$i=1;
for ($i1=1; $i1<=10; $i1++)
{
echo "<tr>";
for ($j2=1; $j2<=10; $j2++)
{
echo "<td>", $i, "</td>";
$i=$i+1;
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
