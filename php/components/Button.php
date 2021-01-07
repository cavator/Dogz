<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Button extends AbstractComponent{
    protected const TAG_TYPE = 'button';
    public function __construct(
        $classes = ['d-center'],
        $tag = [],
        $id,
        $name,
        $value = 'Submit',
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