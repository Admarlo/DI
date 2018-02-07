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
  <h1>Convertidor de segundos a minutos y segundos (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$segundos = recoge("segundos");

$segundosOk = false;

if ($segundos == "") {
    print "  <p class=\"aviso\">No ha escrito el número de segundos.</p>\n";
    print "\n";
} elseif (!ctype_digit($segundos)) {
    print "  <p class=\"aviso\">No ha escrito los segundos como número entero positivo.</p>\n";
    print "\n";
} else {
    $segundosOk = true;
}

if ($segundosOk) {
    $min = floor($segundos / 60);
    $seg = $segundos % 60;
    print "  <p>$segundos segundos son $min minutos y $seg segundos</p>\n";
    print "\n";
}
?>
  <p><a href="operaciones-aritmeticas-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2016-11-04">4 de noviembre de 2016</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
