<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');


class Controller
{
    protected $view = NULL;
    protected $model = NULL;
    protected $library = NULL;
    protected $helper = NULL;
    protected $config = NULL;

    public function __construct()
    {
    }

    public function load($controller, $action)
    {
        $controller = ucfirst(strtolower($controller)) . 'Controller';
        $action = strtolower($action) . "Action";
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
            die('Controller File Not Found.');
        }

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
}