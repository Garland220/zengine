<?php

include_once 'BaseMobile.php';

class BasePerson extends BaseMobile
{
	protected $age = 0;
	protected $hairColor = "";
	protected $skinColor = "";

	protected $eatAnything = false;

	public function __construct($name)
	{
		parent::__construct($name);
	}

	public function eat($item)
	{
	}

	public function drink($item)
	{
	}
}