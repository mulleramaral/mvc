<?php

namespace topterm\Di;

use App\init;

class Container {
    
    public static function getClass($name){
        $str_class = "\\App\\Models\\" . ucfirst($name);
        $class = new $str_class(init::getDb());
        return $class;
    }
}
