<?php
// Ao acrescentar novas model, respeite a ordem
// que os imports devem ocorrer
define ('ROOT', $_SERVER ['DOCUMENT_ROOT']);
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        // may also be using PUT, PATCH, HEAD etc
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}
include_once ROOT . "/php/src/model/AbstractComponent.php";
include_once ROOT . "/php/src/model/AbstractAttribute.php";
include_once ROOT . "/php/src/model/Attribute.php";


include_once ROOT . "/php/components/Div.php";
include_once ROOT . "/php/components/Form.php";
include_once ROOT . "/php/components/Input.php";
include_once ROOT . "/php/components/Label.php";
include_once ROOT . "/php/components/Option.php";
include_once ROOT . "/php/components/Select.php";
include_once ROOT . "/php/components/Image.php";
include_once ROOT . "/php/components/Button.php";


include_once ROOT . "/php/src/util/Util.php";
include_once ROOT . "/php/src/util/UtilAPI.php";

include_once ROOT . "/php/src/controller/Controller.php";


