<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario de IP</title>
    </head>
    <body>
        <form action="<?php echo $helper->url("usuarios", "crear"); ?>" method="post" class="col-lg-5">
            <h3>Buscar registro</h3>
            <hr/>
            IP : <input type="text" name="ip" class="form-control"/>
            Netmask: <input type="text" name="netmask" class="form-control"/>
            <input type="submit" value="value" class="btn btn-success">
        </form>
        
        
    </body>
</html>

