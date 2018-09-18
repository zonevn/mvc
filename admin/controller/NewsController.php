<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class NewsController extends Controller
{
    public function indexAction()
    {
        echo '<h1>Index Action</h1>';

        echo '<h3>Token Name:'.$this->config->item('csrf_token_name').'</h3>';

        $this->config->set('csrf_token_name','new_token');
        echo '<h3>Token Name:'.$this->config->item('csrf_token_name').'</h3>';

        $this->config->set('web_name','fretuts.net');
        echo '<h3>Web Name:'.$this->config->item('web_name').'</h3>';
    }

    public function detailAction()
    {
        echo '<pre>';
        print_r($this);
        echo '<h1>Detail Action</h1>';
    }
}