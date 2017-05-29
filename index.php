switch ($action) {
case 'home':
  include 'views/home.php';
  break;
case 'articles':
  require_once 'model/getarticles.php';

  $templateParser->assign('article_list',$result_list);
  $templateParser->display('articles.tpl');
  break;
case 'about':

  $templateParser->display('about.tpl');
  break;
case 'contact': 
}
