<?php

declare(strict_types=1);

namespace brokiem\vanillapm4\item;

use pocketmine\block\Block;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as IdsPM;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use brokiem\vanillapm4\block\Campfire as CampfireBlock;

class Campfire extends Item {

    public function getMaxStackSize(): int {
        return 1;
    }

    public function getBlock(?int $clickedFace = null) : Block{
		return new CampfireBlock(new BID(IdsPM::CAMPFIRE, 0, ItemIds::CAMPFIRE), "Campfire");
	}
}