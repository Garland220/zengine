<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('../../db.php');

$output = array(
    "data" => array(),
    "result" => "success",
    "message" => "",
);

$channelId = 0;
$lastTs = 0;
$lastId = 0;

$q = mysql_query("SELECT * FROM chat WHERE channelId = $channelId AND ts >= $lastTs") or die(json_encode(array("result" => "error", "message" => mysql_error())));
$o = mysql_fetch_array($q);
if (empty($o))
{
	$output['result'] = "error";
	$output['message'] = "no results found";
	die(json_encode($output));
}

$output['data'] = $o;
$output['message'] = "no results found";

die(json_encode($output));