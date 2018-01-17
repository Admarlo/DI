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
  <title>for 2. Círculos de colores
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>
<?php
$circulos = rand(1,10);

if ($circulos == 1) {
    print "  <h2>$circulos círculo</h2>\n";
} else {
    print "  <h2>$circulos círculos</h2>\n";
}
print "\n";
print "  <table class=\"conborde\">\n";
print "    <tbody>\n";
print "      <tr>\n";
for ($i = 0; $i < $circulos; $i++) {
    print "        <td>\n";
    print "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70px\" height=\"70px\">\n";
    print "            <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"hsl(" . rand(1, 360) . ", 100%, 50%)\" />\n";
    print "          </svg>\n";
    print "        </td>\n";
}
print "      </tr>\n";
print "    </tbody>\n";
print "  </table>\n";
?>
    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
