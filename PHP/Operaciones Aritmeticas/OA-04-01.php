<?php
/**
 * Operaciones Aritméticas
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Operaciones Aritméticas 02
    Adrià Miquel de Martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Convertidor de segundos a horas, minutos y segundos (Formulario)</h1>

  <form action="OA-04-02.php" method="get">
    <p>Escriba un número de segundos para convertir a horas, minutos y segundos.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Segundos:</strong></td>
          <td><input type="number" name="segundos" min="0" /></td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Convertir" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

