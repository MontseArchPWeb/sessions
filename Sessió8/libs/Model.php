<?php
class Model{
    private $con;
    
    protected function connect(){
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=GeoIP, root,');
            print "Conexión exitosa!";
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "";
        }
        
    }
}

