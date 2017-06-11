<?php

namespace BlockHorizons\BlockPets\pets\creatures;

use BlockHorizons\BlockPets\pets\BouncingPet;
use BlockHorizons\BlockPets\pets\SmallCreature;

class MagmaCubePet extends BouncingPet implements SmallCreature {

	public $height = 0.51;
	public $width = 0.51;
	public $speed = 1.4;

	public $name = "Magma Cube Pet";
	public $tier = self::TIER_SPECIAL;

	public $networkId = 42;
}