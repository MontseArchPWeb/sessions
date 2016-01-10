ENTREGABLE: DESARROLLA UNA APLICACIN USANDO EL PATRN MVC
Usando como base el entregable de la sesin 7 (entregable: Ciudades y Pases por GeoIP), utiliza MVC para separar la lgica de negocio de la lgica de la aplicacin y de la vista.

Debes utilizar la siguiente estructura de directorios:

- index.php

- app/

-- Models/

-- Controllers/

-- Views/

- libs/

Puedes utilizar libs para añadir las clases como Database que debe ser agnstico a la lgica de negocio de la aplicacin.

Requisitos:

1. Para ejecutar el programa, se debe utilizar el dispatcher index.php.

2. La aplicacin deber tener un formulario para poder introducir la IP.

3. Debes utilizar las funciones Filter de php para obtener el dato del formulario.

3. La aplicacin debe calcular el nmero de red a partir de la IP introducida para poder consultar la tabla city_blocks_ip4.

4. Debe aparecer como mnimo la informacin de nombre de ciudad, pas, latitud, longitud y cdigo postal.

Consejos:

Donde hay ms datos de IP es en Estados Unidos, para probar la aplicacin utiliza IPs  americanas.
Puedes utilizar libreras externas para calcular el rango de ip a partir de la IP y mascara de red  (http://archive.ubuntu.com/ubuntu/pool/universe/p/php-net-ipv4/php-net-ipv4_1.3.4.orig.tar.gz)
