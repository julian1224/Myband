
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


switch ($action) {
    case 'home':
        include '../model/get_pagination.php';
        $templateParser->assign('page', $page);
        include '../model/get_data.php';
        $templateParser->assign('number_of_pages', $number_of_pages);
        $templateParser->assign('result', $result);
        $templateParser->display('../views/index.tpl');
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
        $templateParser->display('views/contact.tpl');
        break;
    default:
      $templateParser->display('index.tpl');
      break;
};
require_once("model/get_DATE.php");
$templateParser->assign('get_DATE', $get_DATE);
// footer
$templateParser->display('views/footer.tpl');

?>
