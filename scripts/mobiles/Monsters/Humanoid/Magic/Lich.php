<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Lich extends Mobile {
	public function summon() {
		$this->name = "a lich";
		$this->body = 24;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x3E9;
		$this->str = rand(171, 200);
		$this->dex = rand(126, 145);
		$this->int = rand(276, 305);
		$this->maxhits = rand(103, 120);
		$this->hits = $this->maxhits;
		$this->damage = 24;
		$this->damageMax = 26;
		$this->resist_physical = rand(40, 60);
		$this->resist_fire = rand(20, 30);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = rand(55, 65);
		$this->resist_energy = rand(40, 50);
		$this->karma = -8000;
		$this->fame = 8000;
		$this->virtualarmor = 50;

}}
?>
