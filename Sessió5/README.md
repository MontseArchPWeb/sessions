ENTREGABLE: GALERA DE FOTOS POO EN PHP
Basndote en el entregable de la sesin 4, debes crear un programa orientado a objetos, que muestre un listado de todas las imgenes del directorio fotos.

Debe contener las siguientes clases:

class File: esta clase se debe encargar de leer el directorio y obtener la lista de ficheros. Tambin debe contener un constructor donde se definir la ruta de las fotos, cuando se instancie.

class Image:  esta clase hereda de File, ya que la imagen es un tipo de fichero. Tendr mtodos especficos para comprobar y validar las extensiones de las imgenes, crear las miniaturas y obtener las imgenes validadas.

class System: esta clase se encargar de interactuar con el sistema, con un mtodo para ejecutar el comando convert.

 

Requisitos:

1. Para ejecutar el programa, solo se podr instanciar la clase Image y ejecutar un solo mtodo pblico.

2. Solo puede existir un mtodo pblico en la clase Image y otro en System.

3. Todos los mtodos de File debe ser mtodos protegidos excepto el constructor.

4. La clase File debe tener los siguientes mtodos: __construct($path), createDir(), checkIfFileExists(), getFileList().

5. La clase Image debe tener los siguiente mtodos: createThumb(), validatePhoto(), getImages().

6. La clase System debe tener el mtodo execCommand().

7. Cada clase debe encargarse de su mbito, los ficheros los gestiona File (mkdir, is_dir, is_file, opendir, readdir, closedir), las imgenes Image y el las ejecuciones del sistema la clase System.

8. La clase Image debe usar una constante para el nombre del directorio de las miniaturas, para usarse junto con el $path definido.

Para ejecutar el programa debes usar las siguientes lneas, pudiendo cambiar la ruta de las fotos:

$path = "fotos";

$image = new Image($path);

$image_list = $image->getImages(); 

$image_list es un array, que puedes recorrer para mostrar las fotos en el HTML.

El resultado debe ser el mismo que el entregable 4 y se entregar en un nico fichero php.
