<?php

namespace Skyblock;

use Skyblock\crafting\Recipes;
use pocketmine\plugin\PluginBase;

class Skyblock extends PluginBase {

    public function onEnable() {
        Recipes::registerRecipes();
    }

}
