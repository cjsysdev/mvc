<?php

class User extends Model
{
    public $name;

    public function get()
    {
        $sql = "SELECT * FROM users";
        $res = $this->conn->query($sql);

        return $res->fetch_all();
    }
}
