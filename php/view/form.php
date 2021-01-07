<?php

namespace com\dogz\view;

use com\dogz\model\Attribute;
use com\dogz\component\Div;
use com\dogz\component\Form;
use com\dogz\component\Image;
use com\dogz\component\Input;
use com\dogz\component\Label;
use com\dogz\component\Select;
use com\dogz\util\UtilAPI;



$title = new Label(value:"Dogz",name:"title",id:"title");
$race = new Div(
    id : 'race_div',
        name : 'race_div',
        tag : [
    new Label(value : 'Escolha uma raça', id : 'race_label', name : 'race_label'),
            new Select(
                id: 'race_select',
                name : 'race_select',
                tag : UtilAPI::getAllRacesAsOption(),
                extra_att:[
                    new Attribute('onchange','get_img();'),
                    new Attribute('onfocus','this.selectedIndex = -1;')])]);

$name = new Div(
    classes:['p-1','m-between'],
    id: 'name_div',
    name: 'name_div',
    tag:[
        new Label(
            value:'Digite o nome:',
            id:'name_label',
            name:'race_label'),
        new Input(
            value:'Dog name',
            id: 'name_input',
            name:'name_input',
            extra_att: [
                new Attribute("oninput", "onNameChange()"),
                new Attribute("autocomplete", "off")
            ])

    ]);


$color = new Div(
    classes:['p-1','m-between'],
    id: 'color_div',
    name: 'color_div',
    tag: [
    new Label(value : 'Escolha uma cor', id : 'color_label', name : 'color_label'),
            new Input(value:'Dog color',
            id: 'color_input',
            name:'color_input',
            type:'color',
            extra_att:[new Attribute('onchange','selectColor()')])
    ]);
$font = new Div(
    id: 'font_div',
    name: 'font_div',
    tag:[
    new Label(
        value:'Digite o nome:',
            id:'font_label',
            name:'font_label'),
        new Select(
            id: 'font_select',
            name : 'font_select',
            size:3,
            extra_att:[
                new Attribute("onchange","selectFont();"),
                new Attribute('onfocus','this.selectedIndex = -1;')],
            tag : array_map("com\dogz\util\Util::fonts", ['roboto', 'josefin', 'lobster', 'dancing-script', 'east-sea']))
    ]);
$image = new Div(
    id: 'image_div',
    name:'image_div',
    tag:[
        new Label(
            id:'image_label',
            name:'image_label'
        ),
        new Image(
            id:'image_img',
            name:'image_img'
        )
    ]
        );





$form = new Form(
    ['primary_color', 'center'],
    [$title, $race, $name, $color, $font,$image],
    'form',
    'form',
    'form');



    return $form;

