<?php
//require_once ('../libs/Controller.php');
require_once ('Models/GeoModel.php');

//class GeoController extends Controller{
class GeoController{
    //public function execute($params = array()){
    public function execute(){
        $geo_model = new geo();
        $geo = $geo_model->getGeoList();
        
        require('Views/Geo_View.php');
        
        /*
        try{
            $id_geo = $this->getGeoId();
            $params = array("geo" => $id_geo);
            
            $geo_model = new Geo();
            
            if(
                filter_has_var(INPUT_GET, "name")    )
            
        } catch (Exception $ex) {

        }
         
         */
    }
}
