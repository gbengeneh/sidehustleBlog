<?php
session_start();
if($_SESSION['login'] !=true && !isset($_SESSION['id']) ){
header('Location: ../login.html');
}

$currentuser_session = $_SESSION['id'];
?>