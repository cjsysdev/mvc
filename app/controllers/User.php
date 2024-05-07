<?php

class User extends Controller
{

    protected $user_model = '';

    public function __construct()
    {
        $this->user_model = $this->model('User_model');
    }

    public function index()
    {
        $this->view('home/home');
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->user_model->get($_POST['username']);

            if ($user !== null) {

                if ($user['password'] == $_POST['password']) {
                    echo 'success';
                } else {
                    echo 'invalid credentials';
                }
            } else {
                echo "does not exist";
            }
        } else {
            echo http_response_code(405);
            echo "Error";
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->user_model->insert($_POST);

            if ($user === true) {
                echo "Registered Successfuly";
            } else {
                echo $user;
            }
        } else {
            echo http_response_code(405);
            echo "Error";
        }
    }
}
