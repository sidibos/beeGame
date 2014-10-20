<?php
namespace BeeGame;

class WorkerBee extends Bee
{
	public $hitPoints = 75;
	public $hitDeductablePoints = 10;
	
	public function reset()
	{
		$this->hitPoints = 75;
	}
}
