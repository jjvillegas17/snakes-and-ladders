<?php

use App\Snake;

class Game {
	protected Snake $snakes = [];
	protected Ladder $ladders = [];
	protected Board $board;
	protected Players $players = [];

	public function __construct($board, $players)
	{
		$this->board = $board;
		$this->players = $players;
	}

	public function start($snakes, $ladders)
	{
		$this->board
			->spawnSnakes()
			->spawnLadders();
	}
}

