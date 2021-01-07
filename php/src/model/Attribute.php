<?php

namespace com\dogz\model;
use com\dogz\model\AbstractAttribute;

class Attribute extends AbstractAttribute{

    public function __construct($key, $value){
        $this->setKey($key);
        $this->setValue($value);
    }
}