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
  <h1>Convertidor de pies y pulgadas a centímetros (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$pies     = recoge("pies");
$pulgadas = recoge("pulgadas");

$piesOk     = false;
$pulgadasOk = false;

if ($pies == "") {
    print "  <p class=\"aviso\">No ha escrito el número de pies.</p>\n";
    print "\n";
} elseif (!ctype_digit($pies)) {
    print "  <p class=\"aviso\">No ha escrito los pies como número entero positivo.</p>\n";
    print "\n";
} else {
    $piesOk = true;
}

if ($pulgadas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de pulgadas.</p>\n";
    print "\n";
} elseif (!is_numeric($pulgadas)) {
    print "  <p class=\"aviso\">No ha escrito las pulgadas como número.</p>\n";
    print "\n";
} elseif ($pulgadas < 0) {
    print "  <p class=\"aviso\">Las pulgadas no pueden ser negativas.</p>\n";
    print "\n";
} else {
    $pulgadasOk = true;
}

if ($piesOk && $pulgadasOk) {
    $centimetros = ($pies * 12 + $pulgadas) * 2.54;
    print "  <p>$pies pies y $pulgadas pulgadas son $centimetros centímetros</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones-aritmeticas-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
