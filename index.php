<?php
require_once 'config/database.php';
require_once 'controllers/StudioController.php';

$database = new Database();
$db = $database->getConnection();
$controller = new StudioController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'save':
        $controller->save();
        break;
    case 'history':
        $controller->history();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>