<?php

namespace Tungst_bpl;

use pocketmine\plugin\PluginBase;
use pocketmine\Player; 
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Event;
use pocketmine\event\player\PlayerJoinEvent;
class Main extends PluginBase implements Listener {


	public function onEnable(){
		$this->getLogger()->info("Basic plugin\n\n\nALoLOO");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
    public function onJoin(PlayerJoinEvent $e){
	    $e->getPlayer()->sendMessage("ALO");
	    $name = $e->getPlayer()->getName();
	    $this->getLogger()->info("$name joined the game");
	}
	
	public function onCommand(CommandSender $sender, Command $command, String $label, array $args) : bool {
	    if($sender instanceof Player){
		   if(strtolower($command->getName()) == "bpl"){
              $sender->sendMessage("Run as player");
           }
		   return true;
		}else{
		   if(strtolower($command->getName()) == "bpl"){
              $sender->sendMessage("Run as console");
		   }
		   return true;
		}
	}
	
}