<?php
// index.php - Punto de entrada
require_once 'controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
