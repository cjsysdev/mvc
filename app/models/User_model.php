<?php

class User_model extends Model
{
    public function get()
    {
        $sql = "SELECT * FROM users";
        $res = $this->conn->query($sql);

        return $res->fetch_assoc();
    }
}
