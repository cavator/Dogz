<?php

namespace com\dogz\controller;

use com\dogz\util\Util;

class Controller{
    
    public static function bodyGen(array $tags): void{
        
        echo implode(array_map("com\dogz\util\Util::tagGen",$tags));
    }




}
    
