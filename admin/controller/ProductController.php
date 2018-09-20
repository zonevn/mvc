<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');


class ProductController extends BaseController
{
    public function indexAction()
    {
        $this->view->load('product');
    }
}