<?php

namespace Core;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
  
     const PREFIX = "§l§9Annihilation §r";
     public $games;
     public $data;
  
     public function onEnable(){
         $this->getServer()->getPluginManager()->registerEvets($this, $this);
         $this->setGameData();
         $this->getLogger()->info("Enabled Annihilation plugin.");
     }
  
     public function setGameData(){
       $this->games = ["anni-1" => ["sign-join" => new Vector3(1,1,1),
                                    "max-players" => 100,
                                    "min-players" => 2]];
     }
  
     public function setMapData(){
       $this->data = ["Canyon" => ["spawn-1" => new Vector3(1,1,1),
                                   "spawn-2" => new Vector3(1,1,1),
                                   "spawn-3" => new Vector3(1,1,1),
                                   "spawn-4" => new Vector3(1,1,1),
                                   "boss-1" => new Vector3(1,1,1),
                                   "boss-2" => new Vector3(1,1,1)]]; // More positions are TODO, now I want only spawns for testing.
                                                     
     }
 
     public function inInGame(Player $p){
       
     }
  
  
}
