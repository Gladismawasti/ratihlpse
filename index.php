<?php 

$content = './pages/' . $_GET['page'] . '.php';
require_once('./header.php');
require_once('./sidebar.php');
require_once($content);
require_once('./footer.php');