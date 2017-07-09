
<?php


require_once 'model/emptyvars.php';

//configuration settings
require 'includes/config.php';
// RSS Feed


//initialisation
require 'includes/bootstrap.php';

// head
require_once 'model/weekmusic.php';
$templateParser->assign('mp3source', $mp3source);
require_once 'model/get_title.php';
$templateParser->assign('title', $title);

$templateParser->display('views/head.tpl');

// header
require_once("model/get_reference.php");
$templateParser->assign('get_reference', $get_reference);
$templateParser->display('views/header.tpl');

//Thing

$action = isset($_GET['page']) ? $_GET['page'] : 'home';


// menu
$templateParser->assign('page_title', $action);
$templateParser->display('views/menu.tpl');

include 'model/cookie.php';

switch ($action) {
    case 'home':
        if(isset($searchterm)) {
          include 'model/content.php';
        } else {
        $templateParser->display('index.tpl');
      }
        break;
    case 'articles':
        //get articles and perform pagination
        require_once 'model/get_pagination.php';
        require_once 'model/get_data.php';
        //assign and display w/ Smarty
        $templateParser->assign('article_list',$result_list);
        $templateParser->display('articles.tpl');
        // page index
        $templateParser->assign('number_of_pages', $number_of_pages);
        $templateParser->assign('page',$page);
        $templateParser->assign('result', $result);
        $templateParser->display('current_page.tpl');
        break;
    case 'about':
        //use 'display' to show a template
        require_once('model/getabout.php');
        $templateParser->assign('about_list');
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;
    case 'search':
      //search
      include 'model/searchcontent.php';
      include 'model/search.php';
      break;
    default:
      $templateParser->display('index.tpl');
      break;
};


// footer
require_once("model/get_DATE.php");
$templateParser->assign('get_DATE', $get_DATE);
$templateParser->display('footer.tpl');


?>
