<?php
class PluginInstallation extends Plugin
    {
        public function __construct(){
            //this is required by the plugin system to get working properly. This adds all the below events to global like {Class}::{onEventName};
            parent::__construct(); //Required
            return true;
        }

        public function initialize(){
            return true;
        }
        public function onCustomPage($sess, &$post)
        {
            //Be careful not to override system pages.
            if($post['page'] == "PluginInstallation")
            {
                echo "<h3>This is an example custom page!</h3>";
            }
            return true;
        }
    }
?>