<?php
if (file_exists('bddSite.php'))
{
  require_once('bddSite.php');
  $parameters = getParameters();
  if (isset($_GET['link']))
  {
    $page=getPage($_GET['link']);
  }
  else {
    $page=getHomePage();
  }
  $idPage = $page['idPage'];

  if (array_key_exists('template', $parameters) && file_exists('template/'.$parameters['template'].'/load.php'))
  {
    require_once('template/'.$parameters['template'].'/load.php');

    head($parameters, $page);
    menu($parameters['nomSite'], getMenu());

    $banner = getBanner($idPage);
    if (count($banner)>0)
    {
      banner($banner);
    }

    foreach(getSection($idPage) as $i => $section)
    {
      switch($section['type'])
      {
        case 'spotlight': sectionSpotlight($section);
          break;
        case 'posts': sectionPosts($section);
          break;
        default: echo 'Erreur...';
          break;
      }
    }

    footer($parameters);
  }
  else {
    echo '<html><head/><head><body><h1>No template define or template not existing...</h1></body>';
  }
}
else {
  echo '<html><head/><head><body><h1>Installation to be done...</h1></body>';
}
?>
