<?php
namespace BeeGame;

class DroneBee extends Bee
{
	public $hitPoints = 50;
	public $hitDeductablePoints = 12;
	
	/**
	 * this will reset the hit points for this be
	 */
	public function reset()
	{
		$this->hitPoints = 50;
	}
}
