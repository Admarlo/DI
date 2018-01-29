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
  <h1>Índice de masa corporal (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$peso   = recoge("peso");
$altura = recoge("altura");

$pesoOk   = false;
$alturaOk = false;

if ($peso == "") {
    print "  <p class=\"aviso\">No ha escrito su peso.</p>\n";
    print "\n";
} elseif (!is_numeric($peso)) {
    print "  <p class=\"aviso\">No ha escrito su peso como número.</p>\n";
    print "\n";
} elseif ($peso <= 0) {
    print "  <p class=\"aviso\">El peso no puede ser negativo o cero.</p>\n";
    print "\n";
} else {
    $pesoOk = true;
}

if ($altura == "") {
    print "  <p class=\"aviso\">No ha escrito su altura.</p>\n";
    print "\n";
} elseif (!ctype_digit($altura)) {
    print "  <p class=\"aviso\">No ha escrito su altura como número entero positivo.</p>\n";
    print "\n";
} elseif ($altura == 0) {
    print "  <p class=\"aviso\">La altura no puede ser cero.</p>\n";
    print "\n";
} else {
    $alturaOk = true;
}

if ($pesoOk && $alturaOk) {
    $imc = round($peso / pow($altura / 100, 2));
    print "  <p>Con un peso de <strong>$peso kg</strong> y una altura de <strong>"
        . "$altura cm</strong>, su índice de masa corporal es <strong>$imc</strong>.</p>\n";
    print "\n";
    print "  <p>Un imc muy alto indica obesidad. Los valores \"normales\" de imc "
        . "están entre 20 y 25, pero esos límites dependen de la edad, del "
        . "sexo, de la constitución física, etc.</p>\n";
    print "\n";
}
?>
  <p><a href="OA-01.php">Volver al formulario.</a></p>

</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

