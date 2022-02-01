<?php

namespace Models;

class User extends Model
{
    protected $table = "users";
    protected $id = "id_user";

    public function findUser() : string
    {
        $email = $_POST['email'];
        $password = $_POST['pwd'];

        $hashed_pwd = $this->get("password", "email", $email);
        $name = "";

        if(password_verify($password, $hashed_pwd))
        {
            $name = $this->get("name", "email", $email);
        }

        return $name;
    }

    public function get($select, $where, $column)
    {
        $query = $this->pdo->prepare("SELECT `$select` FROM `users` WHERE `$where` = :column ");
        $query->execute(['column' => $column]);

        return $query->fetchColumn();
    }


}
