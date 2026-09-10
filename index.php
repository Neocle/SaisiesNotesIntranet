<?php

require_once __DIR__ . '/database/DatabaseConnection.php';
require_once __DIR__ . '/controller/AuthController.php';
require_once __DIR__ . '/controller/GrilleEvalController.php';
require_once __DIR__ . '/controller/PlanningController.php';

session_start();

$authController = new AuthController($pdo);
$grilleEvalController = new GrilleEvalController();
$planningController = new planningController();

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($url) {
    case "/login": {
        $authController->handle();
        break;
    }
    case "/logout": {
        $authController->logout();
        break;
    }
    case "/grille": {
        $grilleEvalController->show();
        break;
    }
    case "/planning": {
        $planningController->Planning();
        break;
    }
}