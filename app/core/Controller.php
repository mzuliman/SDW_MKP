<?php

class Controller {

    public function view($view, $data = []){
        
        require_once '../app/View/' . $view . ".php";
    }

    public function model($model){
        require_once '../app/Controller & Model/Model/' . $model . '.php';
        return new $model;
    }
}

?>