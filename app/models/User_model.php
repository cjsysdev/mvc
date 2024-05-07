<?php

class User_model extends Model
{
    public function get($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $res = $this->db->query($sql);

        return $res->fetch_assoc();
    }

    public function insert($data = [])
    {
        $name = $data['name'];
        $username = $data['username'];
        $password = $data['password'];

        $sql = "INSERT INTO users (name, username, password) 
        VALUES ('$name', '$username', '$password')";

        $query = $this->db->query($sql);

        return ($query) ? true : $this->db->errno;
    }
}
