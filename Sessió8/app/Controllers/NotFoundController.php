<?php
require_once ('../libs/Controller.php');

class NotFoundController extends Controller{
    public function execute($params = array()){
        require('app/Views/Error_View.php');
    }
}

