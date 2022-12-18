<?php

declare(strict_types=1);

namespace Warro\store;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\utils\TextFormat;
use Warro\Base;
use Warro\Variables;

class Unblacklist extends Command
{

	public function __construct(private Base $plugin)
	{
		parent::__construct('storeUnblacklist', TextFormat::AQUA . '[' . Variables::DISCORD . ']');
		$this->setPermission('vasar.store.unblacklist');
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args)
	{
		if (!$sender instanceof ConsoleCommandSender) {
			return;
		}

		if (!isset($args[0])) {
			return;
		}

		//$this->plugin->sutils->unbanPlayer($args[0], $sender);
	}
}