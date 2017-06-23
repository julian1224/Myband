<?php

require 'libs/Smarty.class.php';
require_once 'includes/config.php';
//set up database connection
$dbc = new mysqli(HOST,USER, PASS, DBNAME);
if($dbc->errno) {
    echo 'Error : ' . $dbc->connect_error();
}


//set up template engine
$templateParser = new Smarty();
$templateParser->template_dir = "views";
$templateParser->compile_dir = "views/compiled";
