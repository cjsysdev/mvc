<?php

class Model
{
    protected $servername = 'localhost';

    protected $user = 'root';

    protected $password = '';

    protected $database = 'native_db';

    protected $db = '';

    public function __construct()
    {
        $this->db = new mysqli($this->servername, $this->user, $this->password, $this->database);
    }
}
