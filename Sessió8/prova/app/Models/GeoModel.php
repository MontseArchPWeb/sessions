<?php
include_once "libs/Model.php";

class Geo extends Model{
    
    public function getGeoList($ip){
        $this->connect();
       
        $geos = $this->consultaPorRed($ip);
        $this->closeConnection();
       
        return $geos;
    }
}

