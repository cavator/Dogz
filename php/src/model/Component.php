<?php
namespace com\dogz\model;

class Component extends AbstractComponent{
    private const TAG_TYPE = '';
public function __construct( 
    private array $classes,
    private array $tag = [],
    private string $id,
    private string $name,
    private string $value = '',
    private array $extra_att = [],
    ){}
       /**
     * Getter/Setter @var $tag  
     */
    public function getTag():array{
        return $this->tag instanceof AbstractComponent?$this->tag:array_map(function(AbstractComponent $t){return $t;},$this->tag);
    }
    public function setTag(AbstractComponent|array $tag):void{
        $this->tag = $tag;
    }

    /**
     * Getter/Setter @var $classes  
     */
    public function getClasses():array{
        return $this->classes;
    }
    public function setClasses(array $classes):void{
        $this->classes = $classes;
    }

    /**
     * Getter/Setter @var $id  
     */
    public function getId():string{
        return $this->id;
    }
    public function setId(string $id):void{
        $this->id = $id;
    }

    /**
     * Getter/Setter @var $name  
     */
    public function getName():string{
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name = $name;
    }

    /**
     * Getter/Setter @var $value  
     */
    public function getValue():string|int|float{
        return $this->value;
    }
    public function setValue(string $value):void{
        $this->value = $value;
    }
    
    /**
     * Getter/Setter @var $extra_att  
     */
    public function getExtraAtt():string|array{
        return $this->extra_att;
    }
    public function setExtraAtt(string|array $extra_att):void{
        $this->extra_att = $extra_att;
    }

    /**
     * Getter/ @var TAG_TYPE  
     */
    public function getTagType():string{
        return self::TAG_TYPE;
    }

}
