<?php

/*
 * Utility functions
 */

function strToHex($string)
{
	$hex='';
	for ($i=0; $i < strlen($string); $i++)
		$hex .= dechex(ord($string[$i]));
	return $hex;
}

function hexToStr($hex)
{
	$string='';
	for ($i=0; $i < strlen($hex)-1; $i+=2)
		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	return $string;
}

function errorLog($error)
{
	
}

/*
 * Pushes a value into an array with a specific key assosciation
 */
function array_push_assoc($array, $key, $value)
{
	$array[$key] = $value;
	return $array;
}

/*
 * Encloses assosiative array inside another array of $responseType, then resturns as JSON string.
 */
function toJson($array,$responseType="")
{
	if (!empty($responseType))
		$array = array($responseType => $array);
	return json_encode($array);
}

/*
 * Encloses JSON string in JSONP callback function.
 */
function toJsonP($json,$callback)
{
	if (is_array($json))
		$json = json_encode($json);
	return sprintf('%1$s(%2$s)', $callback, $json);
}