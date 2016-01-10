ENTREGABLE: CIUDADES Y PASES POR GEOIP
Utilizando la base de datos creada en la sesin 6, tienes que desarrollar un programa en php para consultar ciudades y pases a partir de una IP.

 

El programa debe contener las siguientes clases:

Class Database: una clase para gestionar la conexin a MySQL y la ejecucin de las sentencias SQL.
 

Class GeoIP: una clase para consultar la informacin de ciudad y pas a partir de una IP.
 

Requisitos:

Para ejecutar el programa, solo se podr instanciar la clase GeoIP y ejecutar un solo mtodo pblico.
Se debe poder ejecutar el programa desde lnea de comando, pasndole como primer argumento la IP.
Debe aparecer la informacin de nombre de ciudad, pas, latitud, longitud y cdigo postal como mnimo.
