<?php
require_once('./config/config.php');

// Kiểm tra controller và action từ URL (nếu có)
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home'; // Mặc định là 'home'
$action = isset($_GET['action']) ? $_GET['action'] : 'index'; // Mặc định là 'index'

// Tạo tên class controller từ controller trong URL
$controllerName = ucfirst($controller) . 'Controller'; // Lấy tên class Controller với chữ cái đầu viết hoa

// Đường dẫn tới file controller
$controllerPath = APP_ROOT . '/controllers/' . $controllerName . '.php';

// Kiểm tra xem file controller có tồn tại không
if (file_exists($controllerPath)) {
    // Bao gồm file controller
    require_once $controllerPath;

    // Kiểm tra xem phương thức action có tồn tại trong controller không
    if (method_exists($controllerName, $action)) {
        // Tạo đối tượng controller và gọi phương thức action
        $controllerObj = new $controllerName();
        $controllerObj->$action();  // Gọi phương thức action của controller
    } else {
        // Nếu action không tồn tại trong controller, hiển thị thông báo lỗi
        echo "Action không tồn tại!";
    }
} else {
    // Nếu controller không tồn tại, hiển thị thông báo lỗi
    echo "Controller không tồn tại!";
}
