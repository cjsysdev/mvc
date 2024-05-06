<?php

class User extends Controller{
    public function index(){
        $model = $this->model('User_model');

        $this->view('home/index', $model->get());
    }
}