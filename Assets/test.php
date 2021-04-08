<?php 
   include "/COGIP/Assets/header.php";
   require_once "ProcessHandler.php";

   $n = new Handle() ;
   $n->getCompanies(1,1);
   echo "ok";
?>