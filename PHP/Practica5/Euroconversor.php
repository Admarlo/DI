<?php
/**
 * Práctica 5
 *
 * @author    Adrià Martin Lopez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Euroconversor
    Adrià Miquel de Martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Conversor euros a dolares</h1>

<?php
import_request_variables("pg","f_");
echo "Son ";
echo $f_euros*1,24375 ;
echo " dolares";
?>
  
</body>

  <footer>
     <p>Adrià Miquel de Martin Lopez</p>
  </footer>

</html>

