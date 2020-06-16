<?php

namespace CF\CMP;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("§cU plugin partiu");
    }
	
    public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args) : bool{
		switch($cmd->getName()){
                case "fareshi":
                    if($sender instanceof Player){
					$sender->sendMessage("§dFARESHI, ma come posso prendergli palla? Che questo ce l'ha attaccata ai piedi come Wok baby boss del poppin yaaaay");
					}
					break;
				case "muro":
                    if($sender instanceof Player){
					$sender->sendMessage("§cHo preso er muro Fratellì");
					}
					break;
				case "sfonnato":
                    if($sender instanceof Player){
					$sender->sendMessage("§cHo sfonnato tutto Fratellì");
					}
					break;
				case "naboli":
                    if($sender instanceof Player){
					$sender->sendMessage("§bAbbiamo §fun §bsogno §fnel §bcuore §fNapoli §britorna §fcampione§b!");
					}
					break;
				case "stupro":
                    if($sender instanceof Player){
					$sender->sendMessage("§6Non è stupro, è solo sesso a sorpresa");
					}
					break;
				case "incarcerat":
                    if($sender instanceof Player){
					$person = $sender->getName();
					$sender->sendMessage($person . " è un fratm ingiustamente incarcerat");
					}
					break;
				case "orolog":
                    if($sender instanceof Player){
					$sender->sendMessage("§eWe guagliò bell stu orolog");
					}
					break;
				case "ue":
                    if($sender instanceof Player){
					$sender->sendMessage("§7[§a+§7] §aDomenicoBini");
					}
					break;
			    case "identity":
				    if($sender instanceof Player){
					$sender->sendMessage("§7Nome§8: Ciro \n§7Cognome§8: Esposito \n§7Santo Preferito§8: San Gennaro \n§7Residenza§8: Secondigliano");
					}
		}
		return true;
    }
}