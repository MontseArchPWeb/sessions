<?php
include_once "Model.php";

class Geo extends Model{
    public function getGeoList(){
        $this->connect();
        
        $geo = $this->query('select l.city_name, l.country_name, b.latitude, b.longitude, b.postal_code  from cities_blocks_ip4 b INNER JOIN cities_locations l ON l.geoname_id = b.geoname_id where b.network = :ip');
        return $geo;
    }
}

