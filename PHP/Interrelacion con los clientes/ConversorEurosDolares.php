<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Adrià Martin Lopez</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="adria.css" rel="stylesheet" type="text/css" title="Color" />

    </head>

    <body> 
        <form action="salida.php" method="POST">   
              
            <label> Deme el valor: </label><br />
             
            <input type="number" name="valor"/> <br />  
                    
                <label> Selecciona tu moneda:           
                <select name="primera_seleccion">            
                     
                    <option value="dolar">Dolar</option> 
                    <option value="euro">Euro</option> 
                    <option value="libra">Libra</option> 
                     
                </select> 
                </label> <br /> 
                 
                <label> Seleccione la moneda que quieres convertir: 
             
            <select name="segunda_seleccion">              
                     
                    <option value="dolar1">Dolar</option> 
                    <option value="euro1">Euro</option> 
                    <option value="libra1">Libra</option> 
                     
                </select> 
                </label> <br />
                 
        <p><input type="submit" value="Calcular"></p>
         
        </form> 
    </body> 
<footer>
    <p>Adrià Miquel de Martin Lopez</p>
</footer>
</html>
