<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Adria Martin Lopez</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="adria.css" rel="stylesheet" type="text/css" title="Color" />
    </head>

    <?php 
     
        $moneda = $_POST['primera_seleccion']; 
        $moneda2 = $_POST['segunda_seleccion']; 
        $euro_dolar = 1.36; 
        $euro_libra = 0.82; 
        $dolar_euro = 0.73; 
        $dolar_libra = 0.60;  
        $libra_euro = 1.21; 
        $libra_dolar = 1.65;  
         
        echo "Su moneda vale: " ; 

        switch ($moneda and $moneda2) { 
             
            case $moneda == "dolar" and $moneda2 == "euro1":      
                echo "<div>".$_POST['valor'] * $dolar_euro; 
            break; 
             
            case $moneda == "dolar" and $moneda2 == "libra1":      
                echo "<div>".$_POST['valor'] * $dolar_libra;      
            break; 
             
            case $moneda == "euro" and $moneda2 == "dolar1":      
                echo "<div>".$_POST['valor'] * $euro_dolar;      
            break; 
             
            case $moneda == "euro" and $moneda2 == "libra1":      
                echo "<div>".$_POST['valor'] * $euro_libra;      
            break; 
             
            case $moneda == "libra" and $moneda2 == "dolar1":      
                echo "<div>".$_POST['valor'] * $libra_dolar;      
            break; 
             
            case $moneda == "libra" and $moneda2 == "euro1":      
                echo "<div>".$_POST['valor'] * $libra_euro;      
            break;                
        } 
        
    ?>

<footer>
    <p>Adrià Miquel de Martin Lopez</p>
</footer>
