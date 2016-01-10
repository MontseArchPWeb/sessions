<!DOCTYPE html>
<html>
    <body>
<?php

class Database{
    private $con;
    public function connect(){
        require_once 'mysql-login.php';
        try {
            $this->con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
            print "Conexión exitosa!";
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "";
            die();
        }     
    }

    public function consulta($ip){
        $resultado = null;
        $resultado = $this->con->prepare('select l.city_name, l.country_name, b.latitude, b.longitude, b.postal_code  from cities_blocks_ip4 b INNER JOIN cities_locations l ON l.geoname_id = b.geoname_id where b.network = :ip');
        $resultado->execute(array(':ip' => $ip ));
        return $resultado;
    }
    
    public function closeConnection(){
         $this->con =null; 
    }
}

class GeoIP{
    private $ip;
    public function __construct($dir){
        $this->ip = $dir;
    }
    
    public function consult(){
        $data = new Database();
        $data->connect();
        $resultado= $data->consulta($this->ip);
        
        while($datos = $resultado->fetch()){
           print "\n" . 'City Name:' . $datos[0] . ' Country Name:' . $datos[1] . ' Latitude:' . $datos[2] . ' Longitude:' . $datos[3] . ' Postal Code:' . $datos[4] . "\n";
        }
        
    }
}

$geoip = new GeoIP($argv[1]);
$geoip->consult();

?>
</body>
</html>