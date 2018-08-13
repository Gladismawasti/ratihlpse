<?php 


$content = $_GET['page'] . '.php';
require_once('./sidebar.php');
require_once($content);
require_once('./footer.php');