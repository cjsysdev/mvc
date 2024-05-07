<?php

class Home extends Controller
{
    public function index()
    {
        $this->url('User')->index();
    }
}
