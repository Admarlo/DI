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
  <title>for 2. Círculos en fila 3.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for 2</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>
<?php
$circulos = rand(1, 10);
$radio = rand(10, 50);

if ($circulos == 1) {
    print "  <h2>$circulos círculo de $radio px</h2>\n";
} else {
    print "  <h2>$circulos círculos de $radio px</h2>\n";
}
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" "
    . "width=\"" . (3* $radio * $circulos - $radio) . "px\" height=\"" . 2 * $radio . "px\" style=\"border: black 1px solid\">\n";

for ($i = 1; $i <= $circulos; $i++) {
    print "      <circle cx=\"" . (3 * $radio * $i - 2 * $radio). "\" cy=\"$radio\" r=\"$radio\" fill=\"black\" />\n";
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
