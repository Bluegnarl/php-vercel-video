<?php

$page = $_GET['page'] ?? null;
$data = json_decode(file_get_contents(__DIR__ . "/assets/datas/data.json"), true);

switch ($page) {
    case 'home':
        require_once __DIR__ . "/pages/home.php";
        break;

    case 'help':
        require_once __DIR__ . "/pages/help.php";
        break;
    
    default:
        require_once __DIR__ . "/pages/home.php";
        break;
}