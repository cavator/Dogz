<?php
namespace com\dogz\util;

use com\dogz\component\Option;

class UtilAPI{

    public static function getAllRacesAsOption():array
    {
        $ch = curl_init();
        $url = "https://dog.ceo/api/breeds/list/all";
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url));
        $json = curl_exec($ch);
        curl_close($ch);
        return self::RaceAsOption(json_decode($json)->message,new Option());
    }

    public static function getRaceImg():void{
        $ch = curl_init();
        $url = 'https://dog.ceo/api/breed/'.file_get_contents('php://input').'/images/random';
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url));
        $json = curl_exec($ch);
        echo json_decode($json)->message;

    }


    public static function RaceAsOption(object $req,Option $style):array
    {
        $options = [];
        foreach($req as $item=>$sub_item){
            $style->setName($item);
            $style->setId($item);
            $style->setValue($item);
            array_push($options,clone $style);
        }
        return $options;
    }


    
    
}