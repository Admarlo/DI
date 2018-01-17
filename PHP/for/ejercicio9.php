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
  <title>for 9. Contar pares e impares.
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
$pares = 0;
$impares = 0;

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
    if ($dado % 2) {
        $impares += 1;
    } else {
        $pares += 1;
    }
}
print "  </p>\n";
print "\n";
print "  <p>Han salido ";
if ($pares == 1) {
    print "1 número par y ";
} else {
    print "$pares números pares y ";
}
if ($impares == 1) {
    print "1 número impar.</p>\n";
} else {
    print "$impares números impares.</p>\n";
}
?>
    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
