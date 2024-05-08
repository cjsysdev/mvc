<?php

class Controller
{
    public function url($controller)
    {
        require_once '../app/controllers/' . $controller . '.php';
        return new $controller();
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function base_url()
    {
        $baseUrl = explode(
            '/',
            filter_var(
                rtrim($_SERVER['SCRIPT_NAME'], '/'),
                FILTER_SANITIZE_URL
            )
        );

        unset($baseUrl[3]);

        return implode('/', $baseUrl);
    }

    public function to($url = '/', $statusCode = 302)
    {
        header('Location: ' . $this->base_url() . $url, true, $statusCode);
        exit();
    }
}
