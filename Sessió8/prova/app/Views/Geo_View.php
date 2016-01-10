<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Resultado de la búsqueda</title>
    </head>
    <body>
        <h2>Resultado de la búsqueda</h2>
<?php
    foreach($geos as $geo){
        echo "Network: ".$ipValid."<br />Ciudad: ".$geo[0]."<br />País: ".$geo[1]."<br />Latitude: ".$geo[2]."<br />Longitude: ".$geo[3]."<br />Postal Code: ".$geo[4];
    }
?>
        <form action="/" method="post" class="col-lg-5">
            <input type="submit" value="Volver" class="volver">
        </form>
    </body>
</html>

