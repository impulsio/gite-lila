<?php
if (file_exists('bddSite.php'))
{
  require_once('bddSite.php');
  $parameters = getParameters();
  if (array_key_exists('template', $parameters) && file_exists('template/'.$parameters['template'].'/load.php'))
  {
    require_once('template/'.$parameters['template'].'/load.php');

    head($parameters['nomSite']);
    menu($parameters['nomSite']);
    banner('Découvrez notre gîte !', '/', 'upload/gite.png');

    footer($parameters['nomSite']);
  }
  else {
    echo '<html><head/><head><body><h1>No template define or template not existing...</h1></body>';
  }
}
else {
  echo '<html><head/><head><body><h1>Installation to be done...</h1></body>';
}
?>
