<?php

/*
__PocketMine Plugin__
name=StaffList
description=Displays current server rules.
version=0.1.1
author=PHP_PRO
class=staff
apiversion=11,12,13
*/


class staff implements Plugin{
        private $api, $path;
        public function __construct(ServerAPI $api, $server = false){
                $this->api = $api;
        }

        public function init(){
          $this->api->console->register("admins", "Displays admins to user", array($this, "admins"));
          $this->api->ban->cmdWhitelist("admins"); 
          $this->path = $this->api->plugin->configPath($this);
          $this->msgs = new Config($this->path."msgs.yml", CONFIG_YAML, array( 
                        "~~~[Current Staff ]~~~",
                        "[RANK] NAME", // [RANK] Can be turned into EX: [Admin] [Owner] [Mod]
                        "[RANK] NAME",
                        "[RANK] NAME",
                        "[RANK] NAME",
			"[RANK] NAME",
                ));
                $this->msgs = $this->api->plugin->readYAML($this->path . "msgs.yml");
        }

        public function Rules($cmd, $args, $issuer){
                $username = $issuer->username;
                foreach($this->msgs as $msg){ 
                        $this->api->chat->sendTo(false, $msg, $username);
                }
        }
        public function __destruct(){

        }
}
