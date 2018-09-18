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
        require_once PATH_SYSTEM . '/core/loader/ConfigLoader.php';
        $this->config = new ConfigLoader();
        $this->config->load('config');

        require_once PATH_SYSTEM . '/core/loader/LibraryLoader.php';
        $this->library = new LibraryLoader();
    }
}