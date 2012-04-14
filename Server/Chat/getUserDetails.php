<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('../../db.php');
require_once('../JSON/BaseResponse.php');

if (!empty($_GET['getUser']) && !empty($_GET['userId']))
{
	
}
else if (!empty($_GET['getMessages']) && !empty($_GET['channel']) && !empty($_GET['userId']))
{
	
}
else if (!empty($_GET['postMessage']))
{
	
}

function getUser($data)
{
	
}

function getMessages($data)
{
	
}

function postMessage($data)
{
	if(empty($data['channel']) || empty($data['userId']) || empty($data['message']))
	{
		$r = new BaseResponse("Test", "OK", "");
		$r->send();
	}
}
$r = new BaseResponse("Test", "OK", "");
$r->send();