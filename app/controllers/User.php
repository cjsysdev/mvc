<?php

class User extends Controller
{

    protected $user_model = '';

    public function __construct()
    {
        session_start();
        $this->user_model = $this->model('User_model');
    }

    public function index()
    {
        session_destroy();
        $this->view('header');
        $this->view('home');
        $this->view('footer');
    }


    public function dashboard()
    {
        if (!$_SESSION['online']) {
            $this->to();
        }

        $this->view('header');
        $this->view('dashboard');
        $this->view('footer');
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->user_model->get($_POST['username']);

            if ($user !== null) {

                if ($user['password'] == $_POST['password']) {

                    $_SESSION['online'] = true;
                    $_SESSION['userid'] = $user['id'];

                    echo 'success';
                    exit();
                } else {
                    echo 'invalid';
                }
            } else {
                echo "does not exist";
            }
        } else {
            echo http_response_code(405);
            echo "error";
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->user_model->insert($_POST);

            if ($user === true) {
                echo "success";
            } else {
                echo $user;
            }
        } else {
            echo http_response_code(405);
            echo "error";
        }
    }

    public function logout()
    {
        $this->to();
    }
}
