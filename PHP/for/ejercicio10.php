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
  <title>for 10. Contar dados máximos.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>
<?php
$numero = rand(1,10);
$maximo = 0;
$cantidad = 0;

if ($numero == 1) {
    print "  <h2>$numero dado</h2>\n";
} else {
    print "  <h2>$numero dados</h2>\n";
}
print "\n";
print "  <p>\n";
for ($i = 0; $i < $numero; $i++) {
    $dado = rand(1, 6);
    print "    <img src=\"img/$dado.svg\" alt=\"$dado\" title=\"$dado\" width=\"140\" height=\"140\">\n";
    if ($dado > $maximo) {
        $maximo = $dado;
        $cantidad = 1;
    }
    elseif ($dado == $maximo) {
        $cantidad += 1;
    }
}
print "  </p>\n";
print "\n";
print "  <p>El valor más grande obtenido es <strong>$maximo</strong>. Este valor se ha obtenido ";
if ($cantidad == 1) {
    print "<strong>$cantidad</strong> vez.</p>\n";
} else {
    print "<strong>$cantidad</strong> veces.</p>\n";
}
?>
    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
