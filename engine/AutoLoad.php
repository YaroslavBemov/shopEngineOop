<?php

namespace app\engine;

class AutoLoad {

    public function loadClass($className): void {
        var_dump($className);
        $fileName = str_replace(['\\', 'app'], [DS, ROOT_DIR], $className) . ".php";
//        var_dump($fileName);
        if (file_exists($fileName)) {
            include $fileName;
        }
    }
}