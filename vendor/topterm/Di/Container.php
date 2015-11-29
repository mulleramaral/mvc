<?php

namespace topterm\Di;

class Container {

    public static function getClass($name) {
        $str_class = "\\App\\Models\\" . ucfirst($name);
        $class = new $str_class(self::getDb());
        return $class;
    }

    public static function getDb() {
        $db = new \PDO("mysql:host=localhost;dbname=topterm", "root", "");
        return $db;
    }

}
