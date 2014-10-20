<?php
namespace BeeGame;

class GameModerator
{
	public $beeRegister 		= array();
	public $numDroneBee 		= 3;
	public $numWorkerBee 		= 5;
	public $QueenBee 			= 1;
	
	/**
	 * This will register or add the Bee instance to the Registry
	 */
	public function registerBeeForTheGame(Bee $bee)
	{
		$this->beeRegister[] = $bee;
	}
	
	/**
	 * This will select a random bee and return its instance
	 */
	public function selectRandomBee()
	{
		$numBee = count($this->beeRegister) - 1;
		$index = rand(0,$numBee);
		
		$selectedBee = $this->beeRegister[$index];
		
		if ($selectedBee instanceof Bee) {
			$selectedBee->hit();
		}
	}
	
	public function start()
	{
		$this->resetGame();
		//add droneBee
		for($i= 1; $i<=$this->numDroneBee; $i++){
			
			$this->registerBeeForTheGame(new \BeeGame\DroneBee());
		}
		
		//add worker bee
		for($n=1; $n<=$this->numWorkerBee; $n++){
			$this->registerBeeForTheGame(new \BeeGame\WorkerBee());
		}
		
		//add QueenBee
		$this->registerBeeForTheGame(new \BeeGame\QueenBee());
	}
	
	/**
	 * this will reset the game by killing all the bees
	 */
	public function resetGame()
	{	
		$this->beeRegister = array();
    }
	
	/**
	 * reduce bee life
	 */
	public function hitBee(Bee $beeObj)
	{
		$beeObj->deductHitPoints();
	}
}
