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

$num   = recoger("numero");
$numBueno = false;
$nmin   = 1;
$nmax   = 20;

if ($num == "") {

    print "<p>Debe escribir el número de semanas.</p>\n";

} elseif (!is_numeric($num)) {

    print "<p>No ha escrito ningun número.</p>\n";

} elseif (!ctype_digit($num)) {

    print "<p>Debe de escribir el numero de semanas formato entero positivo.</p>\n";

} elseif ($num < $nmin || $num > $nmax) {

    print "<p>El número de semanas debe estar entre $nmin y $nmax.</p>\n";

} else {
	$numBueno = true;
}

if ($numBueno) {

    print "<form action=\"contador_dias_3.php\" method=\"get\">\n";
    print "  <p>Marque las casillas de verificación que quiera y le dire cuántas ha marcado.</p>\n\n";
    print "  <table class=\"conborde\">\n";
    print "    <tbody style=\"text-align: center\" >\n";
    print "      <tr>\n";
    print "        <th>Semana</th>\n";
    print "        <th>Lunes</th>";
    print "        <th>Martes</th>\n";
    print "        <th>Miércoles</th>\n";
    print "        <th>Jueves</th>";
    print "        <th>Viernes</th>\n";
    print "        <th>Sábado</th>\n";
    print "        <th>Domingo</th>";
    print "      </tr>\n";

    for ($i = 1; $i <= $num; $i++) {
        print "      <tr>\n";
        print "        <th>$i</th>\n";
        for ($j = 1; $j <= 7; $j++) {
            print "        <td><input type=\"checkbox\" name=\"c[$i][$j]\"/></td>\n";
        }
        print "      </tr>\n";
    }
    print "    </tbody>\n";
    print "  </table>\n";

    print "  <p><input type=\"submit\" value=\"Convertir\" />\n"; 
    print "    <input type=\"reset\" value=\"Borrar\" name=\"Reset\" /></p>\n\n";

    print "  <p><input type=\"hidden\" name=\"numero\" value=\"$num\" /></p>\n";
    print "</form>\n";
}

?>

<p><a href="contador_dias_1.html">Volver al formulario.</a></p>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
