<?php
   session_start();
   unset($_SESSION["loggedIn"]);
   
   header('Refresh: 2; URL = index.php');
   echo 'You have cleaned session';
   echo PHP_EOL;
   echo 'Redirecting in 2 seconds...';
?>
