<?php 
include_once('helpers/app.php');
$page = isset($_GET['p'])?$_GET['p']:'home';
include_once('tamplate/header.php');
include_once("pages/$page.php");
include_once('tamplate/footer.php');