<?php
/**
 * Created by PhpStorm.
 * User: VictorD
 * Date: 9/18/2018
 * Time: 11:07 AM
 */

class ConfigLoader
{
    protected $config = array();

    function load($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')) {
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
            if (!empty($config)) {
                foreach ($config as $key => $item) {
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return false;
    }

    function item($key, $default_val='')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $default_val;
    }

    function set($key, $val)
    {
        $this->config[$key] = $val;
    }
}