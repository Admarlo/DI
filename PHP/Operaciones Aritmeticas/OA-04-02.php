<?php
/**
 * Operaciones Aritméticas
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Operaciones Aritméticas 02
    Adrià Miquel de Martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Convertidor de segundos a horas, minutos y segundos (Resultado)</h1>

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
    $h = floor($segundos / 3600);
    $m = floor($segundos % 3600 / 60);
    $s = $segundos % 60;
    print "  <p>$segundos segundos son $h horas, $m minutos y $s segundos</p>\n";
    print "\n";
}
?>
  <p><a href="OA-04-01.php">Volver al formulario.</a></p>


</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

