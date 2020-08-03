<?php

namespace app\model;

use app\engine\Db;
use app\interfaces\IModel;

abstract class Model implements IModel {

    public function getOne(int $id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOne($sql, ['id' => $id]);
    }

    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public function insert() {
        foreach ($this as $key => $value) {
            //TODO исключить id при формировании строки запроса
            echo $key . " " . $value . "<br>";
        }
        //TODO собрать валидный запрос к БД по $key и $value и выполнить его
        $sql = "INSERT INTO `{$this->getTableName()}` () VALUES ()";
        var_dump($this->getTableName());
        //TODO в поле id сохранить новый id (lastInsertId) $this->id = lastInsertId
    }

    abstract public function getTableName();
}