<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');

        $name = $user->get()['name'];

        $this->view('home/index', ['name' => $name]);
    }
}
