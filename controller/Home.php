<?php namespace Controller;
class Home{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }
    public function index(){
        $title='Welcome';
        require 'view/welcome.php';
    }
}