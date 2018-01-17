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
  <h1> Vectores. Almacenar en un vector los 10 primeros número pares. Imprimirlos
cada uno en una línea</h1>

  <h2>recuerde que el salto de línea en HTML es BR</h2>

  <p>Este ejercicio quedará resuelto:</p>

  <table>
    <tbody>

<?php

 for ($i=0;$i<10;$i++)
   $v[$i]=$i*2;
 for ($i=0;$i<10;$i++)
   echo "$v[$i]<br>";
?>
	
    </tbody>
  </table>

  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
