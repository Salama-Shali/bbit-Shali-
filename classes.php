
<?php
Class structure{
    public function heading(){
        echo "<h1>Welcome to BBIT E </h1>";
    }
    public function footer(){
        echo "<footer>Copyrights&copy;" . date("Y") . " BBIT E. All rights reserved.</footer>";
    }
}

//create an instance of the class
$page = new structure();

//call the methods
$page->heading();
$page->footer();