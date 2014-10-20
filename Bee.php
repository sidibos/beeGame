<?php
namespace BeeGame;

abstract class Bee
{
	public $hitPoints;
	public $hitDeductablePoints;
	
	public function hit()
	{
		$this->hitPoints -= $this->hitDeductablePoints;
	}
	
	public function killMe()
	{
		$this->hitPoints = 0;
	}
	
	public function reset();
}
