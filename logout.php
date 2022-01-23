<?php
session_start();
$_SESSION['id_user'] = "";
$_SESSION['username'] = "";
if(empty($_SESSION['id_user'])) header("location: login.php");
?>