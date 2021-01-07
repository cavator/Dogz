<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Label extends AbstractComponent{
    protected const TAG_TYPE = 'label';
    public function __construct(
        $classes = ['d-center'],
        $tag = [],
        $id,
        $name,
        $value = '',
        $extra_att = []
    ){
        $this->setClasses($classes);
        $this->setTag($tag);
        $this->setId($id);
        $this->setName($name);
        $this->setValue($value);
        $this->setExtraAtt($extra_att);

    }

}
