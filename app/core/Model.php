<?php

class Model
{
    protected $servername = 'localhost';

    protected $user = 'root';

    protected $password = '';

    protected $database = 'native_db';

    protected $conn = '';

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->user, $this->password, $this->database);
    }
}
