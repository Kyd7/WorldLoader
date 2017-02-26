§<?php

namespace WorldLoader;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Player;

use pocketmine\utils\Config;

class Main extends PluginBase imeplements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("");
    if(!is_dir(@mkdir($this->getDataFolder());
       @mkdir($this->getDataFolder());
  }
  
  public function getMessage($message){
    $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
    return $config->get("$message");
  }
  
  public function onCommand(Command $cmd, $p CommandSender, $label, array $args){
    switch($cmd->getName()){
        case "load";
         if(isset($args[0])) {
           $level = $args[0];
           $this->loadLevel($level, $p);
        break;
        case "loadall";
    }
    }
  }
   
  public function loadLevel($level, Player $p){
    if($level !== null){
      $this->getServer()->loadLevel($level);
    }else{
      $p->sendMessage($this->getMessage(""));
    }
  }
 }
}
     

   
