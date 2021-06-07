<?php

declare(strict_types=1);

namespace brokiem\vanillapm4\item;

use pocketmine\item\ItemFactory as ItemFactoryPM;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds as ItemIdsPM;

class ItemFactory {

    public static function init(): void {
        /** @var ItemFactoryPM $i */
        $i = ItemFactoryPM::getInstance();

        $i->register(new SweetBerries(new ItemIdentifier(ItemIdsPM::SWEET_BERRIES, 0), "Sweet Berries"));
        $i->register(new Campfire(new ItemIdentifier(ItemIds::CAMPFIRE, 0), "Campfire"));
        $i->register(new HoneyBottle(new ItemIdentifier(ItemIds::HONEY_BOTTLE, 0), "Honey Bottle"));
    }
}