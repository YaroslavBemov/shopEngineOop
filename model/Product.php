<?php

namespace app\model;

use app\engine\Db;

class Product extends Model {
    public int $id;
    public string $name;
    public string $description;
    public float $price;

    //TODO конструктор

    public function getTableName() {
        return 'products';
    }
}