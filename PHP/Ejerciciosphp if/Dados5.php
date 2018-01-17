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
  <h1>Juego: Tres Dados más altos</h1>

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
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado1c = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);
$dado2c = rand(1, 6);

print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$dado1a.svg\" alt=\"$dado1a\" title=\"$dado1a\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "          <img src=\"img/$dado1b.svg\" alt=\"$dado1b\" title=\"$dado1b\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "          <img src=\"img/$dado1c.svg\" alt=\"$dado1c\" title=\"$dado1c\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$dado2a.svg\" alt=\"$dado2a\" title=\"$dado2a\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "          <img src=\"img/$dado2b.svg\" alt=\"$dado2b\" title=\"$dado2b\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "          <img src=\"img/$dado2c.svg\" alt=\"$dado2c\" title=\"$dado2c\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "        </td>\n";

if ($dado1a == $dado1b && $dado1a == $dado1c) {
    $trio1 = $dado1a;
} else {
    $trio1 = 0;
}

if ($dado2a == $dado2b && $dado2a == $dado2c) {
    $trio2 = $dado2a;
} else {
    $trio2 = 0;
}

if ($dado1a == $dado1b || $dado1a == $dado1c) {
    $pareja1 = $dado1a;
} elseif ($dado1b == $dado1c) {
    $pareja1 = $dado1b;
} else {
    $pareja1 = 0;
}

if ($dado2a == $dado2b || $dado2a == $dado2c) {
    $pareja2 = $dado2a;
} elseif ($dado2b == $dado2c) {
    $pareja2 = $dado2b;
} else {
    $pareja2 = 0;
}

$total1 = $dado1a + $dado1b + $dado1c;

$total2 = $dado2a + $dado2b + $dado2c;

// print "<p>1: Trío $trio1 - Pareja $pareja1 - Total: $total1</p>\n";
// print "<p>2: Trío $trio2 - Pareja $pareja2 - Total: $total2</p>\n";

if ($trio1 > $trio2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($trio1 < $trio2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} else {
    if ($pareja1 > $pareja2) {
        print "        <td>Ha ganado el jugador 1</td>\n";
    } elseif ($pareja1 < $pareja2) {
        print "        <td>Ha ganado el jugador 2</td>\n";
    } else {
        if ($total1 > $total2) {
            print "        <td>Ha ganado el jugador 1</td>\n";
        } elseif ($total1 < $total2) {
            print "        <td>Ha ganado el jugador 2</td>\n";
        } else {
            print "        <td>Han empatado</td>\n";
        }
    }
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