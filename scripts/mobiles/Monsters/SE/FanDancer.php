<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class fandancer extends Mobile {
	public function summon() {
		$this->name = "a fan dancer";
		$this->body = 247;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x372;
		$this->str = rand(301, 375);
		$this->dex = rand(201, 255);
		$this->int = rand(21, 25);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 12;
		$this->damage_max = 17;
		$this->resist_physical = rand(40, 60);
		$this->resist_fire = rand(50, 70);
		$this->resist_cold = rand(50, 70);
		$this->resist_poison = rand(50, 70);
		$this->resist_energy = rand(40, 60);
		$this->karma = -9000;
		$this->fame = 9000;
		$this->virtualarmor = 0;

}}
?>