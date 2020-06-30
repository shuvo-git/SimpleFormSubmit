<?php

require_once(__DIR__.'/../core/J_Controller.php');
require_once(__DIR__.'/../model/M_model.php');

class Details extends J_Controller
{
    function __construct()
    {
        $this->mModel = new M_model();
    }

    function list_get()
    {
        $ret = $this->mModel->getAllOrder();

        $data['content'] = "Welcome To J-MVC (Jobayed)";
        $data['orderTable'] = $ret;
        $this->load_view('details',$data);
    }
}

?>
