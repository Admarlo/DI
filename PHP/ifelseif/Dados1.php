<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejemplo de ejercicio sin formulario 1.
    Escribe tu nombre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Dados 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" title=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" title=\"$dado2\" width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";

if ($dado1 == $dado2) {
    print "  <p>Ha sacado una pareja de $dado1.</p>\n";
} else {
    print "  <p>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".</p>\n";
}
?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Martin Lopez</p>
  </footer>
</body>
</html>