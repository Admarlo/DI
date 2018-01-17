<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-for 1.php
 *
 * @author    Adria Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>for 7. Arco iris Circular.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for 2</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>


<?php
$numero = rand(3,10);
$paso = 360 / $numero;

print "  <h2>$numero colores</h2>\n";
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"" . 60 * $numero . "px\" height=\"" . 60 * $numero . "px\" "
    . " viewbox=\"" . - 30 * $numero . " " . - 30 * $numero . " " . 60 * $numero . " " . 60 * $numero . "\">\n";

for ($i = 0; $i < $numero; $i++) {
    print "      <circle cx=\"0\" cy=\"0\" r=\"" . (-30 * $i + 30 * $numero) . "\" fill=\"hsl(" . round($i * $paso) . ", 75%, 50%)\" />\n";
}

print "    </svg>\n";
print "  </p>\n";
?>


    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
