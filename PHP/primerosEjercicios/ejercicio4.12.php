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
  <h1> Imprimir los valores del vector asociativo siguiente usando la estructura de control foreach:</h1>

  <h2>$v[1]=90; <br>
	$v[30]=7;<br>
	$v['e']=99;<br>
	$v['hola']=4</h2>

  <p>Este ejercicio quedará resuelto:</p>

  <table>
    <tbody>

<?php
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
foreach ($v as $indice => $valor)
{
   echo "Indice: $indice, vale: $valor <br>";
}
?>
	
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
