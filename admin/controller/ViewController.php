<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class ViewController extends Controller
{
    public function indexAction()
    {
        $data = array('title' => 'Welcome to freetuts.net');
        $this->view->load('view', $data);
        $this->view->render();
    }
}
