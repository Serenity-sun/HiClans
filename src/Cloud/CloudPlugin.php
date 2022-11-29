<?php

namespace Cloud;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use Vecnavium\FormsUI\CustomForm;

class CloudPlugin extends PluginBase {

	/**
	 * @return void
	 */
    protected function onEnable(): void
    {
		$form = new CustomForm(function (Player $player, int $data = null) {
			$player->sendMessage("example");
		});

		$form->setTitle("example");
    }
}