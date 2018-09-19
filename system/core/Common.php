<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

function launch()
{
    $config = include_once PATH_APPLICATION . '/config/init.php';
    $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];
    $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];
    $controller = ucfirst(strtolower($controller)) . 'Controller';
    $action = strtolower($action) . "Action";

    if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
        die('Controller File Not Found.');
    }

    include_once PATH_SYSTEM.'/core/Controller.php';

    require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

    if (!class_exists($controller)) {
        die('Controller Class Not Found.');
    }

    $controllerObject = new $controller();

    if (!method_exists($controllerObject, $action)) {
        die('Action Not Found');
    }

    $controllerObject->{$action}();
}
