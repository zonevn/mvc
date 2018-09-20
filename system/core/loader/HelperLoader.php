<?php

class HelperLoader
{
    public function load($helper)
    {
        $helper = ucfirst($helper) . 'Helper';
        require_once(PATH_SYSTEM . '/helper/' . $helper . '.php');
    }
}