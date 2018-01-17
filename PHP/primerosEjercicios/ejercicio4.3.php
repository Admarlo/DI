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
  <h1>Hacer un programa que muestre en pantalla información de PHP con la
función phpinfo(). Muestre la información centrada horizontalmente en la pantalla.</h1>

  <p>Este ejercicio quedará resuelto y explicado de la siguiente forma.</p>

  <table>
    <tbody>
<center>
<?php
print "<p>------------------------------------------------------------- </p>";
print "<p>Para la solución necesitamos acceder a la función phpinfo:</p>";
echo phpinfo();
?>

</center>

    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
