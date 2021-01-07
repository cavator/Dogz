<?php
namespace com\dogz\model;

abstract class AbstractAttribute{
    private string $key;
    private string $value;
    /**
     * Getter/Setter @var $key  
     */
    public function getKey():string{
        return $this->key;
    }
    public function setKey(string $key):void{
        $this->key = $key;
    }

    /**
     * Getter/Setter @var $value  
     */
    public function getValue():string{
        return $this->value;
    }
    public function setValue(string $value):void{
        $this->value = $value;
    }

}