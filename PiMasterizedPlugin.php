<?php
    require 'dashBoard.php';
    class PiMasterizedPlugin extends Plugin
    {
        public function __construct(){
            //this is required by the plugin system to get working properly. This adds all the below events to global like {Class}::{onEventName};
            parent::__construct(); //Required
            echo '<!-- teste -->';
            return true;
        }

        public function initialize(){
            return true;
        }
        
        public function onPageLoad($sess, &$post)
        {
            echo '<!-- teste carrega pagina -->';
            return true;
        }

        public function onDashboardEnd($sess)
        {
            $myDashBoard = new dashBoard();
            echo '<!-- teste PiMasterizedPlugin -->';
            return $myDashBoard->onDashboardEnd($sess);
        }
    }
?>