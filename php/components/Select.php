<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Select extends AbstractComponent{
    protected const TAG_TYPE = 'select';
    public function __construct(
        $classes = ['m-auto','d-center'],
        $tag = [],
        $id,
        $name,
        $value = '',
        $extra_att = [],
        private int $size = 5
    ){
        $this->setClasses($classes);
        $this->setTag($tag);
        $this->setId($id);
        $this->setName($name);
        $this->setValue($value);
        $this->setExtraAtt($extra_att);
        $this->setSize($size);

    }

    public function getSize():string{
        return $this->size;
    }
    public function setSize(string $size):void{
        $this->size = $size;
    }
}
