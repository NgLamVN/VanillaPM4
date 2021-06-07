<?php

declare(strict_types=1);

namespace brokiem\vanillapm4\block;

use brokiem\vanillapm4\tile\ShulkerBox as TileShulkerBox;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockFactory as BlockFactoryPM;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as IdsPM;
use pocketmine\block\BlockToolType;
use pocketmine\block\Opaque;
use pocketmine\block\Transparent;
use pocketmine\block\utils\TreeType;
use pocketmine\block\WoodenDoor;
use pocketmine\item\ItemIds;

class BlockFactory {

    public static function init(): void {
        /** @var BlockFactoryPM $i */
        $i = BlockFactoryPM::getInstance();

        $i->register(new ShulkerBox(new BID(IdsPM::SHULKER_BOX, 0, null, TileShulkerBox::class), "Shulker Box"));
        $i->register(new ShulkerBox(new BID(IdsPM::UNDYED_SHULKER_BOX, 0, null, TileShulkerBox::class), "Shulker Box"));
        $i->register(new Seagrass(new BID(IdsPM::SEAGRASS, 0), "Seagrass"));
        $i->register(new Lectern(new BID(IdsPM::LECTERN, 0), "Lectern"));
        $i->register(new Campfire(new BID(IdsPM::CAMPFIRE, 0, ItemIds::CAMPFIRE), "Campfire"));
        $i->register(new Composter(new BID(IdsPM::COMPOSTER, 0), "Composter"));
        $i->register(new Transparent(new BID(IdsPM::BELL, 0), "Bell", new BlockBreakInfo(1, BlockToolType::PICKAXE, 0, 25)));
        $i->register(new BlastFurnace(new BID(IdsPM::BLAST_FURNACE, 0), "BlastFurnace"));
        $i->register(new Smoker(new BID(IdsPM::SMOKER, 0), "Smoker"));
        $i->register(new SweetBerryBush(new BID(IdsPM::SWEET_BERRY_BUSH, 0), "SweetBerryBush", BlockBreakInfo::instant()));
        $i->register(new Grindstone(new BID(IdsPM::GRINDSTONE, 0), "Grindstone"));

        $i->register(new Opaque(new BID(IdsPM::FLETCHING_TABLE, 0), "FletchingTable", new BlockBreakInfo(2, BlockToolType::AXE, 0, 2)));
        $i->register(new Transparent(new BID(IdsPM::STONECUTTER_BLOCK, 0), "Stonecutter", new BlockBreakInfo(2, BlockToolType::PICKAXE, 0, 2)));
        $i->register(new Opaque(new BID(IdsPM::CARTOGRAPHY_TABLE, 0), "CarthographyTable", new BlockBreakInfo(2, BlockToolType::AXE, 0, 2)));
        $i->register(new Transparent(new BID(IdsPM::CAULDRON_BLOCK, 0), "Cauldron", new BlockBreakInfo(2, BlockToolType::PICKAXE, 0, 2)));

        foreach (TreeType::getAll() as $treeType) {
            $magicNumber = $treeType->getMagicNumber();
            $name = $treeType->getDisplayName();
            $wood = new Wood(new BID(IdsPM::WOOD, $magicNumber), $name . " Wood", new BlockBreakInfo(2.0, BlockToolType::AXE), $treeType, false);
            $i->register($wood, true);
        }
    }
}