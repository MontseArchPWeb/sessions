<?php

require_once ('libs/Controller.php');
require_once ('app/Models/GeoModel.php');
require_once ('libs/IPv4.php');

class GeoController extends Controller{
    public function execute($params = array()){
        
        $ip=filter_input(INPUT_POST, 'ip');
        $netmask=filter_input(INPUT_POST, 'netmask');
        
        $validateIP = new Net_IPv4();
        $net = $validateIP->getNetLength($netmask);
        $subnet = $validateIP->getSubnet($ip, $netmask);
        $ipValid = $subnet.'/'.$net;
        
        $geo_model = new Geo();
        $geos = $geo_model->getGeoList($ipValid);
        
        require('app/Views/Geo_View.php');
    }
}

