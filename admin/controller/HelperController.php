<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class HelperController extends Controller
{
    public function indexAction()
    {
        $this->helper->load('string');
        echo stringToInt('freetuts.net');
    }
}