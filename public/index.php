<?php
include realpath("../config/config.php");
include realpath("../engine/AutoLoad.php");

use app\engine\{AutoLoad, Db};
use app\model\{Product, User};

spl_autoload_register([new AutoLoad(), 'loadClass']);

$product = new Product();
$product->name = "Tea";
$product->description = "LoremLoremLorem";
$product->price = 450;
$product->insert();
var_dump($product);

//$user = new User();
//var_dump($user->getOne(2));
