<?php

class J_Controller{

    function __construct()
    {
        echo 'J_controller created !!';
    }

    
    function load_view($view, $args)
    {
        foreach ($args as $vname => $vvalue) {

			$$vname = $vvalue;
		}
		require_once(__DIR__.'/../view/'.$view.'.php');

    }
}