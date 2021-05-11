<?php

declare(strict_types=1);

namespace brokiem\vanillapm4\block;

use brokiem\vanillapm4\tile\ShulkerBox as TileShulkerBox;
use pocketmine\block\BlockFactory as BlockFactoryPM;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as Ids;
use pocketmine\item\ItemIds;

class BlockFactory {

    public static function init(): void {
        /** @var BlockFactoryPM $i */
        $i = BlockFactoryPM::getInstance();

        $i->register(new ShulkerBox(new BID(Ids::SHULKER_BOX, 0, null, TileShulkerBox::class), "Shulker Box"));
        $i->register(new ShulkerBox(new BID(Ids::UNDYED_SHULKER_BOX, 0, null, TileShulkerBox::class), "Shulker Box"));
        $i->register(new Seagrass(new BID(Ids::SEAGRASS, 0), "Seagrass"));
        $i->register(new Lectern(new BID(Ids::LECTERN, 0), "Lectern"));
        $i->register(new Campfire(new BID(Ids::CAMPFIRE, 0, ItemIds::CAMPFIRE), "Campfire"));
        $i->register(new Composter(new BID(Ids::COMPOSTER, 0), "Composter"));
    }
}