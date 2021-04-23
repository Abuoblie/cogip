<?php

require_once "../View/header.php";
session_start();
$_SESSION = array();
session_destroy();
//header('Location: login.php');