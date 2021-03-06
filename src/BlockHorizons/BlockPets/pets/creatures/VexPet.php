<?php

namespace BlockHorizons\BlockPets\pets\creatures;

use BlockHorizons\BlockPets\pets\HoveringPet;
use BlockHorizons\BlockPets\pets\SmallCreature;

class VexPet extends HoveringPet implements SmallCreature {

	public $height = 0.8;
	public $width = 0.4;

	public $name = "Vex Pet";
	public $speed = 1.5;

	public $networkId = 105;

	protected $flyHeight = 25;
	protected $tier = self::TIER_EPIC;

	public function generateCustomPetData() {
		$this->canCollide = false;
	}
}