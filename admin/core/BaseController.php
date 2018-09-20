<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 9/21/2018
 * Time: 5:20 AM
 */

class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load_header()
    {

    }

    public function load_footer()
    {
    
    }

    public function __destruct()
    {
        $this->view->render();
    }
}