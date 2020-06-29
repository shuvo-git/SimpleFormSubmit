<?php


require_once(__DIR__.'/../core/J_Model.php');

class M_model extends J_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function sayHello($name)
    {
		echo "Welcome to  ". $name;
	}

}

?>