<?php 
Class Controller{
    public $url_base = 'http://localhost/BTMVC/';
    public function model($model){
        require_once "./models/".$model.".php"; 
        return new $model; 
    }
    public function view($view,$data=[]){
        require_once "./views/".$view.".php";
    }
}
?>