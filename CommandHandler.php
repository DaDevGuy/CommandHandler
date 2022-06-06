<?php
declare(strict_types=1);

namespace YourName\Abc;

use pocketmine\Server;

final class CommandHandler
{
    public static function init(): void
    {
        foreach (self::getCommands() as $k => $v) {
            Server::getInstance()->getCommandMap()->register($, $v);
        }
    }



    public static function getCommand(): array
    {
        return [
          
        ];
    } 
}
