<?php
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = APP_ROOT . '/controllers/' . ucfirst($controller) . 'Controller.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $controllerClass = ucfirst($controller) . 'Controller';
    if (class_exists($controllerClass)) {
        $controllerObj = new $controllerClass();
        if (method_exists($controllerObj, $action)) {
            $controllerObj->$action();
        } else {
            echo "Action '$action' không tồn tại trong controller '$controllerClass'.";
        }
    } else {
        echo "Controller '$controllerClass' không tồn tại.";
    }
} else {
    echo "Không tìm thấy file controller: $controllerFile";
}
