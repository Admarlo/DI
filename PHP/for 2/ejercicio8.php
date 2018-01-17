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
  <title>for 8. Arco iris semicircular.
    Adrià</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <h1>Bucle for 2</h1>

  <p>Actualice la página para mostrar el resultado.</p>

  <table>
    <tbody>


<?php
$numero = rand(3,10);
$paso = 360 / $numero;

print "  <h2>$numero franjas</h2>\n";
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"" . (60 * $numero + 20) . "px\" height=\"" . (30 * $numero + 20). "px\" "
    . " viewbox=\"" . (- 30 * $numero - 10) . " " . (- 30 * $numero - 10) . " " . (60 * $numero + 20). " " . (30 * $numero + 20)
    . "\" style=\"border: black 1px solid; background-color: white;\">\n";

for ($i = 0; $i < $numero; $i++) {
    $valor =  -30 * $i + 30 * $numero;
    print "      <path d=\"M -$valor,0 L $valor,0 A $valor $valor 0 0 0 -$valor,0 z\" fill=\"hsl(" . round($i * $paso) . ", 75%, 50%)\" />\n";
}

print "    </svg>\n";
print "  </p>\n";
?>


    </tbody>
  </table>

  <footer>
    <p>Adria</p>
  </footer>
</body>
</html>
