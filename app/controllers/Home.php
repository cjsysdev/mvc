<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User_model');

        $name = $user->get()['name'];

        $this->view('home/home', ['name' => $name]);
    }
}
