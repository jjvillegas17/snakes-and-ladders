<?php

namespace App;


class Board {
	private $height;
	private $width;

	public __construct ($height, $width) 
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function spawnSnakes($numOfSnakes)
	{
		// some logic to put $numOfSnakes number of snakes into the board
		return $this;
	}

	public function spawnLadders($numOfLadders)
	{
		// some logic to put $numOfLadders number of ladders into the board
		return $this;
	}	
}