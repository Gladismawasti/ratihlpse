<?php 

if(empty($_GET['page'])) {
    $page = 'rekapitulasi';
} else {
    $page = $_GET['page'];
}

$content = './pages/' . $page . '.php';

require_once('./header.php');
require_once('./sidebar.php');
require_once($content);
require_once('./footer.php');