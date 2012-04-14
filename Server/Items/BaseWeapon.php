<?php

include_once('BaseItem.php');

abstract class WeaponType
{
	const simple = 0;
	const martial = 1;
	const exotic = 2;
}

abstract class DamageType
{
	const blunt = 0;
	const slashing = 1;
	const piercing = 2;

	const fire = 3;
	const electric = 4;
	const acid = 5;
	const sonic = 6;
	const cold = 7;
	const positive = 8;
	const negative = 9;
}

class BaseWeapon extends BaseItem
{
	protected $damage = "1d6";
	protected $critRange = "20";
	protected $critMulti = "2";

	protected $range = "0";
	protected $weaponType;
	protected $damageType;

	protected $reach = false;
	protected $light = false;
	protected $twoHanded = false;

	public function getDamage(){ return $this->damage; }
	public function setDamage($damage){ $this->damage = $damage; }

	public function getCritRange(){ return $this->critRange; }
	public function setCritRange($critRange){ $this->critRange = $critRange; }

	public function getCritMultiplier(){ return $this->critMulti; }
	public function setCritMultiplier($critMulti){ $this->critMulti = $critMulti; }

	public function getRange(){ return $this->range; }
	public function setRange($range){ $this->range = $range; }

	public function getHasReach(){ return $this->reach; }
	public function setHasReach($reach){ $this->reach = $reach; }

	public function getIsLight(){ return $this->light; }

	public function getIsTwoHanded(){ return $this->twoHanded; }

	public function __construct($name, $graphic = "W_Dagger001")
	{
		parent::__construct($name, $graphic, 1);
		$this->stackable = false;
	}

	public function onHit($attacker,$defender)
	{
		
	}

	public function onSwing($attacker,$defender)
	{
		if (!$this->checkHit($attacker, $defender))
			return false;
	}

	public function checkHit($attacker,$defender)
	{
		return true;
	}
}