<?php 
   include "/COGIP/Assets/header.php";
   require_once "verification.php";

   $n = new Validation() ;
   $n->getCompanies(1,1);
   echo "ok";
?>