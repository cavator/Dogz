<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Input extends AbstractComponent{
    protected const TAG_TYPE = 'input';
    private string $type;
    public function __construct(
        $classes = ['d-center'],
        $tag = [],
        $id,
        $name,
        $value = '',
        $extra_att = [],
        $type = 'text'
    ){
        $this->setClasses($classes);
        $this->setTag($tag);
        $this->setId($id);
        $this->setName($name);
        $this->setValue($value);
        $this->setExtraAtt($extra_att);
        $this->setType($type);

    }

    public function getType():string{
        return $this->type;
    }
    public function setType(string $type):void{
        $this->type = $type;
    }

}
