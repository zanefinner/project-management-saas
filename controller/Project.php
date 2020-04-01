<?php namespace Controller;
class Project{
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function create($inputs){
        $this->model->create($inputs);
        header("Location: app");
    }
    public function open($id){
        //
    }
}