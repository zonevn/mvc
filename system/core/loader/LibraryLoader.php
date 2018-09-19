<?php if (!defined('PATH_SYSTEM')) die('Bad requested');

class LibraryLoader
{
    public function load($library, $args = array())
    {
        if (empty($this->{$library})) {
            $class = ucfirst(strtolower($library)) . 'Library';
            require_once(PATH_SYSTEM . '/library/' . $class . '.php');
            $this->{$library} = new $class($args);
        }
    }
}