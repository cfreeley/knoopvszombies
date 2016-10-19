#!/usr/bin/php5
<?php

  require realpath(dirname($_SERVER['SCRIPT_NAME']).'/../knoopvszombies.ini.php');
  require DOCUMENT_ROOT.'/public/module/includes.php';

  $GLOBALS['Wall']->GenerateWallCache();
  
?>