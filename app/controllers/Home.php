<?php

class Home extends Controller
{
    public function index()
    {
        echo " hello";
        $this->url('User')->index();
    }
}
