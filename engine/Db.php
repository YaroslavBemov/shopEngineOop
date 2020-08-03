<?php

namespace app\engine;

class Db {
    public function queryOne(string $sql, array $params = []) {
        return $sql;
    }

    public function queryAll(string $sql, array $params = []) {
        return $sql;
    }
}