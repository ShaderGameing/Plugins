<?php
/*
__PocketMine Plugin__
name=Tapmekits
description=Tap a GoldBlock to earn your kit !
version=Beta 1.1
author=ShaderGameing
class=TouchCommand
apiversion=9,10,11,12,13,14
*/
/* 
Small Changelog
===============
1.0: Initial release
===============
1.1:
-API Update
-More Kits
-Name Change
-Commands
*/
class TouchCommand implements Plugin{
    private $api;
    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
    public function init(){
        $this->api->addHandler("player.block.touch", array($this, "touchHandler"), 15);
		 console("[INFO] TapMeKit Started! ");
		 console("[INFO] TapMeKit Started! ");
		 console("[INFO] TapMeKit Started! ");
		 console("[INFO] TapMeKit Started! ");
		 $this->api->console->register("kitinfo","Sends a message to a user of kit info", array($this, "kit"));
		 $this->api->ban->cmdwhitelist("kitinfo");
    }
	   public function __destruct(){
    }
    public function touchHandler($data, $event) {
        $dataTarget = $data["target"];
        if ($dataTarget->getID() === 41) { //gold block 35
		$this->api->console->run("give ".$data["player"]->username." 298 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 299 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 300 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 301 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 272 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 261 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 262 32", "console", false);	
		$this->api->console->run("give ".$data["player"]->username." 260 5", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Your kit has been given !", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Please Have Fun & Dont spam kits !", "console", false);
        }
		elseif ($dataTarget->getId() === 247) { //nether ractor
		$this->api->console->run("give ".$data["player"]->username." 274 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 303 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 302 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 87 10", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 319 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 405 2", "console", false);	
		$this->api->console->run("give ".$data["player"]->username." 259 1", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Your kit has been given !", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Please Have Fun & Dont spam kits !", "console", false);
		}
		elseif ($dataTarget->getId() === 35) { //white wool
		$this->api->console->run("give ".$data["player"]->username." 331 5", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 351 5", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 139 5", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 91 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 352 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 285 1", "console", false);	
		$this->api->console->run("give ".$data["player"]->username." 310 1", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Your kit has been given !", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Please Have Fun & Dont spam kits !", "console", false);
		}
		elseif ($dataTarget->getId() === 170) { //hay bale
		$this->api->console->run("give ".$data["player"]->username." 235 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 351 5", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 302 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 299 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 355 1", "console", false);
		$this->api->console->run("give ".$data["player"]->username." 6:3 1", "console", false);	
		$this->api->console->run("give ".$data["player"]->username." 321 1", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Your kit has been given !", "console", false);
		$this->api->console->run("tell ".$data["player"]->username." [TapMe]Please Have Fun & Dont spam kits !", "console", false);
		}
        return true;
		}
     public function kit($cmd, $args, $issuer){
     $username = $issuer->username;
     $this->api->chat->sendTo(false, "[TapMe] Kit Info \n ==================== \n [TapMe] White Wool \n [TapMe] Nether Reactor \n [TapMe] Gold Block \n [TapMe] Hay Bale");
   }
   }
			
	
