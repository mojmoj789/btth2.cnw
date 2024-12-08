<?php
require_once './config/config.php';

$controller = isset($_GET['controller']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['controller']) : 'home';
$action = isset($_GET['action']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['action']) : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerPath = APP_ROOT . '/controllers/' . $controllerName . '.php';

if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controllerObj = new $controllerName();

    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    } else {
        echo "Action không tồn tại! <a href='" . DOMAIN . "'>Quay lại trang chủ</a>";
    }
} else {
    echo "Controller không tồn tại! <a href='" . DOMAIN . "'>Quay lại trang chủ</a>";
}
