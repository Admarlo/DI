<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tres dado más altos. Juego. if .. elseif ... else ... (3).
    Ejercicios. Programación web en PHP. Adria</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Juego: Tres Dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tbody>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
      <tr>
<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" title=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" title=\"$dado2\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado3.svg\" alt=\"$dado3\" title=\"$dado3\" width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";

if ($dado1 == $dado2 && $dado1 == $dado3) {
    print "  <p>Ha sacado un trío de $dado1.</p>\n";
} elseif ($dado1 == $dado2 || $dado1 == $dado3) {
    print "  <p>Ha sacado una pareja de $dado1.</p>\n";
} elseif ($dado2 == $dado3) {
    print "  <p>Ha sacado una pareja de $dado2.</p>\n";
} else {
    print "  <p>El valor más alto es " . max($dado1, $dado2, $dado3) . ".</p>\n";
}
?>
      </tr>
    </tbody>
  </table>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-10-12">19 de diciembre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>