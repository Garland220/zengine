<?php

class BaseMobile extends Entity
{	
	protected $stats = array("body" => 0, "mind" => 0, "agility" => 0);

	protected $naturalArmor = 0;

	protected $skills = array();
	protected $feats = array();

	protected $inventory;
	protected $equipped = array();
	protected $hands = array("HandR"=>null,"HandL"=>null);

	public function getArmor()
	{
		$armor = 0;
		if (!empty($this->equipped['armor']))
			$armor += $this->equipped['armor']->defense;
		if (!empty($this->equipped['shield']))
			$armor += $this->equipped['shield']->defense;
		return $armor;
	}

	public function getDefense($skill)
	{
		return 10 + $this->naturalArmor + $this->getArmor() + ($this->getSkill($skill)/2);
	}

	public function getSkill($skill)
	{
		$skill = ucwords(strtolower($skill));
		if (empty($this->skills[$skill]))
			return 0;
		$amount = $this->skills[$skill]['ranks'];
		$amount += $this->getStatMod($this->getStat($this->skills[$skill]['stat']));
		return $amount;
	}

	public function getStat($stat)
	{
		return $this->stats[$stat];
	}

	public function getStatMod($stat)
	{
		if (empty($stat))
			return 0;
		$stat = ($stat - 10)/2;
		return $stat;
	}

	/*
	 * BaseMobile constructor
	 */
	public function __construct($name)
	{
		parent::__construct($name, "");
		$this->inventory = new BaseContainer();
	}

	public function addFeat($feat)
	{
		if(!is_object($feat) || !method_exists($feat, "hasRequirements"))
			return false;
		if (!$feat->hasRequirements($this))
			return false;
		else
			$this->feat[] = $feat;
		return true;
	}

	public function addItem($item)
	{
		if (!empty($this->inventory))
			return $this->inventory->addItem($item);
		return false;
	}

	public function addSkill($skill, $stat)
	{
		$skill = ucwords(strtolower($skill));
		$stat = strtolower($stat);
		if (!empty($this->skills[$skill]))
			return false;
		if (is_numeric($stat))
			return false;
		$this->skills[$skill] = array("stat" => $stat, "ranks" => 0);
	}

	public function increaseSkill($skill, $amount)
	{
		$skill = ucwords(strtolower($skill));
		if (!is_int($amount))
			return false;
		if (empty($this->skills[$skill]))
			return false;
		$this->skills[$skill]['ranks'] += $amount;
		return true;
	}

	public function subtractSkill($skill, $amount)
	{
		$skill = ucwords(strtolower($skill));
		if (!is_int($amount))
			return false;
		if (empty($this->skills[$skill]))
			return false;
		$this->skills[$skill] -= $amount;
		return true;
	}

	public function hasFeat($featName)
	{
		foreach($this->feats as $feat)
		{
			if(!is_object($feat) || !property_exists($feat, "name"))
				continue;
			if ($feat->name == $featName)
				return true;
		}
		return false;
	}

	public function hasSkill($key, $amount)
	{
		if (!array_key_exists($key, $this->skils))
			return false;
		else if ($this->skills[$key] < $amount)
			return false;
		return true;
	}

	public function say($message, $color="000000", $font="")
	{
		
	}
}