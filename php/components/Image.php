<?php

namespace com\dogz\component;

use com\dogz\model\AbstractComponent;

class Image extends AbstractComponent{
    protected const TAG_TYPE = 'image';
    public function __construct(
        $classes = ['d-center'],
        $tag = [],
        $id,
        $name,
        $value = '',
        $extra_att = [],
        private string $source = ''
    ){
        $this->setClasses($classes);
        $this->setTag($tag);
        $this->setId($id);
        $this->setName($name);
        $this->setValue($value);
        $this->setExtraAtt($extra_att);
        $this->setSource($source);
    }

    public function getSource():string{
        return $this->source;
    }
    public function setSource(string $source):void{
        $this->source = $source;
    }

}
