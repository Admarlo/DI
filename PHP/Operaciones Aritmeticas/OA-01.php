<?php
/**
 * Operaciones aritméticas
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Operaciones Aritméticas 01
    Adrià Miquel de Martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Índice de masa corporal (Formulario)</h1>

  <form action="OA-02.php" method="get">
    <p>Escriba su peso en kilogramos y su altura en centímetros para calcular su índice de masa corporal.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Peso:</strong></td>
          <td><input type="number" name="peso" min="1" /> kg</td>
        </tr>
        <tr>
          <td><strong>Altura:</strong></td>
          <td><input type="number" name="altura" min="1" /> cm</td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Calcular" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

