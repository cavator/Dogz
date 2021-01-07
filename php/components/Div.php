<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Div extends AbstractComponent{
    protected const TAG_TYPE = 'div';
    public function __construct(
        $classes = ['p-1','col-12'],
        $tag = [],
        $id,
        $name,
        $value = '',
        $extra_att = [],
    ){
        $this->setClasses($classes);
        $this->setTag($tag);
        $this->setId($id);
        $this->setName($name);
        $this->setValue($value);
        $this->setExtraAtt($extra_att);

    }
}
