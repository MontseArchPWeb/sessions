<?php
class Model{
    private $con;
    private $hostname = 'localhost';
    private $database = 'GeoIP';
    private $username = 'root';
    private $password = '';
    
    
    protected function connect(){
        try {
            $this->con = new PDO('mysql:host='.$this->hostname.';dbname='.$this->database, $this->username, $this->password);
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "";
        }
    }
    
    public function consultaPorRed($ip){
        $resultado = null;
        $resultado = $this->con->prepare('select l.city_name, l.country_name, b.latitude, b.longitude, b.postal_code  from cities_blocks_ip4 b INNER JOIN cities_locations l ON l.geoname_id = b.geoname_id where b.network = :ip');
        $resultado->execute(array(':ip' => $ip ));
        return $resultado;
    }
    
    public function closeConnection(){
         $this->con =null; 
    }
}

