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
  <h1> ídem al anterior, pero que muestre las fotos en 100x100 y que al pulsar abra la foto
entera. Compruebe que sólo muestra fotos con extensión .jpg, .png, bmp o .gif </h1>

  <h2>Haga una función que lo compruebe usando las expresiones regulares como aparecen en el manual.</h2>

  <p>Este ejercicio quedará resuelto:</p>

  <table>
    <tbody>

<?php
function valida_foto($fotos)
{
  $rdo=1;
  if (preg_match("[Jj][Pp][Gg]$", $fotos)) $rdo=1;
  if (preg_match("[Gg][Ii][Ff]$", $fotos)) $rdo=1;
  if (preg_match("[Pp][Nn][Gg]$", $fotos)) $rdo=1;
  if (preg_match("[Bb][Mm][Pp]$", $fotos)) $rdo=1;
  return $rdo;
}
echo "<table>";
$puntero = opendir('fotos');
$i=1;
while (false !== ($foto = readdir($puntero)))
{
  if ($foto!="." && $foto!=".." && valida_foto($foto))
  {
    if ($i==1)
      echo "<tr>";
    echo "<td><a href='./fotos/min/mini-$foto'>";
    echo "<img src='fotos/$foto' width=100 height=100></img>";
    echo "</a></td>";
    if ($i==4)
    {echo "</tr>"; $i=0;}
    $i++;
  }
}
closedir($puntero);
echo "</table>";
?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
