<?php

include_once('BaseItem.php');

class BaseArmor extends BaseItem
{
	protected $defense = 0;
	protected $agilPenalty = 0;
	protected $checkPenalty = 0;

	public function getDefense(){ return $this->defense; }
	public function setDefense($defense){ $this->defense = $defense; }

	public function getAgilityPenalty(){ return $this->agilPenalty; }
	public function setAgilityPenalty($agilPenalty){ $this->agilPenalty = $agilPenalty; }

	public function getCheckPenalty(){ return $this->checkPenalty; }
	public function setCheckPenalty($checkPenalty){ $this->checkPenalty = $checkPenalty; }

	public function __construct($name, $graphic = "A_Armour01")
	{
		parent::__construct($name, $graphic, 1);
		$this->stackable = false;
	}

	
}