<?php

class DevoutFeat extends Feat
{
	public function __construct()
	{
		parent::__construct();

		$this->modifiedSkills = array(
		    "Knowledge (religion)" => 4,
		);

		$this->description = "Through years of hard study, you have gained a +4 bonus to your 'Knowledge (religion)' skill.";
	}
}