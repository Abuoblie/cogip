<?php
  session_start();
  require_once "/COGIP/Assets/ProcessHandler.php";
  
  if (!isset($_SESSION['email'])) {
    header("location:/COGIP/Assets/Login.php");
  }
  else{
      echo "welcome  {$_SESSION['first_name']} {$_SESSION['last_name']} ";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>codip</title>
</head>
<body>
