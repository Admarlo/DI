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
  <h1> Hacer un programa que muestre en una tabla de 4 columnas todas las
imágenes de el directorio "fotos". </h1>

  <h2>Para ello consulte el manual (en concreto la referencia de
funciones de directorio).Suponga que en el directorio sólo existen fotos.</h2>

  <p>Este ejercicio quedará resuelto:</p>

  <table>
    <tbody>

<?php
if ($gestor = opendir('fotos'))
{
   echo "<table>";
   echo "<tr>";
   $i=0;
   while (false !== ($archivo = readdir($gestor)))
   {
      if ($archivo!="." && $archivo!="..")
      {
             if ($i==4)
         {
                $i=0;
                    echo "</tr>";
                    echo "<tr>";
             }
         $i++;
             echo "<td>";
             echo "<a href=fotos/$archivo><img src=fotos/$archivo>
</a>";
             echo "</td>";
          }
   }
   echo "</tr>";
   echo "</table>";
   closedir($gestor);
}
?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
