<?php
namespace BeeGame;

class QueenBee extends Bee
{
	public $hitPoints = 100;
	public $hitDeductablePoints = 8;
	public $observerArr;
	
	public function hit()
	{
		parent::hit();
		
		$this->checkLife();
	}
	
	public function checkLife()
	{
		//the Queen Bee is dead
		if ($this->hitPoints <= 0) {
			//kill all other bees
			$this->killAllBees();
		}
	}
	
	public function killAllBees()
	{
		foreach($this->observerArr as $beeObj){
			$beeObj->killMe();
		}
	}
	
	public function killMe()
	{
		$this->hitPoints = 0;
		$this->killAllBees();
	}
	
	public function addObersver(Bee $beeObj)
	{
		$this->observerArr[] = $beeObj;
	}
	
	public function reset()
	{
		$this->hitPoints = 100;
	}
}
