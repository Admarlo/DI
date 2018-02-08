<?php
/**
 * Examen: Contador de dias
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Contador de días</title>
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Contador de días</h1>

<?php
function recoger($var)
{
    $temporal = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $temporal;
}

function recogerMatriz2($var)
{
    $matrizTemporal = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $ind => $fila) {
            $indClean = trim(htmlspecialchars($ind, ENT_QUOTES, "UTF-8"));
            if (is_array($fila)) {
                foreach ($fila as $ind2 => $valor) {
                    $ind2Clean = trim(htmlspecialchars($ind2, ENT_QUOTES, "UTF-8"));
                    $valorClean   = trim(htmlspecialchars($valor,   ENT_QUOTES, "UTF-8"));
                    $matrizTemporal[$indClean][$ind2Clean] = $valorClean;
                }
            }
        }
    }
    return $matrizTemporal;
}

$num= recoger("numero");
$casilla= recogerMatriz2("c");
$numBueno= $casillaOk = false;

$casillaMarcada = count($casilla, COUNT_RECURSIVE) - count($casilla);
$nmin= 1;
$nmax= 20;
$valorCasilla= "on";

if ($num=="") {

    print "<p>No se ha podido recibir el número de semanas.</p>\n";

} elseif (!is_numeric($num)) {

    print "<p>No se ha recibido el número de semanas como número.</p>\n";

} elseif (!ctype_digit($num)) {

    print "<p>No se ha recibido el número de semanas como número entero positivo.</p>\n";

} elseif ($num < $nmin || $num > $nmax) {

    print "<p>El número de semanas debe estar entre $nmin y $nmax.</p>\n";

} else {

    $numBueno = true;
}

if ($casillaMarcada == 0) {

    print "<p>No ha marcado ninguna casilla.</p>\n\n";

} elseif ($casillaMarcada > 7 * $num) {

    print "<p>La matriz recibida es demasiado grande.</p>\n\n";

} else {

    $casillaOk = true;
    foreach ($casilla as $ind => $valor) {
        if (ctype_digit((string)$ind) && $ind <= $num && is_array($valor)) {
            foreach ($valor as $ind2 => $valor2) {
                if (!ctype_digit((string)$ind2) || $ind2 > 7 || $valor2 != $valorCasilla) {
                    $casillaOk = false;
                }
            }
        } else {
            $casillaOk = false;
        }
    }
    if (!$casillaOk) {
        print "<p>La matriz recibida no es correcta.</p>\n\n";
    }
}

if ($numBueno && $casillaOk) {
    print "<p>En total ha marcado $casillaMarcada días:</p>\n\n";
    print "<ul>\n";
    for ($i = 1; $i <= $num; $i++) {
        if (!isset($casilla[$i])) {
            print "  <li>En la semana $i no ha marcado ninguna día.</li>\n";
        } else {
            print "  <li>En la semana $i ha marcado <strong>"
                . count($casilla[$i]) . "</strong> día";
            if (count($casilla[$i])>1) {
                print "s";
            }
            print "</li>\n";
        }
    }
    print "</ul>\n\n";
    print "<p><a href=\"contador_dias_2.php?numero=$num\">Volver al calendario</a></p>\n";
}

?>

<p><a href="contador_dias_1.html">Volver al formulario inicial.</a></p>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
