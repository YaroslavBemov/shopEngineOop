<?php
include realpath("../config/config.php");
include realpath("../engine/AutoLoad.php");

use app\engine\{AutoLoad, Db};
use app\model\{Product, User};

spl_autoload_register([new AutoLoad(), 'loadClass']);

$product = new Product(new Db());
echo $product->getOne(1);

$user = new User(new Db());
echo $user->getOne(2);
