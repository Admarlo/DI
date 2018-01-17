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
  <h1>Concatenar dos cadenas con el operador punto e imprimir su resultado</h1>

  <p>Este ejercicio quedará resuelto y explicado de 3 formas distintas.</p>

  <table>
    <tbody>
<?php
print "<p>1ª Forma de resolución:</p>";
print "<p>Ejercicio resuelto utilizando el operador '.'</p>";
echo Crono . logía;
print "<p> Esta es la forma más sencilla de utilizar el operador '.'<p>\n";
print "<p><strong>'Cromo . logía'<strong><p>\n";

print"<p>2ª Forma de resolución:</p>";
print"<p>Ejercicio resuelto concatenando una cadena asignada a una variable, utilizando el operador '.='</p>";
$cadena="Crono"
$cadena.="logía"
print "<p>$cadena</p>\n";
print "<p><strong>'/$cadena .= logía'<strong><p>\n";

print"<p>3ª Forma de resolución:</p>";
print"<p>Ejercicio resuelto concatenando dos variables </p>";
$cadena2="logía";
$cadena3=$cadena1.$cadena2;
print"<p>$cadena3</p>\n";
print "<p><strong>'$cadena3=$cadena1.$cadena2'<strong><p>\n";
?>
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
