<?php

include_once 'BaseItem.php';

class BaseContainer extends BaseItem
{
	protected $contents = array();
	protected $locked = false;
	protected $lockDC = 0;
	protected $spaceMax = 0;

	public function getWeight()
	{
		$weight = $this->weight;

		foreach($contents as $item)
		{
			if (is_subclass_of($item, "BaseItem"))
				$weight .= $item->getWeight();
		}
		return $weight;
	}

	public function __construct($graphic = "I_Chest01")
	{
		parent::__construct($graphic, 1);
		$this->stackable = false;
	}

	public function open($mobile)
	{
		if ($this->locked)
			return false;
	}

	public function checkHold($item)
	{
		if (!is_subclass_of($item, "BaseItem"))
			return false;
		if ($item->getWeight() + $this->getWeight() > $this->getWeightMax())
			return false;
		return true;
	}

	public function addItem($item)
	{
		if (!$this->checkHold($item))
			return false;
		$this->contents[] = $item;
		return true;
	}

	public function removeItem($index)
	{
		unset($this->contents[$index]);
		array_values($this->contents);
	}
}