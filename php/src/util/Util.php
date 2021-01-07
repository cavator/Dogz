<?php
namespace com\dogz\util;

use com\dogz\model\Attribute;
use com\dogz\component\Option;
use com\dogz\model\AbstractAttribute;
use com\dogz\model\AbstractComponent;

class Util{

   
    public static function tagGen(AbstractComponent $tag):string{
        $str_tag = "<{$tag->getTagType()} class=\""
        .implode(" ",array_map("strval",$tag->getClasses())).
            "\" name=\"{$tag->getName()}\" id=\"{$tag->getId()}\" ".
        implode(" ",array_map("self::attGen",$tag->getExtraAtt()));
        $tag_type = $tag->getTagType();
        switch ($tag_type){
            case 'select':
                $str_tag .= "size=\"{$tag->getSize()}\">".
                implode(" ",array_map("self::tagGen",$tag->getTag())).
                "</select>";
                break;
            case 'input':
                $str_tag .= "type =\"{$tag->getType()}\"} >";
                break;
            case 'label': 
                $str_tag .= ">{$tag->getValue()}</label>";
                break;
                
            case 'option':
                $str_tag .= ">{$tag->getValue()}</option>";
                break;
            case 'form':
                $str_tag .=">";
                foreach($tag->getTag() as $e){
                   $str_tag .= self::tagGen($e);
                }
                $str_tag .= "</form>";
                break;
            case 'div':
                $str_tag .=">";
                foreach($tag->getTag() as $e){
                    $str_tag .= self::tagGen($e);
                 }
                    $str_tag .= "</div>";
                break;
            case 'image':
                $str_tag .= " source={$tag->getSource()} />";
                break;
        }
        return $str_tag;
    }
    public static function attGen(AbstractAttribute $att):string{
        return "{$att->getKey()} = \"{$att->getValue()}\"";
    }
    public static function fonts(string $font):Option{
        return new Option(
            classes:[$font],
            id:$font,
            name:$font,
            value:$font);
    }
    
}