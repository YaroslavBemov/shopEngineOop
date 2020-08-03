<?php

namespace app\engine;

use app\traits\Tsingletone;

class Db {
    use Tsingletone;

    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'shopphp',
        'charset' => 'utf8',
    ];
    private $connection = null;

    private function getConnection() {
        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDsnString(),
                $this->config['login'],
                $this->config['password']
            );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDsnString() {
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );
    }

    private function query(string $sql, array $params = []) {
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }

    private function execute(string $sql, array $params = []) {
        return $this->query($sql, $params);
    }

    public function lastInsertId() {
        //TODO верните последний id операции
    }

    public function queryObject($sql, $params, $class) {
        //TODO PDO должен вернуть объект класса $class
    }

    public function queryOne(string $sql, array $params = []) {
        return $this->query($sql, $params)->fetch();
    }

    public function queryAll(string $sql, array $params = []) {
        return $this->query($sql, $params)->fetchAll();
    }
}