<?php

session_start();
session_destroy();

header('Location:/recyclemart/Pages/homePage/homePage.php');
exit;
  

?>