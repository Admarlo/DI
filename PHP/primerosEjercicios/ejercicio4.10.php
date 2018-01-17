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
  <h1>  ídem al anterior, pero que si no existe la miniatura de una foto debe de crearla. Para generar la miniatura se usa el programa convert.  </h1>

  <h2>Hay que invocarlo en línea de comandos desde PHP son la función system</h2>

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
function crea_tumbs($foto)
{
 if (!is_dir('fotos/tumbs'))
   mkdir ('fotos/tumbs', 0777);
 if (!is_file('fotos/tumbs/MINI-$foto'))
   system ("convert -sample 40x40 /fotos/$foto /fotos/tumbs/MINI-
$foto");
}
echo "<table>";
$puntero = opendir('fotos');
$i=1;
while (false !== ($foto = readdir($puntero)))
{
  if ($foto!="." && $foto!=".." && valida_foto($foto))
  {
    crea_tumbs($foto);
    if ($i==1)
      echo "<tr>";
    echo "<td><a href='fotos/tumbs/MINI-$foto'>";
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
	?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
