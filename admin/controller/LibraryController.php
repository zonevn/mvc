<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class LibraryController extends Controller
{
    public function indexAction()
    {
        $this->library->load('upload');
        $this->library->upload->upload();
    }
}