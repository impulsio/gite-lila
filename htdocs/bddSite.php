<?php
require_once('bdd.php');

function getParameters()
{
  return getListeWithKey('select * from parameters;', 'code', 'value');
}

function getPage ($link)
{
  $link = addslashes($link);
  return getOne('select * from pages where link=\''.$link.'\';');
}

function getHomePage()
{
  return getOne('select * from pages where isHome=1;');
}

function getMenu()
{
  return getPages('');
}

function getPages($idTopPage)
{
  if ($idTopPage=='')
  {
    $pages=getListe('select * from pages where idTopPage is null and isMenu=1;');
  }
  else {
    $pages=getListe('select * from pages where idTopPage='.$idTopPage.' and isMenu=1;');
  }
  if(count($pages)>0)
  {
    foreach($pages as $i => $page)
    {
      $pages[$i]['subPages']=getPages($pages[$i]['idPage']);
    }
  }
  return $pages;
}

function getBanner($idPage)
{
  $idPage = addslashes($idPage);
  return getOne('select * from banner where idPage='.$idPage.';');
}

function getSection($idPage)
{
  $idPage = addslashes($idPage);
  return getListe('select * from section where idPage='.$idPage.' order by ordre;');
}

?>
