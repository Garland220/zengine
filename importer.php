<?php

$includes = array (
	ROOT_DIR.'',
	ROOT_DIR.'Items/',
	ROOT_DIR.'Mobiles/',
);

foreach($includes as $dir)
{
	foreach (glob($dir."*.php") as $filename)
	{
		include_once $filename;
	}
}