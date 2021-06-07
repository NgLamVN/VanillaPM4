<?php

namespace brokiem\vanillapm4\item;

use pocketmine\entity\effect\VanillaEffects;
use pocketmine\entity\Living;
use pocketmine\item\Food;

class HoneyBottle extends Food
{
	public function getFoodRestore() : int {
		return 6;
	}

	public function getSaturationRestore() : float {
		return 1.2;
	}

	public function getMaxStackSize() : int{
		return 16;
	}

	public function onConsume(Living $consumer) : void {
		if ($consumer->getEffects()->has(VanillaEffects::POISON()))
		{
			$consumer->getEffects()->remove(VanillaEffects::POISON());
		}
	}
}