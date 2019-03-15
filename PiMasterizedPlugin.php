<?php
    require 'dashBoard.php';
    require 'PluginInstaller/PluginInstallation.php';

    class PiMasterizedPlugin extends Plugin
    {
        public function __construct(){
            //this is required by the plugin system to get working properly. This adds all the below events to global like {Class}::{onEventName};
            parent::__construct(); //Required
            return true;
        }

        public function initialize(){
            return true;
        }
        
        public function onPageLoad($sess, &$post)
        {
            return true;
        }

        public function onDashboardEnd($sess)
        {
            $myDashBoard = new dashBoard();
            return $myDashBoard->onDashboardEnd($sess);
        }
        /*public function onCustomPageLinks($sess)
        {
            echo '<li><a href="#" onclick="pageLoad(\'PluginInstallation\');"><i class="fa fa-arrow-up"></i> Plugin Installation</a></li>';
            return true;
        }
        public function onCustomPage($sess,&$post)
        {
            $pluginInst = new PluginInstallation();
            return $pluginInst->onCustomPage($sess, $post);
        }*/
    }
?>