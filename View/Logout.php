<?php

require_once "header.php";
$_SESSION = array();
session_destroy();
header('Location: login.php');
