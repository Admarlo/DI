<head>
  <meta charset="utf-8" />
  <title>Adrià martin Lopez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
	<?php
		$nfilas = 4;
		$nfilas2 = 4;
		echo "<table>";
        for ($i=0; $i<$nfilas; $i++){
            echo "<tr>";
            for ($j=0; $j<$nfilas2; $j++){
            	$imgnum = rand(1, 6);
            	echo "<td><img src='./img/".$imgnum.".jpg'></td>";
        	}
            echo "</tr>";
        }
        echo "</table>";
	?>

  <form enctype="multipart/form-data" action="anyadirfotos.php" method="POST">
      Enviar este fichero: <input name="fichero_usuario" type="file" />
      <input type="submit" value="Enviar fichero" />
  </form>

  <?php

    $dir_subida = '/home/adrlop/lampstack-7.0.23-0/apache2/htdocs/Conversor/img';
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

    echo '<pre>';
      print_r($_FILES);
    print "</pre>";

  ?>

</body>

<footer>
    <p>Adrià Miquel de Martin Lopez</p>
</footer>
