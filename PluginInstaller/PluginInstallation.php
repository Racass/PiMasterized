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
                $page = "<h3>Install your plugins the easy way!</h3><br>";
                $page .= '
                        <form method="post" action="" class="form-group">
                            <label for="gitCloneURL">Git Clone URL</label> <input placeholder="Enter the git URL" class="form-control" type="text" name="gitClone" id="gitCloneURL" value=""><br>
                            <button  class="btn btn-primary" type="submit">Instalar</button>
                        </form>'.
                        '<script>function SubmitFormData() {
                            var gitClone = $("#gitClone").val();
                            $.post("/openrsd/plugins/PiMasterized/PluginInstaller/install.php", { gitClone: gitClone },
                            function(data) {
                             $(\'#results\').html(data);
                             $(\'#myForm\')[0].reset();
                            });

                        }</script>';
                echo $page;
            }
            return true;
        }
    }
?>