<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
include 'views/head.php';

// header
include 'views/header.php';

// menu
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

<script src="includes/time.js"/>

switch ($action) {
    case 'home':
        include 'views/home.php';
        break;
    case 'articles':
        //get articles from the model
        require_once 'model/getarticles.php';
        //rewrite to smarty template
        $templateParser->assign('article_list',$result_list);
        $templateParser->display('articles.tpl');
        break;
    case 'about':
        //use 'display' to show a template
        require_once('model/getabout.php');
        $templateParser->assign('about_list');
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        //contact
        // include 'views/contact.php';
        $templateParser->display('views/contact.tpl');
        break;
}

// footer
include 'views/footer.php';

?>
