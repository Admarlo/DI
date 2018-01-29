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
  <h1>Reloj (Resultado)</h1>
<center>
<?php

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$horas   = recoge("horas");
$minutos = recoge("minutos");

$horasOk   = false;
$minutosOk = false;

if ($horas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de horas.</p>\n";
    print "\n";
} elseif (!is_numeric($horas)) {
    print "  <p class=\"aviso\">No ha escrito el número de horas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($horas)) {
    print "  <p class=\"aviso\">No ha escrito el número de horas como número entero.</p>\n";
    print "\n";
} elseif ($horas < 0 || $horas > 11) {
    print "  <p class=\"aviso\">El número de horas no está entre 0 y 11.</p>\n";
    print "\n";
} else {
    $horasOk = true;
}

if ($minutos == "") {
    print "  <p class=\"aviso\">No ha escrito el número de minutos.</p>\n";
    print "\n";
} elseif (!is_numeric($minutos)) {
    print "  <p class=\"aviso\">No ha escrito el número de minutos como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($minutos)) {
    print "  <p class=\"aviso\">No ha escrito el número de minutos como número entero.</p>\n";
    print "\n";
} elseif ($minutos < 0 || $minutos > 59) {
    print "  <p class=\"aviso\">El número de minutos no está entre 0 y 59.</p>\n";
    print "\n";
} else {
    $minutosOk = true;
}

$ancho = 200;
$largoHoras = 70;
$largoMinutos = 90;

$xC = ($ancho + 10) / 2;
$yC = ($ancho + 10) / 2;

$tiempo = $horas + $minutos / 60;

$xH = $xC + round($largoHoras * cos(-$tiempo * 2 * pi() / 12 + pi() / 2));
$yH = $yC - round($largoHoras * sin(-$tiempo * 2 * pi() / 12 + pi() / 2));

$xM = $xC + round($largoMinutos * cos(-$minutos * 2 * pi() / 60 + pi() / 2));
$yM = $yC - round($largoMinutos * sin(-$minutos * 2 * pi() / 60 + pi() / 2));

if ($horasOk && $minutosOk) {
    print "  <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n"
        . "    width=\"" . ($ancho + 10) . "px\" height=\"" . ($ancho + 10) . "px\" viewBox=\"0 0 ". ($ancho + 10) . " " . ($ancho + 10) . "\" >\n";
    print "    <circle fill=\"white\" stroke=\"black\" stroke-width=\"10\" "
    . "cx=\"" . (($ancho + 10) / 2) . "\" cy=\"" . (($ancho + 10) / 2) . "\" r=\"" . ($ancho / 2) . "\" />\n";
    print "    <line x1=\"$xC\" y1=\"$yC\" x2=\"$xH\" y2=\"$yH\" stroke-width=\"4\" stroke=\"black\" />\n";
    print "    <line x1=\"$xC\" y1=\"$yC\" x2=\"$xM\" y2=\"$yM\" stroke-width=\"2\" stroke=\"black\" />\n";
    print "  </svg>\n";
    print "\n";
}

?>
</center>
<center>
  <p><a href="OA-05-01.php">Volver al formulario.</a></p>
</center>
</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

