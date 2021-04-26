<?php

require_once "View/header.php";
$_SESSION = array();
session_destroy();
header('Location: login.php');