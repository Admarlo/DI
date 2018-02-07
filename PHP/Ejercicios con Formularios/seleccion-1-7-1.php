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
  <h1>Reparto de tríos (Formulario)</h1>

  <form action="seleccion-1-7-2.php" method="get">
    <p>Escriba un número de jugadores (3 &lt; número &le; 10) y repartiré tres
    cartas a cada jugador.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de jugadores:</strong></td>
          <td><input type="number" name="jugadores" min="3" max="10" value="6" /> </td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Mostrar" />
      <input type="reset" value="Borrar" />
    </p>
  </form>
   
  <footer>
    <p>Adrià Miquel de Martin Lopez</p>
  </footer>
</body>
</html>
