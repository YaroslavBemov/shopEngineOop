<?php

namespace app\model;

class User extends Model {
    public int $id;
    public string $login;
    public string $password;

    //TODO конструктор

    public function getTableName() {
        return 'users';
    }
}