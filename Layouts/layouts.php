
<?php
Class layouts{
    public function heading(){
        echo "<h1>Welcome to {$conf['site_name']} </h1>";
    }
    public function footer($conf) {
        echo "<footer>Copyrights &copy;" . date("Y") . " {$conf['site_name']} . All rights reserved.</footer>";
    }
}