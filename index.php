<?php
require_once('./config/config.php');
echo APP_ROOT;
require_once APP_ROOT.'/controllers/homecontrollers.php';

$homecontroller = new homecontroller();
$homecontroller->index();





