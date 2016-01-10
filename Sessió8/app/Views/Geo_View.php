<!doctype html>
<html lang="es">
    <<head>
        <meta charset="utf-8">
        <title>Listado de IP</title>
    </head>
    <body>
        <h1>Listado</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>ID</th>
            </tr>
<?php
    foreach ($geos as $geo){
?>
            <tr>
                <td><?php echo $geo['name'] ?></td>
                <td><?php echo $geo['id'] ?></td>
            </tr>
<?php
    }
?>
        </table>
    </body>
</html>

