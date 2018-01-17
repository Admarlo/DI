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
  <title>for 11. Diana.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>
<?php
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"400px\" height=\"400px\" viewBox=\"-200 -200 400 400\">\n";

for ($i = 0; $i < 4; $i++) {
    print "      <circle cx=\"0\" cy=\"0\" r=\"" . (200 - 50 * $i) . "\" fill=\"red\"/>\n";
    print "      <circle cx=\"0\" cy=\"0\" r=\"" . (200 - 50 * $i - 25) . "\" fill=\"#ddd\"/>\n";
}

$disparos = rand(1,10);
for ($i = 0; $i < $disparos; $i ++) {
    $x = rand(-180, 180);
    $y = rand(-180, 180);
    print "      <path fill=\"black\" stroke=\"white\" stroke-width=\"2\" "
     . "d=\"m $x,$y 3.5,-1.1 3.0,-2.7 4.4,2.5 3.6,0.6 0.5,2.9 2.2,2.9 -2.2,3.1 "
     . "-0.1,3.6 -3.3,0.2 -1.7,2.7 -4,-1.4 -3.9,0.2 -0.9,-4.2 -2.7,-2.6 1.7,-3.4 z\"/>\n";
}
print "    </svg>\n";
print "  </p>\n";
print "\n";
print "  <h2>Estadísticas</h2>\n";
print "\n";
print "  <ul>\n";
print "    <li>Número de disparos: <strong>$disparos</strong>.</li>\n";
print "  </ul>\n";
?>
    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
