<?php

include_once 'BaseMobile.php';

class BaseMech extends BaseMobile
{
	protected $pilot;

	public function __construct($name)
	{
		parent::__construct($name);
		$this->size = Size::large();
		$this->naturalArmor = 20;
	}

	public function getPilot()
	{
		return $pilot;
	}

	public function setPilot($person)
	{
		if (!is_subclass_of($person, "BaseMobile"))
			return false;
		if (is_subclass_of($person, "BaseMech"))
			return false;
		$this->pilot = $person;
		return true;
	}
}