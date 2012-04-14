<?php

class Feat
{
	protected $name = "";
	protected $description = "";

	protected $requiredFeats = array();
	protected $requiredSkills = array();

	protected $bodyRequireent = 0;
	protected $mindRequirement = 0;
	protected $agilityRequirement = 0;

	protected $modifiedSkills = array();

	public function __construct($name = __FUNCTION__)
	{
		if ($name == __FUNCTION__)
			$name = substr(__FUNCTION__, 0, strpos(__FUNCTION__, "Feat"));
		$this->name = $name;
	}

	public function hasRequirements($mobile)
	{
		if(!is_object($mobile) || !is_subclass_of($mobile, "BaseMobile"))
			return false;
		if (!property_exists($mobile, "feats") || !property_exists($mobile, "skills"))
			return false;
		if (!empty($requiredFeats) && empty($mobile->feats))
			return false;
		if (!empty($requiredSkills) && empty($mobile->skills))
			return false;
		if (!$mobile->hasFeat($this->name))
			return false;

		if ($mobile->body < $this->bodyRequireent)
			return false;
		if ($mobile->mind < $this->mindRequireent)
			return false;
		if ($mobile->agility < $this->agilityRequirement)
			return false;

		foreach ($requiredFeats as $feat)
		{
			if (!$mobile->hasFeat($feat->name))
				return true;
		}
		foreach ($requiredSkills as $skill)
		{
			if (!$mobile->hasSkill($skill->key, $skill->value))
				return true;
		}
		return true;
	}
}