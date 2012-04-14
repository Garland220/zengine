<?php

define("ROOT_DIR", "Server/");
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require_once('db.php');
require_once('importer.php');

$pilot = new BasePerson("Garland");
$mech = new BaseMech("Doomsday Mk IV");
$mech->setPilot($pilot);
$mech->addSkill("FACE PUNCHING", "body");
$mech->increaseSkill("FACE PUNCHING", 1);
//print $mech->getSkill("FACE PUNCHING");
//print_r($mech);

//$entitiy = new Entity("bob","test");
//$entitiy->save();

include_once('Client/pages/main.php');
