<?php

namespace Cloud;

use dktapps\pmforms\ModalForm;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class CloudPlugin extends PluginBase {

	/**
	 * @return void
	 */
    protected function onEnable(): void
    {
    }

	/**
	 * @param CommandSender $sender
	 * @param Command $command
	 * @param string $label
	 * @param array $args
	 * @return bool
	 */
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
	{
		$form = new ModalForm(
			"example title",
			"example content",
			function (Player $player, bool $choice) {
				$player->sendMessage("oke");
			});

		if ($sender instanceof Player) {
			$sender->sendForm($form);
		}

		return false;
	}
}