<?php

/*
__PocketMine Plugin__
name=admins
description=Displays current server rules.
version=0.1.1
author=ShaderGameing
class=admins
apiversion=9
*/


class Rules implements Plugin{
        private $api, $path;
        public function __construct(ServerAPI $api, $server = false){
                $this->api = $api;
        }

        public function init(){
          $this->api->console->register("admins", "Displays admins to user", array($this, "admins"));
          $this->api->ban->cmdWhitelist("admins"); // Non OPs can use the command too
          $this->path = $this->api->plugin->configPath($this);
          $this->msgs = new Config($this->path."msgs.yml", CONFIG_YAML, array( // configurable messages list, so it's easy to add a msg, just add one in the msgs.yml file
                        "<--[ADMINS]-->",
                        "1. NAME",
                        "2. NAME",
                        "3. NAME",
                        "4. NAME",
						"5. NAME",
                ));
                $this->msgs = $this->api->plugin->readYAML($this->path . "msgs.yml"); // so it's not in the stupid config format
        }

        public function Rules($cmd, $args, $issuer){
                $username = $issuer->username;
                foreach($this->msgs as $msg){ // for each message in the msgs.yml file , send a msg to the player
                        $this->api->chat->sendTo(false, $msg, $username);
                }
        }
        public function __destruct(){

        }
}
