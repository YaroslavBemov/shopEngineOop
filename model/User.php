<?php

namespace app\model;

class User extends Model {
    public int $id;
    public string $login;
    public string $password;

    public function getTableName() {
        return 'users';
    }
}