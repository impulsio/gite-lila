<?php
require_once('bdd.php');

function getParameters()
{
  return getListeWithKey('select * from parameters;', 'code', 'value');
}


?>
