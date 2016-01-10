<?php
require_once ('libs/Controller.php');

class HomeController extends Controller{
    public function execute($params = array()){
        require('app/Views/home_view.php');
    }
}

