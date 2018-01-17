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
  <title>for 5. Líneas 2.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for 2</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>


<?php
$lineas = rand(3, 10);

print "  <h2>$lineas líneas</h2>\n";
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"" . 50 * $lineas . "px\" height=\"120px\" "
    . " viewbox=\" -10 -10 " . 50 * $lineas . " 120\" style=\"border: black 1px solid\" >\n";

for ($i = 1; $i <= $lineas; $i++) {
    print "      <line x1=\"0\" y1=\"0\" x2=\"" . (50 * $i - 50). "\" y2=\"100\" stroke=\"green\" stroke-width=\"1\" />\n";
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
