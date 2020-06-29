<?php

require_once(__DIR__.'/../core/J_Controller.php');
require_once(__DIR__.'/../model/M_model.php');

class Home extends J_Controller
{
    function __construct()
    {
        $this->mModel = new M_model();
    }

    function index_get()
    {
        //echo "Hello from Jobayed MVC!!";
        $this->mModel->sayHello(' J MVC');
    }

    function hello_get(...$args)
    {
        echo "Hello, World! from GET";
	}

    function hello_post(...$args)
    {
        echo "Hello, World! from POST";
    }

}